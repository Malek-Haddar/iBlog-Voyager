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
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'off-road',
                'created_at' => '2021-08-17 11:23:52',
                'updated_at' => '2021-08-17 11:23:52',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'hgf',
                'created_at' => '2021-08-17 14:04:01',
                'updated_at' => '2021-08-17 14:04:01',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'relax',
                'created_at' => '2021-08-17 23:31:03',
                'updated_at' => '2021-08-17 23:31:03',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'relax',
                'created_at' => '2021-08-17 23:33:35',
                'updated_at' => '2021-08-17 23:33:35',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => '14',
                'created_at' => '2021-08-17 23:41:01',
                'updated_at' => '2021-08-17 23:41:01',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'relax',
                'created_at' => '2021-08-17 23:41:13',
                'updated_at' => '2021-08-17 23:41:13',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'relax',
                'created_at' => '2021-08-17 23:44:07',
                'updated_at' => '2021-08-17 23:44:07',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'relax',
                'created_at' => '2021-08-18 13:59:27',
                'updated_at' => '2021-08-18 13:59:27',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'relax',
                'created_at' => '2021-08-18 14:04:13',
                'updated_at' => '2021-08-18 14:04:13',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'relax',
                'created_at' => '2021-08-18 15:00:00',
                'updated_at' => '2021-08-18 15:00:00',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'relax',
                'created_at' => '2021-08-18 21:28:17',
                'updated_at' => '2021-08-18 21:28:17',
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'pp',
                'created_at' => '2021-08-18 22:51:25',
                'updated_at' => '2021-08-18 22:51:25',
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'aa',
                'created_at' => '2021-08-18 22:54:29',
                'updated_at' => '2021-08-18 22:54:29',
            ),
            13 => 
            array (
                'id' => 15,
                'name' => 'new',
                'created_at' => '2021-08-19 23:59:59',
                'updated_at' => '2021-08-19 23:59:59',
            ),
            14 => 
            array (
                'id' => 16,
                'name' => 'post',
                'created_at' => '2021-08-20 14:31:44',
                'updated_at' => '2021-08-20 14:31:44',
            ),
            15 => 
            array (
                'id' => 17,
                'name' => 'tagtag',
                'created_at' => '2021-08-20 22:58:10',
                'updated_at' => '2021-08-20 22:58:10',
            ),
            16 => 
            array (
                'id' => 18,
                'name' => 'wrok',
                'created_at' => '2021-08-20 22:59:23',
                'updated_at' => '2021-08-20 22:59:23',
            ),
            17 => 
            array (
                'id' => 19,
                'name' => 'G-class',
                'created_at' => '2021-08-20 23:00:02',
                'updated_at' => '2021-08-20 23:00:02',
            ),
            18 => 
            array (
                'id' => 20,
                'name' => 'twitter',
                'created_at' => '2021-08-20 23:00:24',
                'updated_at' => '2021-08-20 23:00:24',
            ),
            19 => 
            array (
                'id' => 21,
                'name' => 'last one',
                'created_at' => '2021-08-20 23:54:19',
                'updated_at' => '2021-08-20 23:54:19',
            ),
            20 => 
            array (
                'id' => 22,
                'name' => 'bb',
                'created_at' => '2021-08-23 10:20:21',
                'updated_at' => '2021-08-23 10:20:21',
            ),
            21 => 
            array (
                'id' => 23,
                'name' => 'ff',
                'created_at' => '2021-08-23 10:20:23',
                'updated_at' => '2021-08-23 10:20:23',
            ),
            22 => 
            array (
                'id' => 24,
                'name' => 'nn',
                'created_at' => '2021-08-23 10:21:16',
                'updated_at' => '2021-08-23 10:21:16',
            ),
            23 => 
            array (
                'id' => 25,
                'name' => 'dd',
                'created_at' => '2021-08-23 10:21:17',
                'updated_at' => '2021-08-23 10:21:17',
            ),
        ));
        
        
    }
}