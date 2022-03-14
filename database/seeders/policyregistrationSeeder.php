<?php

namespace Database\Seeders;

use App\Models\policyregistration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class policyregistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        policyregistration::factory(1000)->create();
    }
}
