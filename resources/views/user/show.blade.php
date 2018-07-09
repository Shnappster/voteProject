@extends('main.main')

@section('content')
    <div class="container">

        <div class="row">
            <h5> Name: <b>{{$user->name}}</b> </h5>
        </div>
        <div class="row">
            <h5> Username: <b>{{$user->login}}</b> </h5>
        </div>
        <div class="row">
            <h5> Count of vote: <b>{{$count}}</b> </h5>
        </div>
    </div>

@endsection