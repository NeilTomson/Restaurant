@extends('layouts.admin')

@section('content')
<div class="chef graficons d-flex flex-column  w-full justify-content-center align-items-center">
   <h2 class="textTitle mb-4">Cheff page</h2>
   <form action="{{url('uploadchef')}}" method="POST" enctype="multipart/form-data" class=" d-flex align-items-center  flex-column">
      @csrf
      <div class="d-flex flex-row">
         <div class="mx-2">
            <label for="">name</label>
            <input type="text" placeholder="name" name="name" require>
         </div>
         <div class="mx-2">
            <label for="">speciality</label>
            <input type="text" placeholder="speciality" name="speciality" require>
         </div>
      </div>
      <div class="mt-4">

         <div>
            <label for="">image</label>
            <input type="file" name='image' require>
         </div>
      </div>
      <div class="mt-2  ">
         <input type="submit" class="formbutton" value="save">
      </div>
   </form>

   <div class="mt-4 chefContainer">
      <table class="table table-borderless table table-striped  text-center">
         <tr class="tableHeader header">
            <th>Chef name</th>
            <th>speciality</th>
            <th>image</th>
            <th>delete</th>
            <th>edit</th>
         </tr>
         @foreach ($chef as $data )
         <tr >
            <td>{{$data->name}}</td>
            <td>{{$data->speciality}}</td>
            <td class="d-flex align-items-center justify-content-center ">
               <div class="img" style="background-image:url('/chefsimage/{{$data->image}}')" >
               </div>
            </td>
            <td><a href="{{url('/deletechef',$data->id)}}">delete</a></td>
            <td><a href="{{url('/editchef',$data->id)}}">edit</a></td>
         </tr>
         @endforeach
      </table>
   </div>
</div>
@endsection