@extends('default')   
@section('content')
    <div class="container" style="margin-top: 50px;">
        <h3 class="text-center text-danger"><b>Roles</b> </h3>
        @include('flash-messages')
        <a href="{{route('role.create')}}" class="btn btn-outline-success">Add New Roles</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Role</th>
                <th>update</th>
                <th>Delete</th>
            </tr>
        </thead>
 
            <tbody>

            @foreach ($roles as $index => $role)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $role->name }}</td>
                        <td><a href="/role.edit/{{ $role->id }}" class="btn btn-outline-primary">Update</a></td>
                        <td>
                        <form action="{{ route('role.destroy', $role->id) }}" method="POST">
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