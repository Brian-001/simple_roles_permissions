<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //$actions array defines what actions the user will be able to perform on a resource
        $actions = [
            'viewAny',
            'view',
            'create',
            'update',
            'delete',
            'restore',
            'forceDelete',
        ];

        //$resources array defines who will perform those actions
        $resources = [
            'user',
            'restaurant',
        ];

        //crossJoin collection method is used to match every action with every resource
        //Later we map them using implode() into strings like user.viewAny, user.view to create permission names
        collect($resources)->crossJoin($actions)->map(function($set){
            return implode('.', $set);
        })->each(function($permission) {
            Permission::create(['name' => $permission]);
        });
    }
}
