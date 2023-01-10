@extends('layouts.app')

@section('content')
<div class="user d-flex flex-column ">
    <div class="userContainer">
        <h1 class="usertitle">Your oder:</h1>
        <form action="{{url('/orderConfirm')}}" method="POST">
            @csrf
            <div class="d-flex flex-row">
                <table class="table table-borderless table table-striped  text-center mainform">
                    <tr class="tableHeader header">
                        <th class="text-white fs-5">food name</th>
                        <th class="text-white fs-5">qunatity</th>
                        <th class="text-white fs-5">pirce</th>
                    </tr>
                    @foreach ($data as $data )
                    <tr>
                        <td>
                            <input type="text" name='foodname[]' hidden value="{{$data->title}}">
                            {{$data->title}}
                        </td>
                        <td>
                            <input type="text" name='price[]' hidden value="{{$data->price}}">
                            {{$data->price}} $
                        </td>
                        <td>
                            <input type="text" name='quantity[]' hidden value="{{$data->quantity}}">
                            {{$data->quantity}}
                        </td>
                    </tr>
                    @endforeach
                </table>
                <table class="table table-borderless table table-striped  text-center deleteform">
                    <tr class="tableHeader header">
                        <th class="text-white fs-5">delete</th>
                    </tr>
                    @foreach ($data2 as $data2 )
                    <tr>
                        <td><a href="{{url('/removeOrder',$data2->id)}}">delete</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="d-flex flex-row justify-content-around">
                <div>
                    <label for="">name</label>
                    <input type="text" name="name" placeholder="name">
                </div>
                <div>
                    <label for="">phone</label>
                    <input type="text" name="phone" placeholder="phone">
                </div>
                <div>
                    <label for="">address</label>
                    <input type="text" name="address" placeholder="address">
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <input type="submit" class="submitButton" value="submit">
            </div>
        </form>
    </div>

</div>
@endsection