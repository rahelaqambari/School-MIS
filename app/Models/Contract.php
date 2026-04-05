<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    //
    protected $fillable = [
        "end_date",
        "employee_id",
        "designation_id",
        "hire_type",
    ];

     public function employee(){
        return $this->belongsTo(Employee::class);
    }
     
     public function designation(){
        return $this->belongsTo(Designation::class);
    }

     

}
