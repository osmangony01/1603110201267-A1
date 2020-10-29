<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    //
    public function show()
    {
        return view('create_employee');
    }

    public function store(Request $request)
    {
        $emp = new Employee();
        $emp->name = $request->name;
        $emp->email = $request->email;
        $emp->date_of_birth = $request->dob;
        $emp->salary = $request->salary;
        $emp->gender = $request->gender;
        $emp->status = $request->status;
        
        if($emp->save()){
            return redirect('/view-employee');
        }
    }

    public function all()
    {
        $emp = Employee::all();
        return view('view_employee',['employee'=>$emp]);
    }
}
