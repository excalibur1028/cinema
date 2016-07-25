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
        <div class="text-center"><b>Dates and Schedules</b></div>
        <hr>
        @foreach($movie->schedules as $schedule)
                <li>{{ $schedule->air_date }}</li>
        @endforeach
        <hr>
        <div class="text-center">
            <b>Add new schedule</b>
        </div>
        {!! Form::open(['action' => ['SchedulesController@store', $movie->id]]) !!}
            <div class="form-group">
                {{ Form::datetimeLocal('air_date', date('Y-m-d\TH:i'), ['class' => 'form-control']) }}
            </div>
            {!! Form::submit('Create', ['class' => 'btn btn-primary', 'style' => 'float:right']) !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection
