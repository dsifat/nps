<?php

namespace Database\Seeders;

use App\Models\Backend\Role;
use App\Models\Backend\User;
use Illuminate\Database\Seeder;
use App\Models\Backend\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
          'name' => 'Imdadul Haque',
          'email' => 'i@h.co',
          'password' => bcrypt('asdf'),
          'email_verified_at' => date('Y-m-d'),
        ]);

        $role = Role::create(['role_name' => 'Super Admin']);
        $permission = Permission::where('permission', 'SUPER-ADMIN')->firstOrFail();

        $role->allowTo($permission);

        $user->assignRole($role);
    }
}
