@extends('layouts.layout')

@section('content')

<div class="container">
    @foreach ($carts as $cart)
    <div class="card mb-3 custom-card-detail">
        <div class="row no-gutters">
            <div class="col-md-4">
            <img src="/images/{{$cart->pizza->image}}" class="card-img img-detail" alt="Pizza Image" style="width:15rem; height:15rem;">
            </div>
            <div class="col-md-8">
                <div class="card-body pizza-detail">
                    <h5 class="card-title custom-name">{{$cart->pizza->name}}</h5>
                    <p class="card-text">Rp{{$cart->pizza->price}}</p>
                    
                <form action="/carts/{{$cart->id}}" method="POST">
                        @csrf
                        @method('PUT')
                        <p class="card-text">Quantity: </p>
                        <input type="number" min="1" max="{{$cart->pizza->stock}}" name="quantity" class="qty-form" value="{{$cart->quantity}}">
                        <button type="submit" class="btn btn-primary">Update Quantity</button>
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete From Cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
   
</div
@endsection
