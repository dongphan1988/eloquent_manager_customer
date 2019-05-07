@extends('master')
@section('title','list')
@section('name','LIST CUSTOMERS')
@section('content')
    <div>
        <a href="{{route('customers.create')}}">
            <button type="button" class="btn btn-primary">CREATE</button>
        </a>
    </div>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Birthday</th>
            <th scope="col">Andress</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)
            <tr>
                <th scope="row">{{$customer->id}}</th>
                <td>{{$customer->name}}</td>
                <td>{{$customer->birthday}}</td>
                <td>{{$customer->andress}}</td>
                <td>
                    <img src="{{ asset('storage/' . $customer->image) }}" alt="" style="width: 150px">
                </td>
                <td>
                    <div>
                        <a href="{{route('customers.destroy',['id'=>$customer->id])}}" class="text-danger" onclick="return confirm('do you want delele user {{$customer->name}}')">
                            <button type="button" class="btn btn-danger">DELETE</button>
                        </a>
                        <a href="{{route('customers.edit',['id'=>$customer->id])}}">
                            <button type="button" class="btn btn-primary">UPDATE</button>
                        </a>

                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection