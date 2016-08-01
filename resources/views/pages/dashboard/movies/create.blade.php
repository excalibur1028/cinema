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
                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                        {!! Form::label('title', 'Title') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('title'))<span class="help-block"><strong>{{ $errors->first('title') }}</strong></span>@endif
                    </div>
                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        {!! Form::label('description', 'Description') !!}
                        {!! Form::textarea('description', null, ['class' => 'form-control', 'size' => '30x5']) !!}
                        @if ($errors->has('description'))<span class="help-block"><strong>{{ $errors->first('description') }}</strong></span>@endif
                    </div>
                    <div class="form-group{{ $errors->has('genre') ? ' has-error' : '' }}">
                        {!! Form::label('genre', 'Genre') !!}
                        {!! Form::text('genre', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('genre'))<span class="help-block"><strong>{{ $errors->first('genre') }}</strong></span>@endif
                    </div>
                    <div class="form-group{{ $errors->has('cast') ? ' has-error' : '' }}">
                        {!! Form::label('cast', 'Cast') !!}
                        {!! Form::text('cast', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('cast'))<span class="help-block"><strong>{{ $errors->first('cast') }}</strong></span>@endif
                    </div>
                    <div class="form-group{{ $errors->has('room_id') ? ' has-error' : '' }}">
                        {!! Form::label('room_id', 'Cinema Room') !!}
                        {!! Form::select('room_id', $rooms, null, ['class' => 'form-control', 'placeholder' => 'Select Cinema']) !!}
                        @if ($errors->has('room_id'))<span class="help-block"><strong>{{ $errors->first('room_id') }}</strong></span>@endif
                    </div>
                    <div class="form-group{{ $errors->has('release_date') ? ' has-error' : '' }}">
                        {!! Form::label('release_date', 'Release Date') !!}
                        {!! Form::date('release_date', date('Y-m-d'), ['class' => 'form-control']) !!}
                        @if ($errors->has('release_date'))<span class="help-block"><strong>{{ $errors->first('release_date') }}</strong></span>@endif
                    </div>
                    <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                        {!! Form::label('price', 'Movie Price') !!}
                        {!! Form::number('price', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('price'))<span class="help-block"><strong>{{ $errors->first('price') }}</strong></span>@endif
                    </div>
                    {!! Form::submit('Create', ['class' => 'btn btn-primary', 'style' => 'float:right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
