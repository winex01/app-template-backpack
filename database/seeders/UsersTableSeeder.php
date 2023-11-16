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
                'password' => '$2y$10$AAP72bmlwXXxK6CKSfpZhuNvW695u1F9AUYjdqcRdwb5LE96m.LPW',
                'remember_token' => 'Gcb5ZUjjrSD4kUFBmU1thu9gZ0ytCq62SMvo1YMWb7Ewow7FEiUrDwCergPY',
                'created_at' => '2023-10-13 15:35:41',
                'updated_at' => '2023-11-15 15:08:59',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Test',
                'email' => 'test@test.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GQcmLS27ZsSn77TL4r03TOuL9P6CLheM/cTOA3bBwFoCLFBiMhI8.',
                'remember_token' => NULL,
                'created_at' => '2023-10-13 16:03:22',
                'updated_at' => '2023-11-15 01:24:14',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'John Doe',
                'email' => 'johnDough@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ycguMLexnyh4LHGnJ9MQXOE/gVXgSp5/1koTIbbNE9PefTWz6EzAK',
                'remember_token' => NULL,
                'created_at' => '2023-10-14 04:57:39',
                'updated_at' => '2023-10-21 07:07:57',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Jane Doe',
                'email' => 'janedoe@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ybl1MJ3y8kaYMMRvEoSz4e2f.MFphzIMK3xDASHglv4fALhO9odqS',
                'remember_token' => NULL,
                'created_at' => '2023-10-21 06:37:29',
                'updated_at' => '2023-10-21 06:39:09',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}