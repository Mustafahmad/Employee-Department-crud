@extends('default')
@section('content')
    <div class="container" style="margin-top: 50px;">
        <h3 class="text-center text-danger"><b>Employee</b> </h3>
        @include('flash-messages')
        <a href="{{route('employee.create')}}" class="btn btn-outline-success">Add New Employee</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Update</th>
                <th>Delete</th>

            </tr>
        </thead>
 
            <tbody>

            @foreach ($emps as $index => $emp)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                        <td><a href="/employee.show/{{ $emp->id }}" class="btn btn-outline-primary">{{ $emp->name }}</a></td>
                        <td>{{ $emp->email }}</td>
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