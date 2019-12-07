<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $guarded = [];
    // protected $fillable = ['department_id','name','nrc','birthday','contact','address','salary','added_salary'];

    function departments(){
        return $this->belongsTo(Department::class);
    }
}
