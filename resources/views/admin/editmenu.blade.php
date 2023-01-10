@extends('layouts.admin')

@section('content')
<div class="food graficons d-flex flex-column  w-full justify-content-center align-items-center">
    <form action="{{url('/updatmenu',$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">title</label>
            <input type="text" placeholder="title" name="title" require value="{{$data->title}}">
        </div>
        <div>
            <label for="">old image</label>
            <img src="/foodimage/{{$data->image}}" height="200px" width="200px" alt="">
            <input type="file" name='image' value="{{$data->image}}" require>
        </div>
        <div>
            <label for="">price</label>
            <input type="text" placeholder="price" name="price" require value="{{$data->price}} ">
            
        </div>
        <div>
            <label for="">description</label>
            <input type="text" placeholder="description" name="description" require value="{{$data->description}}">
        </div>
        <div>

            <input type="submit" value="save">
        </div>
    </form>
</div>
@endsection