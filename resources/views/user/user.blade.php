@extends('layouts.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    @foreach ($listusers as $listuser)
        <div class="card mb-3 d-inline-block  ml-3 mr-3 mt-5" style="width: 18rem;">
            <div class="card-header" style="background-color: #DF3821">User ID : {{$listuser->id}}</div>
                <div class="card-body">
                    <p class="card-text">Username: {{$listuser->username}}</p>
                    <p class="card-text">Email: {{$listuser->email_address}}</p>
                    <p class="card-text">Address: {{$listuser->address}}</p>
                    <p class="card-text">Phone Number: {{$listuser->phone_number}}</p>
                    <p class="card-text">Gender: {{$listuser->gender}}</p>
                </div>
              </div>
    @endforeach
    </div>
@endsection
