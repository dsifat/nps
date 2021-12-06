<?php

namespace App\Http\Controllers\Backend;

use Flash;
use Response;
use App\Models\Backend\Permission;
use App\Http\Controllers\AppBaseController;
use App\DataTables\Backend\PermissionDataTable;
use App\Http\Requests\Backend\CreatePermissionRequest;
use App\Http\Requests\Backend\UpdatePermissionRequest;

class PermissionController extends AppBaseController
{
    public function __construct()
    {
        $this->resource_str = 'Permission';
        $this->setCrudPermissions();
    }

    /**
     * Display a listing of the Permission.
     *
     * @param PermissionDataTable $permissionDataTable
     * @return Response
     */
    public function index(PermissionDataTable $permissionDataTable)
    {
        return $permissionDataTable->render('backend.permissions.index');
    }

    /**
     * Show the form for creating a new Permission.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.permissions.create');
    }

    /**
     * Store a newly created Permission in storage.
     *
     * @param CreatePermissionRequest $request
     *
     * @return Response
     */
    public function store(CreatePermissionRequest $request)
    {
        $input = $request->all();

        /** @var Permission $permission */
        $permission = Permission::create($input);

        Flash::success('Permission saved successfully.');

        return redirect(route('backend.permissions.index'));
    }

    /**
     * Display the specified Permission.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Permission $permission */
        $permission = Permission::find($id);

        if (empty($permission)) {
            Flash::error('Permission not found');

            return redirect(route('backend.permissions.index'));
        }

        return view('backend.permissions.show')->with('permission', $permission);
    }

    /**
     * Show the form for editing the specified Permission.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Permission $permission */
        $permission = Permission::find($id);

        if (empty($permission)) {
            Flash::error('Permission not found');

            return redirect(route('backend.permissions.index'));
        }

        return view('backend.permissions.edit')->with('permission', $permission);
    }

    /**
     * Update the specified Permission in storage.
     *
     * @param  int              $id
     * @param UpdatePermissionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePermissionRequest $request)
    {
        /** @var Permission $permission */
        $permission = Permission::find($id);

        if (empty($permission)) {
            Flash::error('Permission not found');

            return redirect(route('backend.permissions.index'));
        }

        $permission->fill($request->all());
        $permission->save();

        Flash::success('Permission updated successfully.');

        return redirect(route('backend.permissions.index'));
    }

    /**
     * Remove the specified Permission from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Permission $permission */
        $permission = Permission::find($id);

        if (empty($permission)) {
            Flash::error('Permission not found');

            return redirect(route('backend.permissions.index'));
        }

        $permission->delete();

        Flash::success('Permission deleted successfully.');

        return redirect(route('backend.permissions.index'));
    }
}
