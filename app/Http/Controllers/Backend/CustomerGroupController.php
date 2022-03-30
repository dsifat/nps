<?php

namespace App\Http\Controllers\Backend;

use Flash;
use Response;
use Illuminate\Http\Request;
use App\Imports\CustomerListImport;
use App\Models\Backend\CustomerList;
use App\Models\Backend\CustomerGroup;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\AppBaseController;
use App\DataTables\Backend\CustomerListDataTable;
use App\DataTables\Backend\CustomerGroupDataTable;
use App\Http\Requests\Backend\CreateCustomerGroupRequest;
use App\Http\Requests\Backend\UpdateCustomerGroupRequest;

class CustomerGroupController extends AppBaseController
{
    public function __construct()
    {
        $this->resource_str = 'CustomerGroup';
        $this->setCrudPermissions();
    }

    /**
     * Display a listing of the CustomerGroup.
     *
     * @param CustomerGroupDataTable $customerGroupDataTable
     * @return Response
     */
    public function index(CustomerGroupDataTable $customerGroupDataTable)
    {
        return $customerGroupDataTable->render('backend.customer_groups.index');
    }

    /**
     * Show the form for creating a new CustomerGroup.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.customer_groups.create');
    }

    /**
     * Store a newly created CustomerGroup in storage.
     *
     * @param CreateCustomerGroupRequest $request
     *
     * @return Response
     */
    public function store(CreateCustomerGroupRequest $request)
    {
        $file = $request->file('customer_list');
        $location = 'uploads';
        $filename = $file->getClientOriginalName();
        $file->move($location, $filename);
        $filepath = public_path($location . "/" . $filename);

        $items = \Excel::toArray(new CustomerListImport(), $filepath);
        $foo = true;
        foreach ($items[0] as $item) {
            if (! isset($item['phone_number']) && ! isset($item['email'])) {
                return Redirect::back()->withErrors(['file' => 'Email or Phone Number column in the file is required'])
                    ->withInput();
            } else {
                if ($foo) {
                    $customerGroup = CustomerGroup::create([
                        'name' => $request['name'],
                    ]);
                    $foo = false;
                }
                CustomerList::create([
                    'name' => $item['name'],
                    'email' => $item['email'],
                    'phone_number' => $item['phone_number'],
                    'customer_group_id' => $customerGroup->id,
                ]);
            }
        }

        Flash::success('Customer Group saved successfully.');

        return redirect(route('backend.customerGroups.index'));
    }

    /**
     * Display the specified CustomerGroup.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show(CustomerListDataTable $customerListDataTable, $id, Request $request)
    {
        $customerListDataTable->query(app()->make(CustomerList::class), $request);

        return $customerListDataTable->render('backend.customer_groups.show');
    }

    /**
     * Show the form for editing the specified CustomerGroup.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var CustomerGroup $customerGroup */
        $customerGroup = CustomerGroup::find($id);

        if (empty($customerGroup)) {
            Flash::error('Customer Group not found');

            return redirect(route('backend.customerGroups.index'));
        }

        return view('backend.customer_groups.edit')->with('customerGroup', $customerGroup);
    }

    /**
     * Update the specified CustomerGroup in storage.
     *
     * @param int $id
     * @param UpdateCustomerGroupRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCustomerGroupRequest $request)
    {
        CustomerList::where('customer_group_id', $id)->delete();

        $file = $request->file('customer_list');
        $location = 'uploads';
        $filename = $file->getClientOriginalName();
        $file->move($location, $filename);
        $filepath = public_path($location . "/" . $filename);

        $items = \Excel::toArray(new CustomerListImport(), $filepath);
        $isCustomerGroupUpdated = false;
        foreach ($items[0] as $item) {
            if (! isset($item['phone_number']) && ! isset($item['email'])) {
                return Redirect::back()->withErrors(['file' => 'Email or Phone Number column in the file is required'])
                    ->withInput();
            } else {
                if (! $isCustomerGroupUpdated) {
                    $customerGroup = CustomerGroup::find($id);
                    if (empty($customerGroup)) {
                        Flash::error('Customer Group not found');

                        return redirect(route('backend.customerGroups.index'));
                    }
                    $customerGroup->name = $request['name'];
                    $customerGroup->save();
                    $isCustomerGroupUpdated = true;
                }

                CustomerList::create([
                    'name' => $item['name'],
                    'email' => $item['email'],
                    'phone_number' => $item['phone_number'],
                    'customer_group_id' => $id,
                ]);
            }
        }

        Flash::success('Customer Group updated successfully.');

        return redirect(route('backend.customerGroups.index'));
    }

    /**
     * Remove the specified CustomerGroup from storage.
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        /** @var CustomerGroup $customerGroup */
        $customerGroup = CustomerGroup::find($id);

        if (empty($customerGroup)) {
            Flash::error('Customer Group not found');

            return redirect(route('backend.customerGroups.index'));
        }

        $customerGroup->delete();

        Flash::success('Customer Group deleted successfully.');

        return redirect(route('backend.customerGroups.index'));
    }
}
