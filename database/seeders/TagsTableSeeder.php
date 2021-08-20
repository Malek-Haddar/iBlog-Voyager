<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('tags')->delete();

        \DB::table('tags')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'off-road',
                'created_at' => '2021-08-17 11:23:52',
                'updated_at' => '2021-08-17 11:23:52',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'hgf',
                'created_at' => '2021-08-17 14:04:01',
                'updated_at' => '2021-08-17 14:04:01',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'relax',
                'created_at' => '2021-08-17 23:31:03',
                'updated_at' => '2021-08-17 23:31:03',
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'relax',
                'created_at' => '2021-08-17 23:33:35',
                'updated_at' => '2021-08-17 23:33:35',
            ),


            5 =>
            array(
                'id' => 6,
                'name' => '14',
                'created_at' => '2021-08-17 23:41:01',
                'updated_at' => '2021-08-17 23:41:01',
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'relax',
                'created_at' => '2021-08-17 23:41:13',
                'updated_at' => '2021-08-17 23:41:13',
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'relax',
                'created_at' => '2021-08-17 23:44:07',
                'updated_at' => '2021-08-17 23:44:07',
            ),
            8 =>
            array(
                'id' => 9,
                'name' => 'relax',
                'created_at' => '2021-08-18 13:59:27',
                'updated_at' => '2021-08-18 13:59:27',
            ),
            9 =>
            array(
                'id' => 10,
                'name' => 'relax',
                'created_at' => '2021-08-18 14:04:13',
                'updated_at' => '2021-08-18 14:04:13',
            ),
            10 =>
            array(
                'id' => 11,
                'name' => 'relax',
                'created_at' => '2021-08-18 15:00:00',
                'updated_at' => '2021-08-18 15:00:00',
            ),
            11 =>
            array(
                'id' => 12,
                'name' => 'relax',
                'created_at' => '2021-08-18 21:28:17',
                'updated_at' => '2021-08-18 21:28:17',
            ),
            12 =>
            array(
                'id' => 13,
                'name' => 'pp',
                'created_at' => '2021-08-18 22:51:25',
                'updated_at' => '2021-08-18 22:51:25',
            ),
            13 =>
            array(
                'id' => 14,
                'name' => 'aa',
                'created_at' => '2021-08-18 22:54:29',
                'updated_at' => '2021-08-18 22:54:29',
            ),
            14 =>
            array(
                'id' => 15,
                'name' => 'new',
                'created_at' => '2021-08-19 23:59:59',
                'updated_at' => '2021-08-19 23:59:59',
            ),
            15 =>
            array(
                'id' => 16,
                'name' => 'post',
                'created_at' => '2021-08-20 14:31:44',
                'updated_at' => '2021-08-20 14:31:44',
            ),
        ));
    }
}
