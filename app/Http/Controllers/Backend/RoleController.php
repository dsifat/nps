<?php

namespace App\Http\Controllers\Backend;

use Flash;
use Response;
use App\Models\Backend\Role;
use App\Models\Backend\Permission;
use App\DataTables\Backend\RoleDataTable;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\Backend\CreateRoleRequest;
use App\Http\Requests\Backend\UpdateRoleRequest;

class RoleController extends AppBaseController
{
    public function __construct()
    {
        $this->resource_str = 'Role';
        $this->setCrudPermissions();
    }

    /**
     * Display a listing of the Role.
     *
     * @param RoleDataTable $roleDataTable
     * @return Response
     */
    public function index(RoleDataTable $roleDataTable)
    {
        return $roleDataTable->render('backend.roles.index');
    }

    /**
     * Show the form for creating a new Role.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.roles.create');
    }

    /**
     * Store a newly created Role in storage.
     *
     * @param CreateRoleRequest $request
     *
     * @return Response
     */
    public function store(CreateRoleRequest $request)
    {
        $input = $request->except('permissions');

        /** @var Role $role */
        $role = Role::create($input);

        $role->allowTo(Permission::find($request->permissions));

        Flash::success('Role saved successfully.');

        return redirect(route('backend.roles.index'));
    }

    /**
     * Display the specified Role.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Role $role */
        $role = Role::find($id);

        if (empty($role)) {
            Flash::error('Role not found');

            return redirect(route('backend.roles.index'));
        }

        return view('backend.roles.show')->with('role', $role);
    }

    /**
     * Show the form for editing the specified Role.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Role $role */
        $role = Role::find($id);

        if (empty($role)) {
            Flash::error('Role not found');

            return redirect(route('backend.roles.index'));
        }

        return view('backend.roles.edit')->with('role', $role);
    }

    /**
     * Update the specified Role in storage.
     *
     * @param  int              $id
     * @param UpdateRoleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRoleRequest $request)
    {
        /** @var Role $role */
        $role = Role::find($id);

        if (empty($role)) {
            Flash::error('Role not found');

            return redirect(route('backend.roles.index'));
        }

        $role->fill($request->except('permissions'));
        $role->save();

        $role->allowTo(Permission::find($request->permissions));

        Flash::success('Role updated successfully.');

        return redirect(route('backend.roles.index'));
    }

    /**
     * Remove the specified Role from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Role $role */
        $role = Role::find($id);

        if (empty($role)) {
            Flash::error('Role not found');

            return redirect(route('backend.roles.index'));
        }

        $role->delete();

        Flash::success('Role deleted successfully.');

        return redirect(route('backend.roles.index'));
    }
}
