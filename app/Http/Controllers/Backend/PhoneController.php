<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\PhoneDataTable;
use App\Http\Requests\Backend;
use App\Http\Requests\Backend\CreatePhoneRequest;
use App\Http\Requests\Backend\UpdatePhoneRequest;
use App\Models\Backend\Phone;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PhoneController extends AppBaseController
{
    public function __construct()
    {
        $this->resource_str = 'Phone';
        $this->setCrudPermissions();
    }

    /**
     * Display a listing of the Phone.
     *
     * @param PhoneDataTable $phoneDataTable
     * @return Response
     */
    public function index(PhoneDataTable $phoneDataTable)
    {
        return $phoneDataTable->render('backend.phones.index');
    }

    /**
     * Show the form for creating a new Phone.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.phones.create');
    }

    /**
     * Store a newly created Phone in storage.
     *
     * @param CreatePhoneRequest $request
     *
     * @return Response
     */
    public function store(CreatePhoneRequest $request)
    {
        $input = $request->all();

        /** @var Phone $phone */
        $phone = Phone::create($input);

        Flash::success('Phone saved successfully.');

        return redirect(route('backend.phones.index'));
    }

    /**
     * Display the specified Phone.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Phone $phone */
        $phone = Phone::find($id);

        if (empty($phone)) {
            Flash::error('Phone not found');

            return redirect(route('backend.phones.index'));
        }

        return view('backend.phones.show')->with('phone', $phone);
    }

    /**
     * Show the form for editing the specified Phone.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Phone $phone */
        $phone = Phone::find($id);

        if (empty($phone)) {
            Flash::error('Phone not found');

            return redirect(route('backend.phones.index'));
        }

        return view('backend.phones.edit')->with('phone', $phone);
    }

    /**
     * Update the specified Phone in storage.
     *
     * @param  int              $id
     * @param UpdatePhoneRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePhoneRequest $request)
    {
        /** @var Phone $phone */
        $phone = Phone::find($id);

        if (empty($phone)) {
            Flash::error('Phone not found');

            return redirect(route('backend.phones.index'));
        }

        $phone->fill($request->all());
        $phone->save();

        Flash::success('Phone updated successfully.');

        return redirect(route('backend.phones.index'));
    }

    /**
     * Remove the specified Phone from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Phone $phone */
        $phone = Phone::find($id);

        if (empty($phone)) {
            Flash::error('Phone not found');

            return redirect(route('backend.phones.index'));
        }

        $phone->delete();

        Flash::success('Phone deleted successfully.');

        return redirect(route('backend.phones.index'));
    }
}
