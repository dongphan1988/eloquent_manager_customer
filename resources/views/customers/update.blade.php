@extends('master')
@section('title','Add Customer')
@section('name','New Customer')
@section('content')
    <form method="post" action="{{route('customers.update',['id'=>$customer->id])}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="inputname">Name</label>
            <input class="form-control" type="text" name="name" value="{{$customer->name}}">
        </div>

        <div class="form-group">
            <label for="inputbirthday">Birthday</label>
            <input class="form-control" type="date" name="birthday" value="{{$customer->birthday}}">
        </div>

        <div class="form-group">
            <label for="inputandress">Andress</label>
            <input class="form-control" type="text" name="andress" value="{{$customer->andress}}">
        </div>
        <div class="form-group">
            <label for="inputfilename">File</label>
            <input class="form-group" type="file" name="inputFile" >
        </div>
        <div style="text-align: center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection