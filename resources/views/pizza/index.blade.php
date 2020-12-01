@extends('layouts.layout')

@section('content')
    <div class="pl-5">
        <h1>Our Pizza</h1>
    </div>
    <div class="container">
        <a class="row justify-content-center">
            @foreach ($pizzas as $pizza)
           <form action="{{route('pizza.show',$pizza->id)}}" method="POST">
            <a class="card d-inline-block ml-2 mt-2 mb-3 mr-2" style="width:20rem;" href="{{route('pizza.show',$pizza->id)}}">
                <div class="imgwrap">
                    <img class="card-img-top" src="/images/{{$pizza->image}}" alt="Card image cap">
                </div>
                <div class="card-body">
                <h5 class="card-title text-center font-weight-bold">{{$pizza->name}}</h5>
                <h5 class="card-title text-center font-weight-bold">{{$pizza->price}}</h5>
                </div>
            </a>
            @endforeach
           </form>
        </a>
        {{$pizzas->links()}}
    </div>

@endsection
