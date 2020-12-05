@extends('layouts.layout')

@section('content')

<div class="container">
    <h2 class="text-center mt-4 mb-4">Transaction Details</h2>
    @foreach ($orderdetails as $details)
    <div class="card mb-3 mt-3">
        <div class="row no-gutters">
            <div class="col-md-3">
            <img src="{{url('storage/images/'.$details->pizza->image)}}" class="card-img img-detail" alt="Pizza Image" style="width:15rem; height:15rem;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$details->pizza->name}}</h5>
                    <p class="card-text">Rp {{$details->pizza->price}}</p>
                    <p class="card-text">Quantity: {{$details->quantity}}</p>
                    <p class="card-text">Total Price: Rp{{$details->pizza->price * $details->quantity}}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
