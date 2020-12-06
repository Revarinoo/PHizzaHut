@extends('layouts.layout')

@section('content')
    <link rel="stylesheet" href="{{asset('css/history.css')}}">

    <div class="container mt-5">
        <?php $count = 1; ?>
        @foreach($transactions as $transaction)
            <?php $count+=1; ?>
            <a href="{{route('order.detail',$transaction->id)}}">
                <div class="custom-card card {{$count%2 == 1 ? 'bg-light' : 'bg-red'}}">
                    <div class="card-body" style="color: {{$count%2 == 1 ? '#DF3821' : '#ffffff'}} ">
                        Transaction at {{$transaction->transaction_date}}
                    </div>
                </div>
            </a>
        @endforeach

    </div>

@endsection
