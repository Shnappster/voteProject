@extends('main.main')


@section('content')

    <div class="col-sm-8 blog-main">
        <h1>Create a vote</h1>

        <hr>

        <form method="POST" id="createVoteForm" enctype="multipart/form-data" action="/votes">
            {{csrf_field()}}

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Description:</label>
                <textarea id="description" name="description" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="image">Photo:</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>

            @include('error.errors')

        </form>

    </div>

@endsection