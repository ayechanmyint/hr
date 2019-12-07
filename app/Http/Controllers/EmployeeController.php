<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Employee;
class EmployeeController extends Controller
{
    //
    public function create(){
        $departments = Department::pluck('name','id');
        return view('employee.create',compact('departments'));
    }

    public function store(Request $request){

        $employee = new Employee(request(['department_id','name','nrc','birthday','contact','address','salary']));
        $employee->save();
        

    }
}
