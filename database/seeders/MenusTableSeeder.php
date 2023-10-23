<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'label' => 'Menu',
                'url' => 'menu',
                'icon' => 'la la-list',
                'permission' => 'menus_list',
                'open_new_tab' => 0,
                'parent_id' => NULL,
                'lft' => 24,
                'rgt' => 25,
                'depth' => 1,
                'created_at' => '2023-10-16 14:59:13',
                'updated_at' => '2023-10-21 05:28:17',
            ),
            1 => 
            array (
                'id' => 2,
                'label' => 'Add-Ons',
                'url' => NULL,
                'icon' => NULL,
                'permission' => NULL,
                'open_new_tab' => 0,
                'parent_id' => 3,
                'lft' => 5,
                'rgt' => 6,
                'depth' => 2,
                'created_at' => '2023-10-16 23:34:16',
                'updated_at' => '2023-10-21 05:28:17',
            ),
            2 => 
            array (
                'id' => 3,
                'label' => 'Installed Package',
                'url' => NULL,
                'icon' => 'la la-puzzle-piece',
                'permission' => NULL,
                'open_new_tab' => 0,
                'parent_id' => NULL,
                'lft' => 4,
                'rgt' => 23,
                'depth' => 1,
                'created_at' => '2023-10-16 23:35:38',
                'updated_at' => '2023-10-21 05:28:17',
            ),
            3 => 
            array (
                'id' => 4,
                'label' => 'Authentication',
                'url' => NULL,
                'icon' => 'la la-users',
                'permission' => NULL,
                'open_new_tab' => 0,
                'parent_id' => 3,
                'lft' => 9,
                'rgt' => 16,
                'depth' => 2,
                'created_at' => '2023-10-16 23:38:03',
                'updated_at' => '2023-10-21 05:28:17',
            ),
            4 => 
            array (
                'id' => 5,
                'label' => 'Users',
                'url' => 'user',
                'icon' => 'la la-user',
                'permission' => 'users_list',
                'open_new_tab' => 0,
                'parent_id' => 4,
                'lft' => 10,
                'rgt' => 11,
                'depth' => 3,
                'created_at' => '2023-10-16 23:40:38',
                'updated_at' => '2023-10-21 05:28:17',
            ),
            5 => 
            array (
                'id' => 6,
                'label' => 'Roles',
                'url' => 'role',
                'icon' => 'la la-id-badge',
                'permission' => 'roles_list',
                'open_new_tab' => 0,
                'parent_id' => 4,
                'lft' => 12,
                'rgt' => 13,
                'depth' => 3,
                'created_at' => '2023-10-17 00:01:32',
                'updated_at' => '2023-10-21 05:28:17',
            ),
            6 => 
            array (
                'id' => 7,
                'label' => 'Permissions',
                'url' => 'permission',
                'icon' => 'la la-key',
                'permission' => 'permissions_list',
                'open_new_tab' => 0,
                'parent_id' => 4,
                'lft' => 14,
                'rgt' => 15,
                'depth' => 3,
                'created_at' => '2023-10-17 00:02:24',
                'updated_at' => '2023-10-22 03:18:06',
            ),
            7 => 
            array (
                'id' => 8,
                'label' => 'File Manager',
                'url' => 'elfinder',
                'icon' => 'la la-files-o',
                'permission' => 'admin_file_manager',
                'open_new_tab' => 0,
                'parent_id' => 3,
                'lft' => 17,
                'rgt' => 18,
                'depth' => 2,
                'created_at' => '2023-10-17 00:09:28',
                'updated_at' => '2023-10-21 06:48:51',
            ),
            8 => 
            array (
                'id' => 9,
                'label' => 'Web Artisan Tinker',
                'url' => 'tinker',
                'icon' => 'lab la-laravel',
                'permission' => 'admin_web_tinker',
                'open_new_tab' => 1,
                'parent_id' => 3,
                'lft' => 21,
                'rgt' => 22,
                'depth' => 2,
                'created_at' => '2023-10-17 00:10:16',
                'updated_at' => '2023-10-21 05:28:17',
            ),
            9 => 
            array (
                'id' => 10,
                'label' => 'Package',
                'url' => NULL,
                'icon' => NULL,
                'permission' => NULL,
                'open_new_tab' => 0,
                'parent_id' => 3,
                'lft' => 19,
                'rgt' => 20,
                'depth' => 2,
                'created_at' => '2023-10-17 00:11:40',
                'updated_at' => '2023-10-21 05:28:17',
            ),
            10 => 
            array (
                'id' => 11,
                'label' => 'Dashboard',
                'url' => 'dashboard',
                'icon' => 'la la-dashboard',
                'permission' => NULL,
                'open_new_tab' => 0,
                'parent_id' => NULL,
                'lft' => 2,
                'rgt' => 3,
                'depth' => 1,
                'created_at' => '2023-10-17 01:28:59',
                'updated_at' => '2023-10-22 03:01:44',
            ),
            11 => 
            array (
                'id' => 12,
                'label' => 'Activity Log',
                'url' => 'activity-log',
                'icon' => 'la la-stream',
                'permission' => 'admin_activity_log',
                'open_new_tab' => 0,
                'parent_id' => 3,
                'lft' => 7,
                'rgt' => 8,
                'depth' => 2,
                'created_at' => '2023-10-21 05:27:37',
                'updated_at' => '2023-10-22 02:10:03',
            ),
        ));
        
        
    }
}