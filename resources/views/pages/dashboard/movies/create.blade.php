@extends('app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                Dashboard
            </div>
            <div class="panel-body">
                {!! Form::open(['route' => 'dashboard.movie.store']) !!}
                    <div class="form-group">
                        {{ Form::label('title', 'Title') }}
                        {{ Form::text('title', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('description', 'Description') }}
                        {{ Form::textarea('description', null, ['class' => 'form-control', 'size' => '30x5']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('genre', 'Genre') }}
                        {{ Form::text('genre', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('cast', 'Cast') }}
                        {{ Form::text('cast', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('room_id', 'Cinema Room') }}
                        {{ Form::select('room_id', $rooms, null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('release_date', 'Release Date') }}
                        {{ Form::date('release_date', date('Y-m-d'), ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::number('price', null, ['class' => 'form-control'])}}
                    </div>
                    {!! Form::submit('Create', ['class' => 'btn btn-primary', 'style' => 'float:right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
