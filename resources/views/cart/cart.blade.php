@extends('layouts.layout')

@section('content')
<div class="container">
    @foreach ($carts as $cart)
    <div class="card mb-3 custom-card-detail">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="/images/" class="card-img img-detail" alt="Pizza Image">
            </div>
            <div class="col-md-8">
                <div class="card-body pizza-detail">
                    <h5 class="card-title custom-name">{{$cart->pizza->name}}</h5>
                    <p class="card-text"></p>
                    <p class="card-text">Rp</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
   
</div
@endsection
