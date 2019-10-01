<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \DB::table('todos')->insert([
        // 	'title'  => 'Học lập trình Laravel 1',
        //     'content' => 'Nội dung học bài Todo',
        //     'status' => 1
        // ]);
        // \DB::table('todos')->insert([
        // 	'title'  => 'Học lập trình Laravel 2',
        //     'content' => 'Nội dung học bài Todo',
        //     'status' => 2
        // ]);
        $faker = \Faker\Factory::create();
        for ($i=0; $i < 200; $i++) { 
        	\DB::table('todos')->insert([
                'user_id' => $faker->unique()->ean8,
        		'title'  => $faker->text(20),
                'content' => $faker->text(200)
        	]);
        }
    }
}
