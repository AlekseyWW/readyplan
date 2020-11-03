<?php

use Illuminate\Database\Seeder;

class NavsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('navs')->delete();
        
        \DB::table('navs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'block_id' => 36,
                'name' => 'Система управления',
                'order' => 1,
                'created_at' => '2020-11-03 12:45:57',
                'updated_at' => '2020-11-03 12:45:57',
            ),
            1 => 
            array (
                'id' => 2,
                'block_id' => 1,
                'name' => 'Функционал',
                'order' => 2,
                'created_at' => '2020-11-03 12:46:27',
                'updated_at' => '2020-11-03 12:46:27',
            ),
            2 => 
            array (
                'id' => 3,
                'block_id' => 8,
                'name' => 'Преимущества',
                'order' => 3,
                'created_at' => '2020-11-03 12:46:44',
                'updated_at' => '2020-11-03 12:46:44',
            ),
            3 => 
            array (
                'id' => 4,
                'block_id' => 21,
                'name' => 'Внедрение',
                'order' => 4,
                'created_at' => '2020-11-03 12:47:18',
                'updated_at' => '2020-11-03 12:47:18',
            ),
            4 => 
            array (
                'id' => 5,
                'block_id' => 26,
                'name' => 'Для кого?',
                'order' => 5,
                'created_at' => '2020-11-03 12:47:35',
                'updated_at' => '2020-11-03 12:47:35',
            ),
            5 => 
            array (
                'id' => 6,
                'block_id' => 30,
                'name' => 'Стоимость',
                'order' => 6,
                'created_at' => '2020-11-03 12:47:00',
                'updated_at' => '2020-11-03 12:48:01',
            ),
            6 => 
            array (
                'id' => 7,
                'block_id' => 35,
                'name' => 'Контакты',
                'order' => 7,
                'created_at' => '2020-11-03 12:48:21',
                'updated_at' => '2020-11-03 12:48:21',
            ),
        ));
        
        
    }
}