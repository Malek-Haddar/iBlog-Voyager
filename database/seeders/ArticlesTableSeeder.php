<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('articles')->delete();
        
        \DB::table('articles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'first article',
                'slug' => 'first-article',
                'body' => '<p>this our first articel</p>',
                'cover' => 'articles\\August2021\\gyZMLsgvpjIuPry9RTWP.jpg',
                'image' => 'articles\\August2021\\fsjPYoFO0pbKsqN76bVM.jpg',
                'owner_id' => 1,
                'created_at' => '2021-08-17 11:22:00',
                'updated_at' => '2021-08-17 23:33:37',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'new article122',
                'slug' => 'new-article122',
                'body' => '<p>this is our new post</p>',
                'cover' => 'articles\\August2021\\TXTlkDD6iiW8UK7rQYmZ.jpg',
                'image' => 'articles\\August2021\\t6TgmwBN8aJbm4mUxnvm.jpg',
                'owner_id' => 2,
                'created_at' => '2021-08-17 23:20:00',
                'updated_at' => '2021-08-20 22:59:43',
            ),
            2 => 
            array (
                'id' => 4,
                'title' => 'test khfff',
                'slug' => 'test-khfff',
                'body' => '<p>test fgdgdddddddddddd</p>',
                'cover' => 'articles\\August2021\\4qCtvAMspZqwon4F3HIJ.jpg',
                'image' => 'articles\\August2021\\m8QPk45WXRuOim7WSr90.jpg',
                'owner_id' => 3,
                'created_at' => '2021-08-18 14:04:00',
                'updated_at' => '2021-08-19 23:42:21',
            ),
            3 => 
            array (
                'id' => 6,
                'title' => 'tt kk',
                'slug' => 'tt-kk',
                'body' => '<p>tt</p>',
                'cover' => 'articles\\August2021\\nEldpalj6yaKz1jOzbc9.png',
                'image' => 'articles\\August2021\\p008c1H1ApdFzgJveF32.png',
                'owner_id' => 2,
                'created_at' => '2021-08-18 15:06:00',
                'updated_at' => '2021-08-20 21:58:25',
            ),
            4 => 
            array (
                'id' => 15,
                'title' => 'tag',
                'slug' => 'tag',
                'body' => '<p>tagging</p>',
                'cover' => 'articles\\August2021\\30ZIeug4nDavlowaxs7p.jpg',
                'image' => 'articles\\August2021\\7AuFVnsyjQeYpkwBFd0v.jpg',
                'owner_id' => 1,
                'created_at' => '2021-08-20 22:58:13',
                'updated_at' => '2021-08-20 22:58:13',
            ),
        ));
        
        
    }
}