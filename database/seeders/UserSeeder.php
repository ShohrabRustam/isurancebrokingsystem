<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

// user_registration models
use App\Models\user_registration;
//facker
use Faker\Factory as Faker;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *@author Shohrab Rustam
     * @return void
     */
    public function run()
    {
        // $user = new user_registration();
        // $faker = FaKer::create();
        // DB::table('user_registration')->insert

        // 'name' => 'Str::random(10)',
        // 'email' => Str::random(10).'@gmail.com',
        // 'password' => Hash::make('password')
        // 'name' => 'Rustam',
        // 'email' => 'rustam001@gmail.com',
        //    'password' => Hash::make('password')
        //    'password' =>'password'

        // $user->name = "Shohab Rustam";
        // $user->email = "mohdrustam001@gmail.com";
        // $user->password = "password";
        // $user->save();

        // for ($i = 0; $i < 100; $i++)
        // {
        //     $user->name = $faker->name;
        //     // for unique email
        //     $user->email = $faker->unique()->email;
        //     $user->password = "password";
        //     $user->save();
        // }
            user_registration::factory(100)->create();
    }
}
