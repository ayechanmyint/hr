<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $fillable =['name'];

    function employees(){
        return $this->hasMany(Employee::class);
    }
}
