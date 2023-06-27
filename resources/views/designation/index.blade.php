
    @extends('default')
     
     @section('content')

    <div class="container" style="margin-top: 50px;">
        <h3 class="text-center text-danger"><b>Desgination</b> </h3>
        @include('flash-messages')
        <a href="{{route('designation.create')}}" class="btn btn-outline-success">Add New Desgination</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Desgination</th>
                <th>Deptartment</th>
                <th>Update</th>
                <th>Delete</th>
              
            </tr>
        </thead>
 
            <tbody>

            @foreach ($designations as $index => $desg)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $desg->name }}</td>
                        <td>{{ $desg->department->name}}</td>
                        <td><a href="/designation.edit/{{ $desg->id }}" class="btn btn-outline-primary">Update</a></td>
                        <td>
                        <form action="{{ route('designation.destroy', $desg->id) }}" method="POST">
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