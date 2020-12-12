@extends('layouts.layout')

@section('content')
    <link rel="stylesheet" href="{{asset('css/history.css')}}">

    <div class="container mt-5 mb-5">
        <?php $count = 1; ?>
        @foreach($listorders as $listorder)
            <?php $count+=1; ?>
            <a href="{{route('order.detail',$listorder->id)}}">
                <div class="custom-card card {{$count%2 == 1 ? 'bg-light' : 'bg-red'}}">
                    <div class="card-body" style="color: {{$count%2 == 1 ? '#DF3821' : '#ffffff'}} ">
                        <ol>
                            <li>Transaction at {{$listorder->transaction_date}}</li>
                            <li>User ID : {{$listorder->user->id}}</li>
                            <li>Username : {{$listorder->user->username}}</li>
                        </ol>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

@endsection
