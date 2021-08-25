<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Marketing',
                'created_at' => '2021-08-23 23:30:29',
                'updated_at' => '2021-08-23 23:30:29',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Sales',
                'created_at' => '2021-08-23 23:30:41',
                'updated_at' => '2021-08-23 23:30:41',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Service',
                'created_at' => '2021-08-23 23:30:51',
                'updated_at' => '2021-08-23 23:30:51',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'social media',
                'created_at' => '2021-08-23 23:31:07',
                'updated_at' => '2021-08-23 23:31:07',
            ),
        ));
        
        
    }
}