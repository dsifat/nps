<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\PhoneByGroupDataTable;
use App\DataTables\Backend\PhoneGroupDataTable;
use App\Http\Requests\Backend\CreatePhoneGroupRequest;
use App\Http\Requests\Backend\UpdatePhoneGroupRequest;
use App\Imports\PhoneImport;
use App\Models\Backend\Phone;
use App\Models\Backend\PhoneGroup;
use Flash;
use App\Http\Controllers\AppBaseController;
use Maatwebsite\Excel\Facades\Excel;
use Response;

class PhoneGroupController extends AppBaseController
{
    public function __construct()
    {
        $this->resource_str = 'PhoneGroup';
        $this->setCrudPermissions();
    }

    /**
     * Display a listing of the PhoneGroup.
     *
     * @param PhoneGroupDataTable $phoneGroupDataTable
     * @return Response
     */
    public function index(PhoneGroupDataTable $phoneGroupDataTable)
    {
        return $phoneGroupDataTable->render('backend.phone_groups.index');
    }

    /**
     * Show the form for creating a new PhoneGroup.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.phone_groups.create');
    }

    /**
     * Store a newly created PhoneGroup in storage.
     *
     * @param CreatePhoneGroupRequest $request
     *
     * @return Response
     */
    public function store(CreatePhoneGroupRequest $request)
    {
        $input = $request->all();
        /** @var PhoneGroup $phoneGroup */
        $phoneGroup = PhoneGroup::create($input);
        Excel::import(new PhoneImport($phoneGroup->id), $request->file('phone_number')->store('temp'));
        Flash::success('Phone Group saved successfully.');
        return redirect(route('backend.phoneGroups.index'));
    }

    /**
     * Display the specified PhoneGroup.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var PhoneGroup $phoneGroup */
        $phoneGroup = PhoneGroup::find($id);

        if (empty($phoneGroup)) {
            Flash::error('Phone Group not found');

            return redirect(route('backend.phoneGroups.index'));
        }
        $phoneByGroupDataTable = new PhoneByGroupDataTable($id);
        $data = [
          'phoneGroup' => $phoneGroup
        ];
        return $phoneByGroupDataTable->render('backend.phones.index',$data);
    }

    /**
     * Show the form for editing the specified PhoneGroup.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var PhoneGroup $phoneGroup */
        $phoneGroup = PhoneGroup::find($id);

        if (empty($phoneGroup)) {
            Flash::error('Phone Group not found');

            return redirect(route('backend.phoneGroups.index'));
        }

        return view('backend.phone_groups.edit')->with('phoneGroup', $phoneGroup);
    }

    /**
     * Update the specified PhoneGroup in storage.
     *
     * @param int $id
     * @param UpdatePhoneGroupRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePhoneGroupRequest $request)
    {
        /** @var PhoneGroup $phoneGroup */
        $phoneGroup = PhoneGroup::find($id);

        if (empty($phoneGroup)) {
            Flash::error('Phone Group not found');

            return redirect(route('backend.phoneGroups.index'));
        }
        $input = $request->all();
        $phoneGroup->fill($input);
        Excel::import(new PhoneImport($id), $request->file('phone_number')->store('temp2'));
        $phoneGroup->save();
        Flash::success('Phone Group updated successfully.');
        return redirect(route('backend.phoneGroups.index'));
    }

    /**
     * Remove the specified PhoneGroup from storage.
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        /** @var PhoneGroup $phoneGroup */
        $phoneGroup = PhoneGroup::find($id);


        if (empty($phoneGroup)) {
            Flash::error('Phone Group not found');
            return redirect(route('backend.phoneGroups.index'));
        }
        $phones = Phone::where('phone_groups_id', $id);
        $phones->delete();
        $phoneGroup->delete();

        Flash::success('Phone Group deleted successfully.');

        return redirect(route('backend.phoneGroups.index'));
    }
}
