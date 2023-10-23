<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'guard_name' => 'web',
                'created_at' => '2023-10-15 07:07:03',
                'updated_at' => '2023-10-15 07:07:03',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 14:33:32',
                'updated_at' => '2023-10-23 06:44:23',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Users',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:44:37',
                'updated_at' => '2023-10-16 23:44:37',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Roles',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:58:49',
                'updated_at' => '2023-10-16 23:58:49',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Permissions',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:59:13',
                'updated_at' => '2023-10-16 23:59:13',
            ),
        ));
        
        
    }
}