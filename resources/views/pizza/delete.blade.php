@extends('layouts.layout')

@section('content')
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
    <div class="container">
        <div class="card mb-3 custom-card-detail">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{url('storage/images/'.$pizzas->image)}}" class="card-img img-detail" alt="Pizza Image">
                </div>
                <div class="col-md-8">
                    <div class="card-body pizza-detail">
                        <h5 class="card-title custom-name">{{$pizzas->name}}</h5>
                        <p class="card-text">{{$pizzas->description}}</p>
                        <p class="card-text">Rp {{$pizzas->price}}</p>
                        <form action="{{route('pizza.destroy',$pizzas->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete Pizza</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
