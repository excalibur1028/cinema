@extends('app')

@section('content')
<div class="col-xs-4">
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
                    <td><h5>Total Price</h5></td>
                    <td><h5>&#8369;{{ $ticket->price}}</h5></td>
                </tr>
            </tbody>
        </table>
    @endforeach
</div>
<div class="col-xs-6 col-xs-offset-2">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <td colspan="4"><h4 class="text-center">Purchase Details</h4></td>
            </tr>
            <tr class="text-center">
                <td>Movie</td>
                <td>Quantity</td>
                <td>Price</td>
                <td>Total</td>
            </tr>
            @foreach($tickets as $ticket)
            <tr>
                <td>{{ $ticket->movies->title}}</td>
                <td class="text-center">{{ $ticket->quantity }}</td>
                <td class="text-right">&#8369; {{ $ticket->movies->price}}</td>
                <td class="text-right">&#8369; {{ $ticket->price }}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="4" class="text-right"><b>Grand Total : &#8369; {{ $tickets->first()->getGrandTotal() }}</b></td>
            </tr>
        </tbody>
    </table>
</div>



@endsection
