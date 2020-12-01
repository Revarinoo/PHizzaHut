@extends('layouts.layout')

@section('content')
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
    <div class="container">
        <div class="card mb-3 custom-card-detail">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="/images/{{$pizzas->image}}" class="card-img img-detail" alt="Pizza Image">
                </div>
                <div class="col-md-8">
                    <div class="card-body pizza-detail">
                        <h5 class="card-title custom-name">{{$pizzas->name}}</h5>
                        <p class="card-text">{{$pizzas->description}}</p>
                        <p class="card-text">Rp {{$pizzas->price}}</p>
                        @if($user->role_id == 2)
                        <form action="{{route('carts.store')}}" style="margin-top: 40px;" method="POST">
                            @csrf
                            <label for="quantity">Quantity : </label>
                            <input type="number" min="1" max="{{$pizzas->stock}}" name="quantity" class="qty-form">
                            <input type="hidden" name="pizza_id" value="{{$pizzas->id}}">
                            <div class="form-group row mb-0 custom-button-detail">
                                    <button type="submit"class="btn btn-primary">
                                        {{ __('Add to Cart') }}
                                    </button>
                            </div>
                        </form>
                            @if(session('msg'))
                                <div class="alert alert-success" role="alert" style="margin: 20px">
                                    {{ session('msg') }}
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
