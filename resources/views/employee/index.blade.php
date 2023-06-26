<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Employee Panel</title>

      <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <!-- Font-awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    </head>
<body>
    <div class="container" style="margin-top: 50px;">
        <h3 class="text-center text-danger"><b>Employee</b> </h3>
        <a href="{{route('employee.create')}}" class="btn btn-outline-success">Add New Employee</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Joining data</th>
                <th>Date of birth</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Role</th>
                <th>Department</th>
                <th>Desgination</th>
                <th>Update</th>
                <th>Delete</th>

            </tr>
        </thead>
 
            <tbody>

            @foreach ($emps as $index => $emp)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $emp->name }}</td>
                        <td>{{ $emp->email }}</td>
                        <td>{{ $emp->join }}</td>
                        <td>{{ $emp->dob }}</td>
                        <td>{{ $emp->phone }}</td>
                        <td>{{ $emp->address }}</td>
                        
                        @if ($emp->role)
                        <td>{{ $emp->role->name }}</td>
                        @endif

                        @if ($emp->department)
                        <td>{{ $emp->department->name }}</td>
                        @endif

                        @if ($emp->designation)
                        <td>{{ $emp->designation->name }}</td>
                        @endif

                        <td><a href="/employee.edit/{{ $emp->id }}" class="btn btn-outline-primary">Update</a></td>
                        <td>
                        <form action="{{ route('employee.destroy', $emp->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </td>
                        
                  

                </tr>

                @endforeach

            </tbody>
        </table>
    </div>
</body>