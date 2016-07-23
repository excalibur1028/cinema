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
            @if($schedule->rooms->name == 'Cinema 1')
                <b>Cinema 1</b>
                <ul>
                    <li>{{ $schedule->air_date->toFormattedDateString() }} - {{ date("g:i A", strtotime($schedule->start_time)) }}</li>
                </ul>
            @elseif($schedule->rooms->name == 'Cinema 2')
                <b>Cinema 2</b>
                <ul>
                    <li>{{ $schedule->air_date->toFormattedDateString() }} - {{ date("g:i A", strtotime($schedule->start_time)) }}</li>
                </ul>
            @elseif($schedule->rooms->name == 'Cinema 3')
                <b>Cinema 3</b>
                <ul>
                    <li>{{ $schedule->air_date->toFormattedDateString() }} - {{ date("g:i A", strtotime($schedule->start_time)) }}</li>
                </ul>
            @endif
        @endforeach
        {!! Form::open(['action' => ['SchedulesController@store', $movie->id]]) !!}
            <div class="form-group">
                {{ Form::select('room_id', $rooms, null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('air_date', 'Showing Date') }}
                {{ Form::date('air_date', date('Y-m-d'), ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('start_time', 'Starting Time') }}
                {{ Form::time('start_time', null, ['class' => 'form-control']) }}
            </div>
            {!! Form::submit('Create', ['class' => 'btn btn-primary', 'style' => 'float:right']) !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection
