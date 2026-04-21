<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('school')->insert([
            ['name'=> "Maly",
            'dep_id'=>" 2"
            ],
            [
            'name'=> "english",
            'dep_id'=>"1"
            ]
        ]);
    }
}
