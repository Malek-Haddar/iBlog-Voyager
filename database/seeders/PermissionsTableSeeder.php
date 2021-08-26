<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2021-08-17 09:21:37',
                'updated_at' => '2021-08-17 09:21:37',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2021-08-17 09:21:37',
                'updated_at' => '2021-08-17 09:21:37',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2021-08-17 09:21:37',
                'updated_at' => '2021-08-17 09:21:37',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2021-08-17 09:21:37',
                'updated_at' => '2021-08-17 09:21:37',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2021-08-17 09:21:37',
                'updated_at' => '2021-08-17 09:21:37',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2021-08-17 09:21:37',
                'updated_at' => '2021-08-17 09:21:37',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2021-08-17 09:21:37',
                'updated_at' => '2021-08-17 09:21:37',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2021-08-17 09:21:37',
                'updated_at' => '2021-08-17 09:21:37',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2021-08-17 09:21:37',
                'updated_at' => '2021-08-17 09:21:37',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2021-08-17 09:21:37',
                'updated_at' => '2021-08-17 09:21:37',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2021-08-17 09:21:37',
                'updated_at' => '2021-08-17 09:21:37',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2021-08-17 09:21:37',
                'updated_at' => '2021-08-17 09:21:37',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2021-08-17 09:21:37',
                'updated_at' => '2021-08-17 09:21:37',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2021-08-17 09:21:37',
                'updated_at' => '2021-08-17 09:21:37',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2021-08-17 09:21:37',
                'updated_at' => '2021-08-17 09:21:37',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2021-08-17 09:21:37',
                'updated_at' => '2021-08-17 09:21:37',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2021-08-17 09:21:37',
                'updated_at' => '2021-08-17 09:21:37',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2021-08-17 09:21:37',
                'updated_at' => '2021-08-17 09:21:37',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2021-08-17 09:21:37',
                'updated_at' => '2021-08-17 09:21:37',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2021-08-17 09:21:37',
                'updated_at' => '2021-08-17 09:21:37',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2021-08-17 09:21:37',
                'updated_at' => '2021-08-17 09:21:37',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2021-08-17 09:21:37',
                'updated_at' => '2021-08-17 09:21:37',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2021-08-17 09:21:37',
                'updated_at' => '2021-08-17 09:21:37',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2021-08-17 09:21:37',
                'updated_at' => '2021-08-17 09:21:37',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2021-08-17 09:21:37',
                'updated_at' => '2021-08-17 09:21:37',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2021-08-17 09:21:37',
                'updated_at' => '2021-08-17 09:21:37',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_articles',
                'table_name' => 'articles',
                'created_at' => '2021-08-17 09:30:05',
                'updated_at' => '2021-08-17 09:30:05',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_articles',
                'table_name' => 'articles',
                'created_at' => '2021-08-17 09:30:05',
                'updated_at' => '2021-08-17 09:30:05',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_articles',
                'table_name' => 'articles',
                'created_at' => '2021-08-17 09:30:05',
                'updated_at' => '2021-08-17 09:30:05',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_articles',
                'table_name' => 'articles',
                'created_at' => '2021-08-17 09:30:05',
                'updated_at' => '2021-08-17 09:30:05',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_articles',
                'table_name' => 'articles',
                'created_at' => '2021-08-17 09:30:05',
                'updated_at' => '2021-08-17 09:30:05',
            ),
            31 => 
            array (
                'id' => 47,
                'key' => 'browse_article_tag',
                'table_name' => 'article_tag',
                'created_at' => '2021-08-17 23:29:21',
                'updated_at' => '2021-08-17 23:29:21',
            ),
            32 => 
            array (
                'id' => 48,
                'key' => 'read_article_tag',
                'table_name' => 'article_tag',
                'created_at' => '2021-08-17 23:29:21',
                'updated_at' => '2021-08-17 23:29:21',
            ),
            33 => 
            array (
                'id' => 49,
                'key' => 'edit_article_tag',
                'table_name' => 'article_tag',
                'created_at' => '2021-08-17 23:29:21',
                'updated_at' => '2021-08-17 23:29:21',
            ),
            34 => 
            array (
                'id' => 50,
                'key' => 'add_article_tag',
                'table_name' => 'article_tag',
                'created_at' => '2021-08-17 23:29:21',
                'updated_at' => '2021-08-17 23:29:21',
            ),
            35 => 
            array (
                'id' => 51,
                'key' => 'delete_article_tag',
                'table_name' => 'article_tag',
                'created_at' => '2021-08-17 23:29:21',
                'updated_at' => '2021-08-17 23:29:21',
            ),
            36 => 
            array (
                'id' => 52,
                'key' => 'browse_tags',
                'table_name' => 'tags',
                'created_at' => '2021-08-17 23:30:08',
                'updated_at' => '2021-08-17 23:30:08',
            ),
            37 => 
            array (
                'id' => 53,
                'key' => 'read_tags',
                'table_name' => 'tags',
                'created_at' => '2021-08-17 23:30:08',
                'updated_at' => '2021-08-17 23:30:08',
            ),
            38 => 
            array (
                'id' => 54,
                'key' => 'edit_tags',
                'table_name' => 'tags',
                'created_at' => '2021-08-17 23:30:08',
                'updated_at' => '2021-08-17 23:30:08',
            ),
            39 => 
            array (
                'id' => 55,
                'key' => 'add_tags',
                'table_name' => 'tags',
                'created_at' => '2021-08-17 23:30:08',
                'updated_at' => '2021-08-17 23:30:08',
            ),
            40 => 
            array (
                'id' => 56,
                'key' => 'delete_tags',
                'table_name' => 'tags',
                'created_at' => '2021-08-17 23:30:08',
                'updated_at' => '2021-08-17 23:30:08',
            ),
            41 => 
            array (
                'id' => 57,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2021-08-23 23:17:22',
                'updated_at' => '2021-08-23 23:17:22',
            ),
            42 => 
            array (
                'id' => 58,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2021-08-23 23:17:22',
                'updated_at' => '2021-08-23 23:17:22',
            ),
            43 => 
            array (
                'id' => 59,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2021-08-23 23:17:22',
                'updated_at' => '2021-08-23 23:17:22',
            ),
            44 => 
            array (
                'id' => 60,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2021-08-23 23:17:22',
                'updated_at' => '2021-08-23 23:17:22',
            ),
            45 => 
            array (
                'id' => 61,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2021-08-23 23:17:22',
                'updated_at' => '2021-08-23 23:17:22',
            ),
            46 => 
            array (
                'id' => 67,
                'key' => 'browse_comments',
                'table_name' => 'comments',
                'created_at' => '2021-08-26 09:22:06',
                'updated_at' => '2021-08-26 09:22:06',
            ),
            47 => 
            array (
                'id' => 68,
                'key' => 'read_comments',
                'table_name' => 'comments',
                'created_at' => '2021-08-26 09:22:06',
                'updated_at' => '2021-08-26 09:22:06',
            ),
            48 => 
            array (
                'id' => 69,
                'key' => 'edit_comments',
                'table_name' => 'comments',
                'created_at' => '2021-08-26 09:22:06',
                'updated_at' => '2021-08-26 09:22:06',
            ),
            49 => 
            array (
                'id' => 70,
                'key' => 'add_comments',
                'table_name' => 'comments',
                'created_at' => '2021-08-26 09:22:06',
                'updated_at' => '2021-08-26 09:22:06',
            ),
            50 => 
            array (
                'id' => 71,
                'key' => 'delete_comments',
                'table_name' => 'comments',
                'created_at' => '2021-08-26 09:22:06',
                'updated_at' => '2021-08-26 09:22:06',
            ),
        ));
        
        
    }
}