<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AssignRolesAndPermissionsToAdminUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = User::find(1);
        $roles = Role::all();

        foreach ($roles as $role) {
            $prefix = Str::of($role->name)->snake();
            $permissions = Permission::where('name', 'like', '%' . $prefix . '%')->get();
            
            $role->givePermissionTo($permissions);
            
            $user->assignRole($role);  	
            
        }
        
        // assign all permissions that don't belong to Roles to users also
        $permissionsWithoutRole = Permission::whereDoesntHave('roles')->get();

        if (!$permissionsWithoutRole->isEmpty()) {

            $user->syncPermissions($permissionsWithoutRole);    
        }

    }
}
