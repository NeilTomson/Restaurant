@extends('layouts.admin')

@section('content')
<div class="reservation graficons d-flex flex-column  w-full justify-content-center align-items-center">

    <h2 class="textTitle mb-4">Reservation</h2>
    <div class="reservationContainer">
        <table class="table table-borderless table table-striped text-center">
            <tr class="tableHeader header">
                <th class="text-white">Name</th>
                <th class="text-white">Email</th>
                <th class="text-white">Phone</th>
                <th class="text-white">Date</th>
                <th class="text-white">Time</th>
                <th class="text-white">Message</th>
                <th class="text-white">action</th>
            </tr>
            @foreach($data as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->date}}</td>
                <td>{{$data->time}}</td>
                <td>{{$data->messagge}}</td>
                <td><a href="{{url('/deletereservation',$data->id)}}">Delete</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection