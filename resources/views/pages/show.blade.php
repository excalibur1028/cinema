@extends('app')

@section('content')
<div class="row">
    <div class="col-xs-9">
        <div class="col-xs-4">
            <img class="img-responsive" src={{ asset($movie->cover) }} width="230" height="345">
        </div>
        <div class="col-xs-8">
            <h3 style="margin:0px">
                {{ $movie->title }}
            </h3>
            <hr>
            <p>{{ $movie->description }}</p>
        </div>
    </div>
    <div class="col-xs-3">
        <div class="panel panel-default">
            <div class="panel-body">
                {{ Form::open() }}
                    <div class="form-group">
                        {{ Form::select('schedule', $schedule, null, ['class' => 'form-control']) }}
                    </div>
                    {{-- <div class="form-group">
                        {{ Form::select('room', $room, null, ['class' => 'form-control']) }}
                    </div> --}}
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
