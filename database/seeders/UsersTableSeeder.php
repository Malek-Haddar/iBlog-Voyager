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
                'role_id' => 1,
                'name' => 'malek',
                'email' => 'malekhaddar8@gmail.com',
                'avatar' => 'users\\August2021\\lMGJKf57KeOpMqRWIqcH.jpg',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ouNh.ApF3ywHeX3y/acS8OuIxF.kyoGiHXPbwoyXYP7aX8GOVDDOG',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2021-08-17 09:22:59',
                'updated_at' => '2021-08-17 12:03:59',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'mazen',
                'email' => 'mazen@gmail.com',
                'avatar' => 'users\\August2021\\5h2X8jMi7q1TpI3C8369.jpg',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1ObQtvFFVQJBsDW.OVrgBe/a.UrjSWQE/zTxnoxq678DHNmbYdRrq',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2021-08-17 12:03:42',
                'updated_at' => '2021-08-17 12:03:42',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 2,
                'name' => 'Don',
                'email' => 'don@gmail.com',
                'avatar' => 'users\\August2021\\ArFK1uZxH2DE4Aq1keOI.jpg',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NBKMtWRj2Ok1I2BNCx2ojeDX.eZP8NHuugnA/hqgVAF9.lbvF.Wya',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2021-08-17 12:24:23',
                'updated_at' => '2021-08-17 23:45:52',
            ),
        ));
        
        
    }
}