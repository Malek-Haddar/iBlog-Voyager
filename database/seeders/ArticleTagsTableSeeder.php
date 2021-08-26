<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticleTagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('article_tags')->delete();
        
        \DB::table('article_tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'article_id' => 15,
                'tag_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'article_id' => 6,
                'tag_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'article_id' => 16,
                'tag_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}