@extends('app')

@section('content')
<div class="row">
    <div class="col-xs-9">
        <div class="col-xs-4">
            <img class="img-responsive" src={{ asset($movie->cover) }} width="230" height="345">
        </div>
        <div class="col-xs-8">
            <h3 style="margin:0px">
                {{ Form::open(['method' => 'DELETE', 'route' => ['dashboard.movie.destroy', $movie->id]]) }}
                    <button id="delete "type="submit" class="btn btn-sm btn-default btn-flat" style="float:right"  data-toggle="tooltip" data-placement="top" title="Delete">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                {{ Form::close() }}
                <button type="submit" class="btn btn-sm btn-default btn-flat" style="float:right"  data-toggle="tooltip" data-placement="top" title="Edit">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </button>
                <b>{{ $movie->title }}</b>
            </h3>
            <hr>
                <p>{{ $movie->description }}</p>
            <hr>
            <table>
                <tbody>
                    <tr>
                        <td style="padding-right: 30px"><h5>Genre</h5></td>
                        <td><span>{{ $movie->genre }}</span></td>
                    </tr>
                    <tr>
                        <td style="padding-right: 30px"><h5>Cast</h5></td>
                        <td><span>{{ $movie->cast }}</span></td>
                    </tr>
                    <tr>
                        <td style="padding-right: 30px"><h5>Release Date</h5></td>
                        <td><span>{{ $movie->release_date->toFormattedDateString() }}</span></td>
                    </tr>
                </tbody>
            </table>
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
                {!! Form::datetimeLocal('air_date', date('Y-m-d\TH:i'), ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('Create', ['class' => 'btn btn-primary', 'style' => 'float:right']) !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection
