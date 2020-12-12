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
                        @can('isUser', App\Orderdetail::class)
                        <form action="{{route('carts.store')}}" style="margin-top: 40px;" method="POST">
                            @csrf
                            <label for="quantity">Quantity : </label>
                            <input id="quantity" type="number" min="1" name="quantity" class="qty-form @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}" required autocomplete="quantity" autofocus>
                            @error('quantity')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
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
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
