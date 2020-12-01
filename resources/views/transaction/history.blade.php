@extends('layouts.layout')

@section('content')

    @foreach($transactions as $transaction)
    <div class="card">
        <div class="card-header">
            Transaction at {{$transaction->transaction_date}}
        </div>
    </div>
    @endforeach
@endsection
