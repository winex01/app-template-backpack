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
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'admin_file_manager',
                'guard_name' => 'web',
                'created_at' => '2023-10-15 07:36:05',
                'updated_at' => '2023-10-15 07:36:05',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'menus_list',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 14:14:17',
                'updated_at' => '2023-10-23 06:42:48',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'menus_create',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 14:14:36',
                'updated_at' => '2023-10-23 06:42:41',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'menus_update',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 14:14:43',
                'updated_at' => '2023-10-23 06:42:35',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'menus_delete',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 14:15:07',
                'updated_at' => '2023-10-23 06:42:26',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'menus_reorder',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 14:16:06',
                'updated_at' => '2023-10-23 06:42:20',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'menus_revise',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:31:14',
                'updated_at' => '2023-10-23 06:42:04',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'users_list',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:41:00',
                'updated_at' => '2023-10-16 23:41:00',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'users_show',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:41:24',
                'updated_at' => '2023-10-16 23:41:24',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'users_create',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:41:34',
                'updated_at' => '2023-10-16 23:41:34',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'users_update',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:41:44',
                'updated_at' => '2023-10-16 23:41:44',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'users_delete',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:41:51',
                'updated_at' => '2023-10-16 23:41:51',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 15,
                'name' => 'users_revise',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:41:57',
                'updated_at' => '2023-10-16 23:41:57',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 16,
                'name' => 'roles_list',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:55:25',
                'updated_at' => '2023-10-16 23:55:25',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 17,
                'name' => 'roles_create',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:55:44',
                'updated_at' => '2023-10-16 23:55:44',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 18,
                'name' => 'roles_update',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:55:53',
                'updated_at' => '2023-10-16 23:55:53',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 19,
                'name' => 'roles_delete',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:56:07',
                'updated_at' => '2023-10-16 23:56:07',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 20,
                'name' => 'roles_revise',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:56:20',
                'updated_at' => '2023-10-16 23:56:20',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 21,
                'name' => 'permissions_list',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:56:58',
                'updated_at' => '2023-10-16 23:56:58',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 22,
                'name' => 'permissions_create',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:57:04',
                'updated_at' => '2023-10-16 23:57:04',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 23,
                'name' => 'permissions_update',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:57:09',
                'updated_at' => '2023-10-16 23:57:09',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 24,
                'name' => 'permissions_delete',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:57:12',
                'updated_at' => '2023-10-16 23:57:12',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 25,
                'name' => 'permissions_revise',
                'guard_name' => 'web',
                'created_at' => '2023-10-16 23:57:18',
                'updated_at' => '2023-10-16 23:57:18',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 26,
                'name' => 'admin_debugbar',
                'guard_name' => 'web',
                'created_at' => '2023-10-19 03:17:34',
                'updated_at' => '2023-10-19 03:17:34',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 27,
                'name' => 'admin_activity_log',
                'guard_name' => 'web',
                'created_at' => '2023-10-21 05:27:29',
                'updated_at' => '2023-11-15 14:48:33',
                'deleted_at' => '2023-11-15 14:48:33',
            ),
            26 => 
            array (
                'id' => 28,
                'name' => 'admin_telescope',
                'guard_name' => 'web',
                'created_at' => '2023-10-23 10:21:07',
                'updated_at' => '2023-10-23 10:21:07',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 29,
                'name' => 'employees_list',
                'guard_name' => 'web',
                'created_at' => '2023-11-15 12:03:57',
                'updated_at' => '2023-11-15 12:03:57',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 30,
                'name' => 'employees_create',
                'guard_name' => 'web',
                'created_at' => '2023-11-15 12:04:06',
                'updated_at' => '2023-11-15 12:04:06',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 31,
                'name' => 'employees_update',
                'guard_name' => 'web',
                'created_at' => '2023-11-15 12:04:15',
                'updated_at' => '2023-11-15 12:04:15',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 32,
                'name' => 'employees_delete',
                'guard_name' => 'web',
                'created_at' => '2023-11-15 12:04:22',
                'updated_at' => '2023-11-15 12:04:22',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 33,
                'name' => 'employees_revise',
                'guard_name' => 'web',
                'created_at' => '2023-11-15 12:04:52',
                'updated_at' => '2023-11-15 12:04:52',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 34,
                'name' => 'activity_logs_list',
                'guard_name' => 'web',
                'created_at' => '2023-11-15 14:46:50',
                'updated_at' => '2023-11-16 01:40:22',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 35,
                'name' => 'activity_logs_show',
                'guard_name' => 'web',
                'created_at' => '2023-11-15 14:46:58',
                'updated_at' => '2023-11-16 01:40:29',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}