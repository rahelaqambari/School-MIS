 <?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('salary')->insert([
            ['employee_id' => 1,
            'payroll_id' => 1,
            'gross_salary' => 5000,
            ],
        ]);
    }
}
