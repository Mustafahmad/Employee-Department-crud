<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Employee Update</title>

      <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <!-- Font-awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    </head>
    <body>

        <div class="container" style="margin-top: 50px;">
            <div class="row">


                <div class="col-lg-6">
                    <h3 class="text-center text-danger"><b>Update Employee</b> </h3>
				    <div class="form-group">
                    <form action="/employee.update/{{ $employee->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("put")
                         <input type="text" name="name" class="form-control m-2" placeholder="Name" value ="{{ $employee->name }}">
                         <input type="email" name="email" class="form-control m-2" placeholder="Email" value ="{{ $employee->email }}">
                         <strong> Date of joining:</strong> 
                         <input type="date" name="join" class="form-control m-2" placeholder="Joining date" value ="{{ $employee->join }}">
                          <strong> Date of birth:</strong> 
                         <input type="date" name="dob" class="form-control m-2" placeholder="Date of birth" value ="{{ $employee->dob }}">
                         <input type="text" name="phone" class="form-control m-2" placeholder="Phone Number" value ="{{ $employee->phone }}">
                         <input type="text" name="address" class="form-control m-2" placeholder="Address" value ="{{ $employee->address }}">
                         <select name="role_id" id="" class="form-control">
                         <option value="">Select Role</option>
                            @foreach ($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                         </select>
                         <select name="department_id" id="" class="form-control">
                            <option selected value="">Select Department</option>
                            @foreach ($depts as $dept)
                            <option value="{{$dept->id}}">{{$dept->name}}</option>
                            @endforeach
                         </select>
                         <select name="designation_id" id="" class="form-control">
                            <option selected value="">Select Designation</option>
                            @foreach ($desgs as $desg)
                            <option value="{{$desg->id}}">{{$desg->name}}</option>
                            @endforeach
                         </select>
                        <button type="submit" class="btn btn-danger mt-3 ">Submit</button>
                        </form>
                   </div>
                </div>
            </div>



         </body>
</html>
