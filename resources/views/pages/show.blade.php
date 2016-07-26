@extends('app')

@section('content')
<div class="row">
    <div class="col-xs-9">
        <div class="col-xs-4">
            <img class="img-responsive" src={{ asset($movie->cover) }} width="230" height="345">
        </div>
        <div class="col-xs-8">
            <h3 style="margin:0px">
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
        <div class="panel panel-default">
            <div class="panel-body">
                {{ Form::open() }}
                    <div class="form-group">
                        {{ Form::text('cinema', $cinema, ['class' => 'form-control', 'disabled']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::select('schedule', $schedule, null, ['class' => 'form-control', 'placeholder' => 'Select a Schedule']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::selectRange('ticket', 1, 10, null, ['class' => 'form-control', 'placeholder' => 'Seat Quantity'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::submit('Purchase Ticket', ['class' => 'form-control btn btn-primary'])}}
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection