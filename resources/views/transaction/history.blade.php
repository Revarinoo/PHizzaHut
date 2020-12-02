@extends('layouts.layout')

@section('content')
    <link rel="stylesheet" href="{{asset('css/history.css')}}">

    @foreach($transactions as $transaction)

        <div class="card {{$transaction->id%2 == 0 ? 'bg-light' : 'bg-red'}}">
            <div class="card-body">
            <a href="/orderdetails/{{$transaction->id}}">
                {{$transaction->transaction_date}}
            </a>
            </div>
        </div>

    @endforeach

@endsection
