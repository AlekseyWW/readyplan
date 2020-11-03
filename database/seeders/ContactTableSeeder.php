<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contact')->delete();
        
        \DB::table('contact')->insert(array (
            0 => 
            array (
                'id' => 41,
                'name' => 'No name',
                'email' => 'admin@admin.com',
                'message' => NULL,
                'created_at' => '2020-11-02 14:27:32',
                'updated_at' => '2020-11-02 14:27:32',
                'company' => NULL,
                'position' => NULL,
                'phone' => NULL,
                'subject' => 'Попробовать',
            ),
            1 => 
            array (
                'id' => 42,
                'name' => 'No name',
                'email' => 'admin@admin.comq',
                'message' => NULL,
                'created_at' => '2020-11-02 15:15:30',
                'updated_at' => '2020-11-02 15:15:30',
                'company' => NULL,
                'position' => NULL,
                'phone' => NULL,
                'subject' => 'Попробовать',
            ),
        ));
        
        
    }
}