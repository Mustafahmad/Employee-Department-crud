<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Department;
use App\Models\Designation;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emps = Employee::all();
        return view('employee.index',compact('emps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $emps = Employee::all();
        $roles = Role::all();
        $depts = Department::all();
        $desgs = Designation::all();
        return view('employee.create',compact('emps','roles','depts','desgs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'join' => 'required',
            'dob' => 'required',
            'phone' => 'required',
            'department_id' => 'required',
            'role_id' => 'required',
            'designation_id' => 'required',
        ]);

        Employee::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'address' => $validatedData['address'],
            'join' => $validatedData['name'],
            'dob' => $validatedData['name'],
            'department_id' => $validatedData['department_id'],
            'role_id' => $validatedData['role_id'],
            'designation_id' => $validatedData['designation_id'],
            'phone' => $validatedData['phone'],
        ]);

        return redirect()->route('employee.index')->with('Employee has been created');


    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $roles = Role::all();
        $depts = Department::all();
        $desgs = Designation::all();
        return view('employee.edit',compact('employee','roles','depts','desgs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'join' => 'required',
            'dob' => 'required',
            'phone' => 'required',
            'department_id' => 'required',
            'role_id' => 'required',
            'designation_id' => 'required',
        ]);
        
        $employee->fill($request->post())->save();

        return redirect()->route('employee.index')->with('success','Employee has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index')->with('Success, Employee has been deleted');
    }
}
