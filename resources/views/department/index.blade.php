<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Department Panel</title>

      <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <!-- Font-awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    </head>
<body>
    <div class="container" style="margin-top: 50px;">
        <h3 class="text-center text-danger"><b>Department</b> </h3>
        <a href="{{route('department.create')}}" class="btn btn-outline-success">Add New Department</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Department</th>
                <th>Update</th>
                <th>Delete</th>
 
            </tr>
        </thead>
 
            <tbody>

            @foreach ($departments as $index => $department)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $department->name }}</td>

                        <td><a href="/department.edit/{{ $department->id }}" class="btn btn-outline-primary">Update</a></td>

                        <td>
                        <form action="{{ route('department.destroy', $department->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </td>

                @endforeach

            </tbody>
        </table>
    </div>
</body>