@extends('layouts.layout')
@section('content')
    <link rel="stylesheet" href="{{asset('css/index.pizza.css')}}">
    <div class="container">
        <div class="title">
            <h1 class="text-dark mt-3">Our Delicious Pizza!</h1>
            <hr class="my-4">
            <h3 class="ml-5 mb-3 text-black-50">Order it Now!</h3>
        </div>
            @if ($user!= "Guest" && $user->role_id == 1)
                <button class="btn btn-primary ml-5" type="submit" onclick="location.href='{{route('pizza.create')}}'">Add Pizza</button>
            @else
                <form method="get">
                    <div class="input-group mb-3">
                        <h5 class="text-dark ml-5 mt-1">Search Pizza: </h5>
                        <input type="text" class="form-control ml-2" style="border-radius: 0.3rem" placeholder="Pizza's Name" name="pizzaname" aria-label="Pizza's Name" aria-describedby="basic-addon2">
                        <button class="btn btn-primary ml-3 mr-5" type="submit">Search</button>
                    </div>
                </form>
            @endif

        <div class="row justify-content-center">
            @if ($pizzas->count() ==0)
                <h5>Pizza Not Found</h5>
            @endif

            @foreach ($pizzas as $pizza)

            <div class="card d-inline-block ml-2 mt-2 mb-3 mr-2 custom-pizza" >
                <form action="{{route('pizza.show',$pizza->id)}}" method="POST">
                    <a href="{{route('pizza.show',$pizza->id)}}">
                <div class="imgwrap">
                    <img class="card-img-top" src="{{url('storage/images/'.$pizza->image)}}" style="height: 300px; width: 318px;" alt="Card image cap">
                </div>
                <div class="card-body">
                <h5 class="card-title text-center font-weight-bold">{{$pizza->name}}</h5>
                <h5 class="card-title text-center font-weight-bold">{{$pizza->price}}</h5>
                <div class="text-center">
                    <a href="{{route('pizza.edit',$pizza->id)}}" class="btn btn-primary">Update</a>
                    <a href="{{route('pizza.delete',$pizza->id)}}" class="btn btn-danger">Delete</a>
                </div>
                </div>


            </div>
            </a>
               @endforeach
           </form>
        </div>
        <div class="row mt-3 mb-3 justify-content-center">
            {{$pizzas->links()}}
        </div>
    </div>

@endsection
