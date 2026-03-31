<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    protected $fillable = [
        "name",
        "whatsApp_link"
    ];

    public function users(){
        return $this->belongsTo(User::class,"schoolusers");
    }

    public function departments(){
        return $this->hasMany(Department::class);
    }

     public function designations(){
        return $this->through("departments")->has("designations");
    }
     
}
