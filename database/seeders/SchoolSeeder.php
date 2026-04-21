<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('school')->insert([
            ['name'=> "Sharifi High School",
            'whtasApp_link'=>"0796857434"],
            [
            'name'=> "Bibi Zahra High School",
            'whtasApp_link'=>"0754634213"
            ]
        ]);
    }
}
