@extends('master')
@section('title','Add Customer')
@section('name','New Customer')
@section('content')
<form method="post" action="{{route('customers.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="inputname">Name</label>
        <input class="form-control" type="text" name="name" placeholder="input name">
    </div>

    <div class="form-group">
        <label for="inputbirthday">Birthday</label>
        <input class="form-control" type="date" name="birthday" placeholder="input name">
    </div>

    <div class="form-group">
        <label for="inputandress">Andress</label>
        <input class="form-control" type="text" name="andress" placeholder="input name">
    </div>
    <div class="form-group">
        <label for="inputfilename">File</label>
        <input class="form-group" type="file" name="inputFile" placeholder="input name">
    </div>
    <div style="text-align: center">
            <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{route('customers.index')}}">
            <button type="button" class="btn btn-primary">Back</button>
        </a>
    </div>
</form>
    @endsection