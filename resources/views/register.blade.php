@extends('layouts.layout')

@section('content')
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <div class="container">
        <div class="card custom-card">
            <div class="card-header bg-header">
                Register
            </div>
            <div class="card-body">

                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </form>

                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>

@endsection
