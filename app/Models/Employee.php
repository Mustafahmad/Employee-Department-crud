<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','dob','join','address','phone',

    'department_id','role_id','designation_id','image',

];

public function department()
{
    return $this->belongsTo(Department::class);
}
public function role()
{
    return $this->belongsTo(Role::class);
}
public function designation()
{
    return $this->belongsTo(Designation::class);
}

}
