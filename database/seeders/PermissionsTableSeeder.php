<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin_web_tinker',
                'guard_name' => 'web',
                'created_at' => '2023-10-15 07:06:44',
                'updated_at' => '2023-10-15 07:06:44',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'admin_file_manager',
                'guard_name' => 'web',
                'created_at' => '2023-10-15 07:36:05',
                'updated_at' => '2023-10-15 07:36:05',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'menu_items_list',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 14:14:17',
                'updated_at' => '2023-10-16 14:14:17',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'menu_items_create',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 14:14:36',
                'updated_at' => '2023-10-16 14:14:36',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'menu_items_update',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 14:14:43',
                'updated_at' => '2023-10-16 14:14:43',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'menu_items_delete',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 14:15:07',
                'updated_at' => '2023-10-16 14:15:07',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'menu_items_reorder',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 14:16:06',
                'updated_at' => '2023-10-16 14:16:06',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'menu_items_revise',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:31:14',
                'updated_at' => '2023-10-16 23:31:14',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'users_list',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:41:00',
                'updated_at' => '2023-10-16 23:41:00',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'users_show',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:41:24',
                'updated_at' => '2023-10-16 23:41:24',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'users_create',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:41:34',
                'updated_at' => '2023-10-16 23:41:34',
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'users_update',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:41:44',
                'updated_at' => '2023-10-16 23:41:44',
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'users_delete',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:41:51',
                'updated_at' => '2023-10-16 23:41:51',
            ),
            13 => 
            array (
                'id' => 15,
                'name' => 'users_revise',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:41:57',
                'updated_at' => '2023-10-16 23:41:57',
            ),
            14 => 
            array (
                'id' => 16,
                'name' => 'roles_list',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:55:25',
                'updated_at' => '2023-10-16 23:55:25',
            ),
            15 => 
            array (
                'id' => 17,
                'name' => 'roles_create',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:55:44',
                'updated_at' => '2023-10-16 23:55:44',
            ),
            16 => 
            array (
                'id' => 18,
                'name' => 'roles_update',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:55:53',
                'updated_at' => '2023-10-16 23:55:53',
            ),
            17 => 
            array (
                'id' => 19,
                'name' => 'roles_delete',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:56:07',
                'updated_at' => '2023-10-16 23:56:07',
            ),
            18 => 
            array (
                'id' => 20,
                'name' => 'roles_revise',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:56:20',
                'updated_at' => '2023-10-16 23:56:20',
            ),
            19 => 
            array (
                'id' => 21,
                'name' => 'permissions_list',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:56:58',
                'updated_at' => '2023-10-16 23:56:58',
            ),
            20 => 
            array (
                'id' => 22,
                'name' => 'permissions_create',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:57:04',
                'updated_at' => '2023-10-16 23:57:04',
            ),
            21 => 
            array (
                'id' => 23,
                'name' => 'permissions_update',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:57:09',
                'updated_at' => '2023-10-16 23:57:09',
            ),
            22 => 
            array (
                'id' => 24,
                'name' => 'permissions_delete',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:57:12',
                'updated_at' => '2023-10-16 23:57:12',
            ),
            23 => 
            array (
                'id' => 25,
                'name' => 'permissions_revise',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:57:18',
                'updated_at' => '2023-10-16 23:57:18',
            ),
        ));
        
        
    }
}