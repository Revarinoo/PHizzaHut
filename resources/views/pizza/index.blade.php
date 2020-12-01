@extends('layouts.layout')

@section('content')
    <div class="container">


        <div class="title">
            <h1 class="text-dark mt-3">Our Delicious Pizza!</h1>
        </div>

            @if ($user!= "Guest" && $user->role_id == 1)
                <button class="btn btn-primary ml-3 mr-5" type="submit">Add Pizza</button>

            @else
                <form method="get">
                    <h4 class="text-dark ml-5">Search Pizza: </h4>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control ml-5" placeholder="Pizza's Name" name="pizzaname" aria-label="Pizza's Name" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                        <button class="btn btn-primary ml-3 mr-5" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            @endif

        <div class="row justify-content-center">
            @if ($pizzas->count() ==0)
                <h5>Pizza Not Found</h5>
            @endif

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
        </div>

        {{$pizzas->links()}}
    </div>

@endsection
