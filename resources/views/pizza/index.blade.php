@extends('layouts.layout')

@section('content')
    <div class="pl-5">
        <h1>Our Pizza</h1>
    </div>
    <div class="container">
        @foreach ($pizzas as $pizza)
        <div class="card d-inline-block">
            <div class="imgwrap">
                <img class="card-img-top" src="/images/{{$pizza->image}}" alt="Card image cap">
            </div>
            <div class="card-body">
            <h5 class="card-title text-center font-weight-bold">{{$pizza->name}}</h5>
            <h5 class="card-title text-center font-weight-bold">{{$pizza->price}}</h5>
            </div>
        </div>
        @endforeach 
        {{$pizzas->links()}}
    </div>
    

@endsection
