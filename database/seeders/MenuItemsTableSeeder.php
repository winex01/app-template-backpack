<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'label' => 'Menu Items',
                'url' => 'menu-item',
                'icon' => 'la la-list',
                'permission' => 'menu_items_list',
                'open_new_tab' => 0,
                'parent_id' => NULL,
                'lft' => 22,
                'rgt' => 23,
                'depth' => 1,
                'created_at' => '2023-10-16 14:59:13',
                'updated_at' => '2023-10-17 08:32:27',
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
                'updated_at' => '2023-10-17 08:32:27',
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
                'rgt' => 21,
                'depth' => 1,
                'created_at' => '2023-10-16 23:35:38',
                'updated_at' => '2023-10-17 08:32:27',
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
                'lft' => 7,
                'rgt' => 14,
                'depth' => 2,
                'created_at' => '2023-10-16 23:38:03',
                'updated_at' => '2023-10-17 08:32:27',
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
                'lft' => 8,
                'rgt' => 9,
                'depth' => 3,
                'created_at' => '2023-10-16 23:40:38',
                'updated_at' => '2023-10-17 08:32:27',
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
                'lft' => 10,
                'rgt' => 11,
                'depth' => 3,
                'created_at' => '2023-10-17 00:01:32',
                'updated_at' => '2023-10-17 08:32:27',
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
                'lft' => 12,
                'rgt' => 13,
                'depth' => 3,
                'created_at' => '2023-10-17 00:02:24',
                'updated_at' => '2023-10-17 08:32:27',
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
                'lft' => 15,
                'rgt' => 16,
                'depth' => 2,
                'created_at' => '2023-10-17 00:09:28',
                'updated_at' => '2023-10-17 08:49:50',
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
                'lft' => 19,
                'rgt' => 20,
                'depth' => 2,
                'created_at' => '2023-10-17 00:10:16',
                'updated_at' => '2023-10-17 08:36:49',
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
                'lft' => 17,
                'rgt' => 18,
                'depth' => 2,
                'created_at' => '2023-10-17 00:11:40',
                'updated_at' => '2023-10-17 08:32:27',
            ),
            10 => 
            array (
                'id' => 11,
                'label' => 'Dashboard',
                'url' => 'dashboard',
                'icon' => 'la la-home',
                'permission' => NULL,
                'open_new_tab' => 0,
                'parent_id' => NULL,
                'lft' => 2,
                'rgt' => 3,
                'depth' => 1,
                'created_at' => '2023-10-17 01:28:59',
                'updated_at' => '2023-10-17 08:49:24',
            ),
        ));
        
        
    }
}