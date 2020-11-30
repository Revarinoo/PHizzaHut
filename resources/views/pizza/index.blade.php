@extends('layouts.layout')

@section('content')
    <div class="pl-5">
<<<<<<< HEAD
        <h1>Our Pizza</h1>
=======
        <h1 class="container">Login Form</h1>
        <h1>Testt Login Form</h1>
        @if($id == 2)
            <button class="btn btn-danger">Click</button>
        @endif
>>>>>>> 941d05facf4707ddffa0d738d01e38be194a1e8c
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
