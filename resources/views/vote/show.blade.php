@extends('main.main')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <img src="{{env('APP_URL') . Storage::url('votes/' . $vote->file_name)}}" width="150" height="150">
            </div>
            <div class="col-md-3">
                <h1>{{$vote->title}}</h1>
                Author:
                <a href="/users/{{$vote->user->id}}">{{$vote->user->name}}</a>
            </div>
        </div>

        <div class="row">
            <div class="col" style="word-wrap: break-word; margin-top: 15px">
                <h6>{{$vote->description}}</h6>
            </div>
        </div>

    </div>
@endsection