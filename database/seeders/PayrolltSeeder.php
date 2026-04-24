<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PayrolltSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
          DB::table('payroll')->insert([
            [
            'start_date'=> "4/22/2026",
            'end_date' =>'4/22/2027',
            'designation_id' => 2,
            'employee_id' => 1,
            'phone' => '079765345216'
            ],
        ]);
    }
}
