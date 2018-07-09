@extends ('main.main')

@section('content')

    <div class="col-sm-8 blog-main">
        @foreach($votes as $vote)
            @include('vote.vote')
        @endforeach
    </div><!-- /.blog-main -->


@endsection
