<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable = [
        "pay_date",
        "amunt",
        "payment_method",
        "employee_id",
        "payroll_id"
    ];

     public function payroll(){
        return $this->hasMany(Payroll::class);
    }
     public function employee(){
        return $this->hasMany(Employee::class);
    }
}
