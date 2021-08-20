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

        \DB::table('articles')->insert(array(
            0 =>
            array(
                'id' => 1,
                'title' => 'first article',
                'slug' => 'first-article',
                'body' => '<p>this our first articel</p>',
                'cover' => 'articles\\August2021\\gyZMLsgvpjIuPry9RTWP.jpg',
                'image' => 'articles\\August2021\\fsjPYoFO0pbKsqN76bVM.jpg',
                'created_at' => '2021-08-17 11:22:00',
                'updated_at' => '2021-08-17 23:33:37',
                'owner_id' => 1,
            ),
            1 =>
            array(
                'id' => 2,
                'title' => 'new article122',
                'slug' => 'new-article1',
                'body' => '<p>this is our new post</p>',
                'cover' => 'articles\\August2021\\TXTlkDD6iiW8UK7rQYmZ.jpg',
                'image' => 'articles\\August2021\\t6TgmwBN8aJbm4mUxnvm.jpg',
                'created_at' => '2021-08-17 23:20:00',
                'updated_at' => '2021-08-18 14:02:12',
                'owner_id' => 2,
            ),
            2 =>
            array(
                'id' => 4,
                'title' => 'test khfff',
                'slug' => 'test-khfff',
                'body' => '<p>test fgdgdddddddddddd</p>',
                'cover' => 'articles\\August2021\\4qCtvAMspZqwon4F3HIJ.jpg',
                'image' => 'articles\\August2021\\m8QPk45WXRuOim7WSr90.jpg',
                'created_at' => '2021-08-18 14:04:00',
                'updated_at' => '2021-08-19 23:42:21',
                'owner_id' => 3,
            ),
            3 =>
            array(
                'id' => 6,
                'title' => 'tt kk ll',
                'slug' => 'tt-kk-ll',
                'body' => '<p>tt</p>',
                'cover' => 'articles\\August2021\\nEldpalj6yaKz1jOzbc9.png',
                'image' => 'articles\\August2021\\p008c1H1ApdFzgJveF32.png',
                'created_at' => '2021-08-18 15:06:00',
                'updated_at' => '2021-08-18 22:28:57',
                'owner_id' => 2,
            ),
            4 =>
            array(
                'id' => 9,
                'title' => 'ownerddd',
                'slug' => 'ownerddd',
                'body' => '<p>owner</p>',
                'cover' => 'articles\\August2021\\iH0wsuo0Tipu4WNXnUfH.png',
                'image' => 'articles\\August2021\\gjrKP0iNZkjmM3P5QbsW.png',
                'created_at' => '2021-08-19 23:52:00',
                'updated_at' => '2021-08-19 23:52:29',
                'owner_id' => 1,
            ),
            5 =>
            array(
                'id' => 10,
                'title' => 'watchdd',
                'slug' => 'watchdd',
                'body' => '<p>watch</p>',
                'cover' => 'articles\\August2021\\7T0t46Fo36SHSAV49Znz.png',
                'image' => 'articles\\August2021\\bgiugj9XQSy879qK4AfT.jpg',
                'created_at' => '2021-08-19 23:56:00',
                'updated_at' => '2021-08-19 23:56:36',
                'owner_id' => 1,
            ),
            6 =>
            array(
                'id' => 11,
                'title' => 'new',
                'slug' => 'new',
                'body' => '<p>new</p>',
                'cover' => 'articles\\August2021\\Vnvp8Bddx5tVDVTg1OFk.png',
                'image' => 'articles\\August2021\\btnQzInkcywB4laeAGo5.png',
                'created_at' => '2021-08-20 00:00:00',
                'updated_at' => '2021-08-20 00:39:20',
                'owner_id' => 1,
            ),
            7 =>
            array(
                'id' => 14,
                'title' => 'class G aaa',
                'slug' => 'class-g-aaa',
                'body' => '<p>class G</p>',
                'cover' => 'articles\\August2021\\kY2d7lpYpFh1VYJbCoq3.jpg',
                'image' => 'articles\\August2021\\HBvKiH7ZPgCYeLrbUUzn.png',
                'created_at' => '2021-08-20 00:44:00',
                'updated_at' => '2021-08-20 00:56:17',
                'owner_id' => 1,
            ),
        ));
    }
}
