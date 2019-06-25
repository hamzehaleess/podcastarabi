<?php

use Illuminate\Database\Seeder;

class PodcastTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('podcast_types')->delete();
        
        \DB::table('podcast_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Feed',
                'created_at' => '2019-06-23 17:09:52',
                'updated_at' => '2019-06-23 17:09:52',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'SoundCloud',
                'created_at' => '2019-06-23 17:09:54',
                'updated_at' => '2019-06-23 17:09:54',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Soundcloud channel',
                'created_at' => '2019-06-23 17:09:55',
                'updated_at' => '2019-06-23 17:09:55',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'RSS',
                'created_at' => '2019-06-23 17:09:56',
                'updated_at' => '2019-06-23 17:09:56',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Google podcast',
                'created_at' => '2019-06-23 17:09:58',
                'updated_at' => '2019-06-23 17:09:58',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Itunes',
                'created_at' => '2019-06-23 17:09:59',
                'updated_at' => '2019-06-23 17:09:59',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'STITCHER',
                'created_at' => '2019-06-23 17:10:01',
                'updated_at' => '2019-06-23 17:10:01',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}