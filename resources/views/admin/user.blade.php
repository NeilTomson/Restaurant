@extends('layouts.admin')

@section('content')
<div class="user graficons d-flex flex-column  w-full justify-content-center align-items-center">
    <h1 class="mb-5 textTitle">user tbale </h1>
    <div class="userContainer">
        <table class="table table-borderless table table-striped text-aling " >
            <tr class="tableHeader header">
                <th class="text-white">name</th>
                <th class="text-white">email</th>
                <th class="text-white">action</th>
            </tr>
            @foreach( $data as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                @if($data->userType == "0")
                <td>
                    <a href="{{url('/deleteuser',$data->id)}}">delete</a>
                </td>
                @else
                <td>not allowed</td>
                @endif
            </tr>

            @endforeach
        </table>

    </div>
</div>
@endsection