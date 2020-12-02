@extends('layouts.layout')

@section('content')

<div class="container">
    @foreach ($listusers as $listuser)
    <div class="card mb-3 custom-card-detail">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="card-body pizza-detail">
                    <p class="card-text">User ID: {{$listuser->id}}</p>
                    <p class="card-text">Username: {{$listuser->username}}</p>
                    <p class="card-text">Email: {{$listuser->email_address}}</p>
                    <p class="card-text">Address: {{$listuser->address}}</p>
                    <p class="card-text">Phone Number: {{$listuser->phone_number}}</p>
                    <p class="card-text">Gender: {{$listuser->gender}}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
