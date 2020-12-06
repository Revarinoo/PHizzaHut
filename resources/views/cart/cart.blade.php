@extends('layouts.layout')

@section('content')

<div class="container">
    @foreach ($carts as $cart)
    <div class="card mb-3 mt-3 custom-card-detail">
        <div class="row no-gutters">
            <div class="col-md-3">
            <img src="{{url('storage/images/'.$cart->pizza->image)}}" class="card-img img-detail" alt="Pizza Image" style="width:15rem; height:15rem;">
            </div>
            <div class="col-md-">
                <div class="card-body pizza-detail">
                    <h5 class="card-title custom-name">{{$cart->pizza->name}}</h5>
                    <p class="card-text">Rp{{$cart->pizza->price}}</p>

                <form action="{{route('carts.update',$cart->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <p class="card-text">Quantity:
                            <input type="number" min="1" name="quantity" class="qty-form" value="{{$cart->quantity}}">
                        <button type="submit" class="btn btn-primary ml-2">Update Quantity</button>
                        </p>

                </form>
                <form action="{{route('carts.destroy',$cart->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger mt-3">Delete From Cart</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @if ($carts->count() != 0)
        <div class="text-center mb-5 mt-5">
            <form action="/carts/{{$user->id}}/checkout" method="POST">
                @csrf
                <button type="submit" class="btn btn-dark">Checkout</button>
            </form>
        </div>

    @else
        <h2 class="text-center mt-4 mb-4">Cart Empty</h2>
    @endif

</div
@endsection
