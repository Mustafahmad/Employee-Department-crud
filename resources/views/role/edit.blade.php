
@extends('default')   
@section('content')

<div class="container" style="margin-top: 50px;">
    <div class="row">


        <div class="col-lg-6">
            <h3 class="text-center text-danger"><b>Update Role</b> </h3>
            <div class="form-group">
                <form action="/role.update/{{ $role->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("put")
                    <input type="text" name="name" class="form-control m-2" placeholder="name" value="{{ $role->name }}">

                <button type="submit" class="btn btn-danger mt-3 ">Submit</button>
                </form>
            </div>
        </div>
    </div>











