<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$rMIOGOMf6CAC/91ObusITuME43fAI6R1ZoJTw50iG49tkLF9UVaAy',
                'remember_token' => '7oFP5PL39zKpbjSOsbKZ6fP69tatYxoh7PjMGEcBlwaqYUIiAI2hUHW4jpOh',
                'created_at' => '2023-10-13 15:35:41',
                'updated_at' => '2023-10-14 04:52:53',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Test User',
                'email' => 'test@test.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$0nPjYU8g.YJuYVicK7.2z.38Vz1ZQ9eW5/i6OLAfzrczLpJ0vZisK',
                'remember_token' => NULL,
                'created_at' => '2023-10-13 16:03:22',
                'updated_at' => '2023-10-15 07:19:29',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'John Dough',
                'email' => 'johnDough@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ycguMLexnyh4LHGnJ9MQXOE/gVXgSp5/1koTIbbNE9PefTWz6EzAK',
                'remember_token' => NULL,
                'created_at' => '2023-10-14 04:57:39',
                'updated_at' => '2023-10-15 07:01:26',
            ),
        ));
        
        
    }
}