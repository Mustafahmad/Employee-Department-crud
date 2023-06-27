<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Home Page
Route::get('/', function () {
    return view('home');
});

// Routes for Department
Route::get('/department',[DepartmentController::class,'index'])->name('department.index');
Route::get('/department/create',[DepartmentController::class,'create'])->name('department.create');
Route::post('/department/store',[DepartmentController::class,'store'])->name('department.store');
Route::delete('/department/{department}',[DepartmentController::class,'destroy'])->name('department.destroy');
Route::put('/department.update/{department}',[DepartmentController::class,'update'])->name('department.update');
Route::get('/department.edit/{department}',[DepartmentController::class,'edit'])->name('department.edit');

// Routes for Designation
Route::get('/designation',[DesignationController::class,'index'])->name('designation.index');
Route::get('/designation/create',[DesignationController::class,'create'])->name('designation.create');
Route::post('/desgination/store',[DesignationController::class,'store'])->name('designation.store');
Route::delete('/designation/{designation}',[DesignationController::class,'destroy'])->name('designation.destroy');
Route::put('/designation.update/{designation}',[DesignationController::class,'update'])->name('designation.update');
Route::get('/designation.edit/{designation}',[DesignationController::class,'edit'])->name('designation.edit');

// Routes for Roles
Route::get('/role',[RoleController::class,'index'])->name('role.index');
Route::get('/role/create',[RoleController::class,'create'])->name('role.create');
Route::post('/role/store',[RoleController::class,'store'])->name('role.store');
Route::delete('/role/{role}',[RoleController::class,'destroy'])->name('role.destroy');
Route::put('/role.update/{role}',[RoleController::class,'update'])->name('role.update');
Route::get('/role.edit/{role}',[RoleController::class,'edit'])->name('Role.edit');

// Routes for Employees
Route::get('/employee',[EmployeeController::class,'index'])->name('employee.index');
Route::get('/employee/create',[EmployeeController::class,'create'])->name('employee.create');
Route::post('/employee/store',[EmployeeController::class,'store'])->name('employee.store');
Route::delete('/employee/{employee}',[EmployeeController::class,'destroy'])->name('employee.destroy');
Route::put('/employee.update/{employee}',[EmployeeController::class,'update'])->name('employee.update');
Route::get('/employee.edit/{employee}',[EmployeeController::class,'edit'])->name('employee.edit');
Route::get('/employee.show/{employee}',[EmployeeController::class,'show'])->name('employee.show');