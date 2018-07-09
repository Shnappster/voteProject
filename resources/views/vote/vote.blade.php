<div class="blog-post">

    <div class="row" id="vote_size">
        <div class="col-md-auto">
            <img src="{{env('APP_URL') . Storage::url('votes/' . $vote->file_name)}}" width="100" height="100">
        </div>

        <div class="col">
            <a href="/votes/{{$vote->id}}">
                <h1 class="blog-post-title">{{ $vote->title }}</h1>
            </a>
            <h6>{{$vote->description}}</h6>
        </div>
    </div>
</div><!-- /.blog-post -->

