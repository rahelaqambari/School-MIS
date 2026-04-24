<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('payment')->insert([
            ['employee_id' => 1,
            'amount' => 5000,
            'payment_date' => '2024-06-01',
            'payment_method' => 'Bank Transfer',
            'status' => 'Completed'
            ],
        ]); 
    }
}
