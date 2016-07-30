@extends('app')

@section('content')
<div class="col-xs-10 col-xs-offset-1">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <td colspan="7"><h4 class="text-center">Purchase History</h4></td>
            </tr>
            <tr class="text-center">
                <td>Movie Name</td>
                <td>Schedule</td>
                <td>Cinema</td>
                <td>Movie Price</td>
                <td>Quantity</td>
                <td>Total Price</td>
                <td>Purchased Date</td>
            </tr>
            @foreach($tickets as $ticket)
            <tr class="text-center">
                <td>{{ $ticket->movies->title }}</td>
                <td>{{ $ticket->schedule->toDayDateTimeString() }}</td>
                <td>{{ $ticket->cinema }}</td>
                <td>&#8369; {{ $ticket->movies->price }}</td>
                <td>{{ $ticket->quantity }}</td>
                <td>&#8369; {{ $ticket->price }}</td>
                <td>{{ $ticket->created_at->diffForHumans() }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
