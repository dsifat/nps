<?php

namespace App\Http\Controllers\Backend;

use Hash;
use Flash;
use Response;
use App\Models\Backend\Role;
use App\Models\Backend\User;
use Illuminate\Auth\Events\Registered;
use App\DataTables\Backend\UserDataTable;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\Backend\CreateUserRequest;
use App\Http\Requests\Backend\UpdateUserRequest;

class UserController extends AppBaseController
{
    public function __construct()
    {
        $this->resource_str = 'User';
        $this->setCrudPermissions();
    }

    /**
     * Display a listing of the User.
     *
     * @param UserDataTable $userDataTable
     * @return Response
     */
    public function index(UserDataTable $userDataTable)
    {
        return $userDataTable->render('backend.users.index');
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->except('role_ids');
        $input['password'] = Hash::make($input['password']);
        /** @var User $user */
        $user = User::create($input);

        $ids = $request->role_ids ?? [];
        $user->assignRole(Role::find($ids));

        event(new Registered($user));

        Flash::success('User saved successfully.');

        return redirect(route('backend.users.index'));
    }

    /**
     * Display the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var User $user */
        $user = User::find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('backend.users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var User $user */
        $user = User::find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('backend.users.edit')->with('user', $user);
    }

    /**
     * Update the specified User in storage.
     *
     * @param int $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        /** @var User $user */
        $user = User::find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('backend.users.index'));
        }

        $input = $request->except('role_ids');
        if (! empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            unset($input['password']);
        }
        $user->fill($input);
        $user->save();

        $ids = $request->role_ids ?? [];
        $user->assignRole(Role::find($ids));

        Flash::success('User updated successfully.');

        return redirect(route('backend.users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var User $user */
        $user = User::find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $user->delete();

        Flash::success('User deleted successfully.');

        return redirect(route('backend.users.index'));
    }
}
