<?php

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
                'name_ar' => 'تقنية / برمجة',
                'name' => '',
                'created_at' => '2019-06-23 17:05:10',
                'updated_at' => '2019-06-23 17:05:10',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name_ar' => 'علوم',
                'name' => '',
                'created_at' => '2019-06-23 17:05:13',
                'updated_at' => '2019-06-23 17:05:13',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name_ar' => 'ألعاب الفيديو',
                'name' => '',
                'created_at' => '2019-06-23 17:05:15',
                'updated_at' => '2019-06-23 17:05:14',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name_ar' => 'رياضة',
                'name' => '',
                'created_at' => '2019-06-23 17:05:14',
                'updated_at' => '2019-06-23 17:05:19',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name_ar' => 'الصحة والعافية ',
                'name' => '',
                'created_at' => '2019-06-23 17:05:18',
                'updated_at' => '2019-06-23 17:05:16',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name_ar' => 'تطوير الذات ',
                'name' => '',
                'created_at' => '2019-06-23 17:05:19',
                'updated_at' => '2019-06-23 17:05:17',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name_ar' => 'شخصي ',
                'name' => '',
                'created_at' => '2019-06-23 17:05:21',
                'updated_at' => '2019-06-23 17:05:21',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name_ar' => 'اجتماعي وحواري ',
                'name' => '',
                'created_at' => '2019-06-23 17:05:25',
                'updated_at' => '2019-06-23 17:05:25',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name_ar' => 'أعمال ',
                'name' => '',
                'created_at' => '2019-06-23 17:05:23',
                'updated_at' => '2019-06-23 17:05:32',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name_ar' => 'التعليم والثقافة ',
                'name' => '',
                'created_at' => '2019-06-23 17:05:26',
                'updated_at' => '2019-06-23 17:05:33',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name_ar' => 'أخبار و إعلام ',
                'name' => '',
                'created_at' => '2019-06-23 17:05:27',
                'updated_at' => '2019-06-23 17:05:33',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name_ar' => 'سينما و ترفيه',
                'name' => '',
                'created_at' => '2019-06-23 17:05:27',
                'updated_at' => '2019-06-23 17:05:34',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name_ar' => 'عام ',
                'name' => '',
                'created_at' => '2019-06-23 17:05:28',
                'updated_at' => '2019-06-23 17:05:35',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name_ar' => 'سياسي و اجتماعي ',
                'name' => '',
                'created_at' => '2019-06-23 17:05:29',
                'updated_at' => '2019-06-23 17:05:36',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name_ar' => 'اجتماعي ',
                'name' => '',
                'created_at' => '2019-06-23 17:05:31',
                'updated_at' => '2019-06-23 17:05:38',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name_ar' => 'اجتماعي اقتصادي',
                'name' => '',
                'created_at' => '2019-06-23 17:05:29',
                'updated_at' => '2019-06-23 17:05:40',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name_ar' => 'متنوع',
                'name' => '',
                'created_at' => '2019-06-23 17:05:44',
                'updated_at' => '2019-06-23 17:05:48',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name_ar' => 'ترفيهي ',
                'name' => '',
                'created_at' => '2019-06-23 17:05:50',
                'updated_at' => '2019-06-23 17:05:50',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name_ar' => 'علمي و تقني',
                'name' => '',
                'created_at' => '2019-06-23 17:05:52',
                'updated_at' => '2019-06-23 17:05:52',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name_ar' => 'علمي',
                'name' => '',
                'created_at' => '2019-06-23 17:05:53',
                'updated_at' => '2019-06-23 17:05:53',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name_ar' => 'اجتماعي ',
                'name' => '',
                'created_at' => '2019-06-23 17:05:56',
                'updated_at' => '2019-06-23 17:05:56',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}