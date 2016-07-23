@extends('app')

@section('content')
<div class="row">
    <div class="col-xs-12 text-center">
        <h1>Now Showing</h1>
        <hr>
    </div>
    @foreach($movies as $movie)
        <div class="col-xs-3" style="padding-bottom:30px">
            <a href="{{ route('purchase.movie', $movie->id) }}">
                <div style="padding-bottom: 10px">
                    <img class="img-responsive" src={{ asset($movie->cover) }} width="230" height="345">
                </div>
                <b>{{ $movie->title }}</b>
            </a>
        </div>
    @endforeach
</div>
@endsection
