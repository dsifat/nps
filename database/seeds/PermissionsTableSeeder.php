<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Backend\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        \DB::statement('TRUNCATE permission_role');

        Permission::truncate();

        // SuperAdmin
        Permission::create(['label' => 'Super Admin', 'permission' => 'SUPER-ADMIN', 'group' => 'Super Admin']);

        // User Management - CRUD
        Permission::create(['label' => 'Read User', 'permission' => 'ReadUser', 'group' => 'User Management']);
        Permission::create(['label' => 'Create User', 'permission' => 'CreateUser', 'group' => 'User Management']);
        Permission::create(['label' => 'Edit User', 'permission' => 'EditUser', 'group' => 'User Management']);
        Permission::create(['label' => 'Delete User', 'permission' => 'DeleteUser', 'group' => 'User Management']);

        // Role Management  CRUD
        Permission::create(['label' => 'Read Role', 'permission' => 'ReadRole', 'group' => 'Role Management']);
        Permission::create(['label' => 'Create Role', 'permission' => 'CreateRole', 'group' => 'Role Management']);
        Permission::create(['label' => 'Edit Role', 'permission' => 'EditRole', 'group' => 'Role Management']);
        Permission::create(['label' => 'Delete Role', 'permission' => 'DeleteRole', 'group' => 'Role Management']);

        // Permission Management  CRUD
        Permission::create(['label' => 'Read Permission', 'permission' => 'ReadPermission', 'group' => 'Permission Management']);
        Permission::create(['label' => 'Create Permission', 'permission' => 'CreatePermission', 'group' => 'Permission Management']);
        Permission::create(['label' => 'Edit Permission', 'permission' => 'EditPermission', 'group' => 'Permission Management']);
        Permission::create(['label' => 'Delete Permission', 'permission' => 'DeletePermission', 'group' => 'Permission Management']);

        // ISP Management  CRUD
        Permission::create(['label' => 'Read Partner', 'permission' => 'ReadPartner', 'group' => 'Partner Management']);
        Permission::create(['label' => 'Create Partner', 'permission' => 'CreatePartner', 'group' => 'Partner Management']);
        Permission::create(['label' => 'Edit Partner', 'permission' => 'EditPartner', 'group' => 'Partner Management']);
        Permission::create(['label' => 'Delete Partner', 'permission' => 'DeletePartner', 'group' => 'Partner Management']);
        Permission::create(['label' => 'Deposit', 'permission' => 'DepositPartner', 'group' => 'Partner Management']);


        // Subscription Management  CRUD
        Permission::create(['label' => 'Read Subscription', 'permission' => 'ReadSubscription', 'group' => 'Subscription Management']);
        Permission::create(['label' => 'Create Subscription', 'permission' => 'CreateSubscription', 'group' => 'Subscription Management']);
        Permission::create(['label' => 'Edit Subscription', 'permission' => 'EditSubscription', 'group' => 'Subscription Management']);
        Permission::create(['label' => 'Delete Subscription', 'permission' => 'DeleteSubscription', 'group' => 'Subscription Management']);

        // Transaction Management  CRUD
        Permission::create(['label' => 'Read Transaction', 'permission' => 'ReadTransaction', 'group' => 'Transaction Management']);
        Permission::create(['label' => 'Create Transaction', 'permission' => 'CreateTransaction', 'group' => 'Transaction Management']);
        Permission::create(['label' => 'Edit Transaction', 'permission' => 'EditTransaction', 'group' => 'Transaction Management']);
        Permission::create(['label' => 'Delete Transaction', 'permission' => 'DeleteTransaction', 'group' => 'Transaction Management']);

        // Scheduler Management  CRUD
        Permission::create(['label' => 'Read Scheduler', 'permission' => 'ReadScheduler', 'group' => 'Scheduler Management']);
        Permission::create(['label' => 'Create Scheduler', 'permission' => 'CreateScheduler', 'group' => 'Scheduler Management']);
        Permission::create(['label' => 'Edit Scheduler', 'permission' => 'EditScheduler', 'group' => 'Scheduler Management']);
        Permission::create(['label' => 'Delete Scheduler', 'permission' => 'DeleteScheduler', 'group' => 'Scheduler Management']);
    }
}
