<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$P2Uw37UeSmKr8sONHFKYHetloG3RwMVLPpUuslLWXcMzG/346l3Y2',
                'remember_token' => 'e36q5HMUNSzIdhlGV4Bjjm7usKH0a8S1R4ejcFT8FmwFIePU98vaQ1Ath1oi',
                'settings' => '{"locale":"ru"}',
                'created_at' => '2020-10-31 13:08:59',
                'updated_at' => '2020-10-31 13:19:50',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'Менеджер',
                'email' => 'manager@manager.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$l2yt2rKVH0oRnjtxNBbV6OAqyHxszJJJnLQCWwSvJXBYeaiDw2r2.',
                'remember_token' => NULL,
                'settings' => '{"locale":"ru"}',
                'created_at' => '2020-11-01 12:46:55',
                'updated_at' => '2020-11-01 12:47:33',
            ),
        ));
        
        
    }
}