@extends('layouts.layout')

@section('content')

<div class="container">
    @foreach ($users as $user)
    <div class="card mb-3 custom-card-detail">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="card-body pizza-detail">
                    <p class="card-text">User ID: {{$user->id}}</p>
                    <p class="card-text">Username: {{$user->username}}</p>
                    <p class="card-text">Email: {{$user->email_address}}</p>
                    <p class="card-text">Address: {{$user->address}}</p>
                    <p class="card-text">Phone Number: {{$user->phone_number}}</p>
                    <p class="card-text">Gender: {{$user->gender}}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
