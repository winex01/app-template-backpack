<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('password');        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => $password,
                'remember_token' => 'W0GcsImhuddzreidh1MzgW9DDrwEK1Awo4b7hohBhQNQmhfBcIMcGKRgcoxt',
                'created_at' => '2023-10-13 15:35:41',
                'updated_at' => '2023-10-14 04:52:53',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Test User1',
                'email' => 'test@test.com',
                'email_verified_at' => NULL,
                'password' => $password,
                'remember_token' => NULL,
                'created_at' => '2023-10-13 16:03:22',
                'updated_at' => '2023-10-21 06:38:45',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'John Doe',
                'email' => 'johnDough@gmail.com',
                'email_verified_at' => NULL,
                'password' => $password,
                'remember_token' => NULL,
                'created_at' => '2023-10-14 04:57:39',
                'updated_at' => '2023-10-21 07:07:57',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Jane Doe',
                'email' => 'janedoe@gmail.com',
                'email_verified_at' => NULL,
                'password' => $password,
                'remember_token' => NULL,
                'created_at' => '2023-10-21 06:37:29',
                'updated_at' => '2023-10-21 06:39:09',
            ),
        ));
        
        
    }
}