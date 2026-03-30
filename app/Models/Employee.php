<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = [
        "name",
        "lastName",
        "tazkira",
        "email",
        "gender",
        "phone",
        "designation_id",
        
    ];
}
