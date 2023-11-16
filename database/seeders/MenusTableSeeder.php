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
                'label' => 'Menus',
                'url' => 'menu',
                'icon' => 'la la-list',
                'permission_id' => NULL,
                'open_new_tab' => 0,
                'parent_id' => 3,
                'lft' => 25,
                'rgt' => 26,
                'depth' => 2,
                'created_at' => '2023-10-16 14:59:13',
                'updated_at' => '2023-11-15 13:22:41',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'label' => 'Add-Ons',
                'url' => NULL,
                'icon' => NULL,
                'permission_id' => NULL,
                'open_new_tab' => 0,
                'parent_id' => 3,
                'lft' => 9,
                'rgt' => 10,
                'depth' => 2,
                'created_at' => '2023-10-16 23:34:16',
                'updated_at' => '2023-11-15 13:22:41',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'label' => 'Extra Crud / Package',
                'url' => NULL,
                'icon' => 'la la-puzzle-piece',
                'permission_id' => NULL,
                'open_new_tab' => 0,
                'parent_id' => NULL,
                'lft' => 8,
                'rgt' => 33,
                'depth' => 1,
                'created_at' => '2023-10-16 23:35:38',
                'updated_at' => '2023-11-15 13:22:41',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'label' => 'Authentication',
                'url' => NULL,
                'icon' => 'la la-users',
                'permission_id' => NULL,
                'open_new_tab' => 0,
                'parent_id' => 3,
                'lft' => 13,
                'rgt' => 20,
                'depth' => 2,
                'created_at' => '2023-10-16 23:38:03',
                'updated_at' => '2023-11-15 13:22:41',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'label' => 'Users',
                'url' => 'user',
                'icon' => 'la la-user',
                'permission_id' => NULL,
                'open_new_tab' => 0,
                'parent_id' => 4,
                'lft' => 14,
                'rgt' => 15,
                'depth' => 3,
                'created_at' => '2023-10-16 23:40:38',
                'updated_at' => '2023-11-15 13:22:41',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'label' => 'Roles',
                'url' => 'role',
                'icon' => 'la la-id-badge',
                'permission_id' => NULL,
                'open_new_tab' => 0,
                'parent_id' => 4,
                'lft' => 16,
                'rgt' => 17,
                'depth' => 3,
                'created_at' => '2023-10-17 00:01:32',
                'updated_at' => '2023-11-15 13:22:41',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'label' => 'Permissions',
                'url' => 'permission_id',
                'icon' => 'la la-key',
                'permission_id' => NULL,
                'open_new_tab' => 0,
                'parent_id' => 4,
                'lft' => 18,
                'rgt' => 19,
                'depth' => 3,
                'created_at' => '2023-10-17 00:02:24',
                'updated_at' => '2023-11-15 13:22:41',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'label' => 'File Manager',
                'url' => 'elfinder',
                'icon' => 'la la-files-o',
                'permission_id' => NULL,
                'open_new_tab' => 0,
                'parent_id' => 3,
                'lft' => 21,
                'rgt' => 22,
                'depth' => 2,
                'created_at' => '2023-10-17 00:09:28',
                'updated_at' => '2023-11-15 13:22:41',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'label' => 'Web Artisan Tinker',
                'url' => 'tinker',
                'icon' => 'lab la-laravel',
                'permission_id' => NULL,
                'open_new_tab' => 1,
                'parent_id' => 3,
                'lft' => 31,
                'rgt' => 32,
                'depth' => 2,
                'created_at' => '2023-10-17 00:10:16',
                'updated_at' => '2023-11-15 13:22:41',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'label' => 'Package',
                'url' => NULL,
                'icon' => NULL,
                'permission_id' => NULL,
                'open_new_tab' => 0,
                'parent_id' => 3,
                'lft' => 27,
                'rgt' => 28,
                'depth' => 2,
                'created_at' => '2023-10-17 00:11:40',
                'updated_at' => '2023-11-15 13:22:41',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'label' => 'Dashboard',
                'url' => 'dashboard',
                'icon' => 'la la-dashboard',
                'permission_id' => NULL,
                'open_new_tab' => 0,
                'parent_id' => NULL,
                'lft' => 6,
                'rgt' => 7,
                'depth' => 1,
                'created_at' => '2023-10-17 01:28:59',
                'updated_at' => '2023-11-15 13:22:41',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'label' => 'Activity Logs',
                'url' => 'activity-log',
                'icon' => 'la la-stream',
                'permission_id' => NULL,
                'open_new_tab' => 0,
                'parent_id' => 3,
                'lft' => 11,
                'rgt' => 12,
                'depth' => 2,
                'created_at' => '2023-10-21 05:27:37',
                'updated_at' => '2023-11-16 01:42:08',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'label' => 'Telescope',
                'url' => 'telescope',
                'icon' => 'lab la-laravel',
                'permission_id' => NULL,
                'open_new_tab' => 1,
                'parent_id' => 3,
                'lft' => 29,
                'rgt' => 30,
                'depth' => 2,
                'created_at' => '2023-10-23 10:22:38',
                'updated_at' => '2023-11-15 13:22:41',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'label' => 'Custom Crud',
                'url' => NULL,
                'icon' => NULL,
                'permission_id' => NULL,
                'open_new_tab' => 0,
                'parent_id' => 3,
                'lft' => 23,
                'rgt' => 24,
                'depth' => 2,
                'created_at' => '2023-11-15 01:18:26',
                'updated_at' => '2023-11-15 13:22:41',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'label' => 'Employees',
                'url' => 'employee',
                'icon' => 'nav-icon la la-list',
                'permission_id' => NULL,
                'open_new_tab' => 0,
                'parent_id' => 16,
                'lft' => 3,
                'rgt' => 4,
                'depth' => 2,
                'created_at' => '2023-11-15 13:21:00',
                'updated_at' => '2023-11-15 13:22:41',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'label' => 'Employee Records',
                'url' => NULL,
                'icon' => 'las la-user-tie',
                'permission_id' => NULL,
                'open_new_tab' => 0,
                'parent_id' => NULL,
                'lft' => 2,
                'rgt' => 5,
                'depth' => 1,
                'created_at' => '2023-11-15 13:22:25',
                'updated_at' => '2023-11-15 13:25:15',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}