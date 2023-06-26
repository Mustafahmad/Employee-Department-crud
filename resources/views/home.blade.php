<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home Page</title>

      <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <!-- Font-awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    </head>
<body>
    <div class="container" style="margin-top: 50px;">
        <h3 class="text-center text-danger"><b>Home Page</b> </h3>
        <a href="#" class="btn btn-outline-success">Home Page</a>

    <table class="table">
        <thead>
            <tr>
                <th>Employee</th>
                <th>Department</th>
                <th>Desgination</th>
                <th>Role</th>
            </tr>
        </thead>
 
            <tbody>

                <tr>
                    <th scope="row"><a class="btn btn-info" href="{{ route('employee.index') }}">Employee</a></th>
                        <td><a class="btn btn-info" href="{{ route('department.index')}}">Department</a></td>
                        <td><a class="btn btn-info" href="{{ route('designation.index') }}">Desgination</a></td>
                        <td><a class="btn btn-info" href="{{ route('role.index') }}">Role</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>