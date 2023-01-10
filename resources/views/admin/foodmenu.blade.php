@extends('layouts.admin')

@section('content')
<div class="food graficons d-flex flex-column  w-full justify-content-center align-items-center">
    <h2 class="textTitle">Add new menu:</h2>
    <form action="{{url('/upload')}}" method="POST" enctype="multipart/form-data" class="d-flex flex-row mt-4 mb-4">
        @csrf
        <div>
            <div class="mb-4">
                <label for="">title</label>
                <input type="text" placeholder="title" name="title" require>
            </div>
            <div>
                <label for="">image</label>
                <input type="file" name='image' require>
            </div>
        </div>
        <div>
            <div class="mb-4">
                <label for="">price</label>
                <input type="text" placeholder="price" name="price" require>
            </div>
            <div>
                <label for="">description</label>
                <input type="text" placeholder="description" name="description" require>
            </div>
        </div>
        <div>

            <input type="submit" value="save">
        </div>
    </form>
    <div class="foodContainer">
        <table class="table table-borderless table table-striped  text-center">    
        <tr class="tableHeader header">
                <th class="text-white">Food name</th>
                <th class="text-white">price</th>
                <th class="text-white">description</th>
                <th class="text-white">image</th>
                <th class="text-white">delete</th>
                <th class="text-white">edit</th>
            </tr>
            @foreach ($data as $data )
            <tr>
                <td>{{$data->title}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->description}}</td>
                <td class="d-flex align-items-center justify-content-center ">
                    <div class="img" style="background-image:url('/foodimage/{{$data->image}}')">
                    </div>
                </td>
                <td><a href="{{url('/deletemenu',$data->id)}}" class="fw-bold">delete</a></td>
                <td><a href="{{url('/editmenu',$data->id)}}" class="fw-bold">edit</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection