<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    //
    protected $fillable = [
        "end_date",
        "employee_id",
        "designation_id"
    ];
     public function designation(){
        return $this->belongsTo(Designation::class);
    }

     public function employee(){
        return $this->hasMany(Employee::class);
    }

}
