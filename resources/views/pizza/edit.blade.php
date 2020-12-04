@extends('layouts.layout')

@section('content')

    <div class="container">
        
        <div class="card">
            <h5 class="card-header text-center">Add New Pizza</h5>
            <div class="col-md-4">
                <img src="{{url('storage/images/'.$pizza->image)}}" class="card-img img-detail" alt="Pizza Image">
            </div>
            <div class="card-body">
                <form action="{{route('pizza.update',$pizza->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-left">Pizza Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $pizza->name }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="price" class="col-md-4 col-form-label text-md-left">Pizza Price</label>

                        <div class="col-md-6">
                            <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $pizza->price }}" required autocomplete="price" autofocus>

                            @error('price')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label text-md-left">Pizza Description</label>

                        <div class="col-md-6">
                            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $pizza->description }}" required autocomplete="description" autofocus>

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="image" class="col-md-4 col-form-label text-md-left">Pizza Image</label>

                        <div class="col-md-6">
                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ $pizza->image }}" required autocomplete="image" autofocus>

                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 ">
                            <button type="submit" class="btn btn-primary">
                                Edit Pizza
                            </button>
                        </div>
                    </div>
                </form>

                @if(session('msg'))
                    <div class="alert alert-success" role="alert" style="margin: 20px">
                        {{ session('msg') }}
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
