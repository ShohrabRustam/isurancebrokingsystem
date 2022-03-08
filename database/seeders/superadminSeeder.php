<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class superadminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('superadmin')->insert([
            // 'name' => 'Str::random(10)',
            // 'email' => Str::random(10).'@gmail.com',
            // 'password' => Hash::make('password')
                'name' => 'superadmin',
                'gmail' => 'superadmin@gmail.com',
               'password' => 'password'

        ]);

    }
}
