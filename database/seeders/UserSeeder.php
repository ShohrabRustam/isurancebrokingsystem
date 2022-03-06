<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *@author Shohrab Rustam
     * @return void
     */
    public function run()
    {
        DB::table('user_registration')->insert([
            // 'name' => 'Str::random(10)',
            // 'email' => Str::random(10).'@gmail.com',
            // 'password' => Hash::make('password')
                'name' => 'Rustam',
                'email' => 'rustam001@gmail.com',
               'password' => Hash::make('password')

        ]);

    }
}
