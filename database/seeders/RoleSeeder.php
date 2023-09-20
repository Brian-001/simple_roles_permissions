<?php

namespace Database\Seeders;

use App\Enums\RoleName;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $this->createAdminRole();
        $this->createAdditionalRoles();
    }


    //createRole method accepts two arguements RoleName and a collection of permissions
    public function createRole(RoleName $role, Collection $permissions)
    {
        $newRole = Role::create(['name' =>  $role->value]);
        $newRole->permissions()->sync($permissions);
    }

    //createAdminRole() queries for all permissions that begin with 'user.' OR 'restaurant.' and passes along RoleName to the createRole()

    //We allow the admin user to perform all available actions on models
    protected function createAdminRole(): void
    {
        $permissions = Permission::query()
        ->where('name', 'like', 'user.%')
        ->orWhere('name', 'like', 'restaurant.%')
        ->pluck('id');

        $this->createRole(RoleName::ADMIN, $permissions);
    }

    protected function createAdditionalRoles(): void
    {
        $vendorPermissions = Permission::query()
        ->where('name', 'like', 'vendor.%')
        ->pluck('id');

        $staffPermissions = Permission::query()
        ->where('name', 'like', 'staff.%')
        ->pluck('id');

        $customerPermissions = Permission::query()
        ->where('name', 'like', 'customer')
        ->pluck('id');


        //Create roles and assign permissions
        $this->createRole(RoleName::VENDOR, $vendorPermissions);
        $this->createRole(RoleName::STAFF, $staffPermissions);
        $this->createRole(RoleName::CUSTOMER, $customerPermissions);

    }
}
