<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use Illuminate\Http\Request;
use App\Models\Department;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $department= Department::all();
        $designations = Designation::all();
        return view('designation.index',compact('department','designations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $department = Department::all();
        return view('designation.create', compact('department'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(['name'=> 'required'
        , 'department_id' => 'required',
    
    ]);

    Designation::create([
        'name' => $validatedData['name'],
        'department_id' => $validatedData['department_id'],
    ]);
    
    return redirect()->route('designation.index')->with('success','Desgination has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Designation $designation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Designation $designation)
    {
        $department = Department::all();
        return view('designation.edit',compact('designation','department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Designation $designation)
    {
        $request->validate([
            'name' => 'required',
            'department_id' => 'required',
        ]);
        
        $designation->fill($request->post())->save();

        return redirect()->route('designation.index')->with('success','Desgination has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Designation $designation)
    {
        $designation->delete();

        return redirect()->route('designation.index')->with('success','Desgination has been deleted successfully');
    }
}
