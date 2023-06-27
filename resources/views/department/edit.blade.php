
@extends('default')
     
     @section('content')
     


        <div class="container" style="margin-top: 50px;">
            <div class="row">
            @include('flash-messages')


                <div class="col-lg-6">
                    <h3 class="text-center text-danger"><b>Update Department</b> </h3>
				    <div class="form-group">
                        <form action="/department.update/{{ $department->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("put")
                         <input type="text" name="name" class="form-control m-2" placeholder="name" value="{{ $department->name }}">
        
                        <button type="submit" class="btn btn-danger mt-3 ">Submit</button>
                        </form>
                   </div>
                </div>
            </div>



         </body>
</html>









