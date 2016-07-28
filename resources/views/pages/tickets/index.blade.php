@extends('app')

@section('content')
<div class="col-xs-4 col-xs-offset-3">
@foreach($tickets as $ticket)
    <table class="table table-bordered">
        <tbody>
            <tr>
                <td colspan="2"><h4 class="text-center">Movie Details</h4></td>
            </tr>
            <tr>
                <td><h5>Movie</h5></td>
                <td><h5>{{ $ticket->movies->title }}</h5></td>
            </tr>
            <tr>
                <td><h5>Cinema</h5></td>
                <td><h5>{{ $ticket->movies->rooms->name }}</h5></td>
            </tr>
            <tr>
                <td><h5>Date & Time</h5></td>
                <td><h5>{{ $ticket->schedule->toDayDateTimeString() }}</h5></td>
            </tr>
            <tr>
                <td><h5>Seat Quantity</h5></td>
                <td><h5>{{ $ticket->quantity }}</h5></td>
            </tr>
            <tr>
                <td><h5>Price</h5></td>
                <td><h5>&#8369;{{ $ticket->movies->price}}</h5></td>
            </tr>
        </tbody>
    </table>

@endforeach
</div>



@endsection
