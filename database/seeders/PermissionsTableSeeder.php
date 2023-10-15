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
        ));
        
        
    }
}