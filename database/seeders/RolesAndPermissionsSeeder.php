<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $models = [
            'admins', 'roles', 'main_pages','menu_links','categories','news','events','pages','sections','faqs','staff','slider_groups',
            'sliders','statistics','departments','partners','videos','images'

            ];
        $actions = ['list','create', 'update', 'delete'];

        $permissions = [];
        foreach ($models as $model) {
            foreach ($actions as $action) {
                $permission['guard_name'] = 'admin';
                $permission['name'] = $action . '_' . $model;
                $permission['created_at'] = Carbon::now();
                $permission['updated_at'] = Carbon::now();
                array_push($permissions, $permission);
            }
        }
        Permission::insert($permissions);

        $role = Role::create(['name' => 'Super Admin', 'guard_name' => 'admin']);
        $role->givePermissionTo(Permission::all());


    }
}
