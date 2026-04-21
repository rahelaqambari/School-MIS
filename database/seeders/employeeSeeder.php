<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class employeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('school')->insert([
            ['name'=> "Sana Bahar",
            'lastName' =>'Qambari',
            'tazkira' => '2354126098',
            'email' => 'sanabahar@gmail.com',
            'phone' => '079765345216'
            ],
           
        ]);
    }
}
