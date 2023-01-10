@extends('layouts.admin')

@section('content')
<div class="food graficons d-flex flex-column  w-full justify-content-center align-items-center">
    <form action="{{url('/updatechef',$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">name</label>
            <input type="text" placeholder="name" name="name" require value="{{$data->name}}">
        </div>
        <div>
            <label for="">old image</label>
            <img src="/chefsimage/{{$data->image}}" height="200px" width="200px" alt="">
            <input type="file" name='image' value="{{$data->image}}" require>
        </div>
        <div>
            <label for="">speciality</label>
            <input type="text" placeholder="speciality" name="speciality" require value="{{$data->speciality}} ">
            
        </div>
       
        <div>

            <input type="submit" value="save">
        </div>
    </form>
</div>
@endsection