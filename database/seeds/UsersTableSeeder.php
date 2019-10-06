<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  \DB::table('users')->insert([
        //     'name'  => 'long',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('123456')//mã hóa mật khẩu
        // ]);
       $faker = \Faker\Factory::create();
       for ($i=0 ; $i < 100 ; $i++) { 
           \DB::table('users')->insert([
                'name' => $faker->username(20),
                'email' => $faker->unique()->safeEmail,
                'password' => $faker->md5('123456'),
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
           ]);
       }
    }
}
