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
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = $validatedData['name'] . '.' . $extension;
            $image->move(public_path('images'), $imageName);
            $validatedData['image'] = $imageName;
        }
    
        Employee::create($validatedData);
    
        return redirect()->route('employee.index')->with('success', 'Employee has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        $roles = Role::all();
        $depts = Department::all();
        $desgs = Designation::all();
        return view('employee.show',compact('employee','roles','depts','desgs'));
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
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
        
        $employee->name = $validatedData['name'];
        $employee->email = $validatedData['email'];
        $employee->address = $validatedData['address'];
        $employee->join = $validatedData['join'];
        $employee->dob = $validatedData['dob'];
        $employee->phone = $validatedData['phone'];
        $employee->department_id = $validatedData['department_id'];
        $employee->role_id = $validatedData['role_id'];
        $employee->designation_id = $validatedData['designation_id'];
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = $validatedData['name'] . '.' . $extension;
            $image->move(public_path('images'), $imageName);
            $employee->image = $imageName;
        }
    
        $employee->save();
    
        return redirect()->route('employee.index')->with('success', 'Employee has been updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index')->with('success','Employee has been deleted successfully');
    }
}
