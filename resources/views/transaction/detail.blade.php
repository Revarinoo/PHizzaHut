@extends('layouts.layout')

@section('content')

<div class="container">
    @foreach ($orderdetails as $details)
    <div class="card mb-3 custom-card-detail">
        <div class="row no-gutters">
            <div class="col-md-4">
            <img src="{{url('storage/images/'.$details->$pizza->image)}}" class="card-img img-detail" alt="Pizza Image" style="width:15rem; height:15rem;">
            </div>
            <div class="col-md-8">
                <div class="card-body pizza-detail">
                    <h5 class="card-title custom-name">{{$details->pizza->name}}</h5>
                    <p class="card-text">Rp{{$details->pizza->price}}</p>
                    <p class="card-text">Quantity: {{$details->quantity}}</p>
                    <p class="card-text">Total Price: {{$details->pizza->price * $details->quantity}}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
