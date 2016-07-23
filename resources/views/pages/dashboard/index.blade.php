@extends('app')

@section('content')
<div class="row">
    <div class="col-xs-6">
        <h2>All Movies</h2>
    </div>
    <div class="col-xs-6" style="padding-top:15px">
        <a href="{{ route('dashboard.movie.create') }}">
            <button class="btn btn-primary" style="float:right">Create Movie</button>
        </a>
    </div>
    <div class="col-xs-12">
        <hr>
        @foreach($movies as $movie)
            <div class="col-xs-3" style="padding-bottom:30px">
                <a href="{{ url('dashboard/movie', $movie->id) }}">
                    <div style="padding-bottom: 10px">
                        <img class="img-responsive" src={{ asset($movie->cover) }}>
                    </div>
                    <b>{{ $movie->title }}</b>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
