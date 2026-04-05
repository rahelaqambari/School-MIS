<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $fillable = [
        "name",
        "school_id",
    ];
    public function school(){
        return $this->belongsTo(School::class);
    }

     public function designations(){
        return $this->hasMany(Designation::class);
    }

     public function employee(){
        return $this->hasManyThrough(Employee::class,Designation::class);
    }
}
