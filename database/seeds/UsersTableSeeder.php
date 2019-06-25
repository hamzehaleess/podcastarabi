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
                'name' => 'supderadmin',
                'email' => 'admin@podcast-arabic.test',
                'password' => '$2y$10$SVlmQFaGRjWisOguRoXJwuRS46Tm9EVWe5rz15OexglVmSAqVi5le',
                'remember_token' => NULL,
                'created_at' => '2019-03-09 10:44:27',
                'updated_at' => '2019-03-09 10:44:27',
            ),
        ));
        
        
    }
}