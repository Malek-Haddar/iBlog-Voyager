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
                'id' => 1,
                'name' => 'great job <3',
                'approved' => 1,
                'created_at' => '2021-08-26 13:31:00',
                'updated_at' => '2021-08-26 14:02:41',
                'article_id' => NULL,
            ),
        ));
        
        
    }
}