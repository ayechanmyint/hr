<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Employee;
class DepartmentController extends Controller
{
    //
    public function index(){
        $departments = Department::pluck('name','id');
        return view('department.index',compact('departments'));
    }
    public function create(){
        return view('department.create');
    }

    public function store(Request $request){
        $department = new Department();
        $department->name = $request->department_name;
        $department->save();
        return redirect()->route('index');
    }

    public function showDetail($dep_id){
        
       $employees = Employee::where('department_id',$dep_id)->get();
       $department = Department::where('id',$dep_id)->first();
     
       return view('department.detail',compact('employees','department'));
    }
}
