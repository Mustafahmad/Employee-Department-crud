
    @extends('default')
     
     @section('content')

    <div class="container" style="margin-top: 50px;">
        <h3 class="text-center text-danger"><b>Department</b> </h3>
        @include('flash-messages')
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