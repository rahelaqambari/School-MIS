<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('department')->insert([
            ['name'=> "computer",
            'school_id'=> "1"
            ],
            [
            'name'=> "english",
            'school_id'=> "2"
            ]
        ]);
    }
}
