@extends('layouts.layout')

@section('content')
    <link rel="stylesheet" href="{{asset('css/history.css')}}">

    <div class="container mt-5">
        @foreach($transactions as $transaction)

            <a href="/orderdetails/{{$transaction->id}}">
                <div class="custom-card card {{$transaction->id%2 == 0 ? 'bg-light' : 'bg-red'}}">
                    <div class="card-body" style="color: {{$transaction->id%2 == 0 ? '#DF3821' : '#ffffff'}} ">
                        Transaction at {{$transaction->transaction_date}}
                    </div>
                </div>
            </a>
        @endforeach
    </div>

@endsection
