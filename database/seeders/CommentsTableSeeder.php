<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'id' => 11,
                'name' => 'ok',
                'approved' => '1',
                'created_at' => '2021-08-26 16:58:45',
                'updated_at' => '2021-08-26 16:58:45',
                'user_id' => 2,
            ),
            1 => 
            array (
                'id' => 12,
                'name' => 'okok',
                'approved' => '0',
                'created_at' => '2021-08-26 17:02:44',
                'updated_at' => '2021-08-26 17:02:44',
                'user_id' => 2,
            ),
        ));
        
        
    }
}