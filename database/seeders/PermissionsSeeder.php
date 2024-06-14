<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = json_decode(file_get_contents(base_path('resources/data/permissions.json')));
        foreach ($permissions as $permission) {
            $this->createPermission($permission);
        }

        // Create super admin role
        $role = Role::where('name', 'Super Admin')->first();
        if (! $role) {
            $role = Role::create([
                'name' => 'Super Admin'
            ]);
        }

        // Create super admin
        $superadmin = User::where('email', 'superadmin@gmail.com')->first();
        if(! $superadmin) {
            $superadmin = User::create([
                'name' => 'Super Admin',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('123456'),
                'is_admin_user' => true,
                'is_superadmin' => true,
            ]);
        }

        try {
            $superadmin->assignRole($role->name);
        } catch (\Exception $e) {

        }
    }

    public function createPermission($permission, $parent_id = null)
    {
        $parent = Permission::find($parent_id);
        $newPermissionName = $parent? $parent->name .'.'. $permission->name: $permission->name;
        $created = Permission::where('name', $newPermissionName)->first();
        if (! $created) {
            $created = Permission::create([
                "name" => $newPermissionName,
                "label" => $permission->label?? null,
                "parent_id" => $parent? $parent->id: null,
            ]);
        }

        if ($permission->children?? false) {
            foreach ($permission->children as $child) {
                $this->createPermission($child, $created->id);
            }
        }
    }
}
