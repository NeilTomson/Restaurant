@extends('layouts.admin')

@section('content')
<div class="mt-4">
    <form action="{{url('/search')}}" method="get">
      @csrf
      <input type="text" name='search' placeholder="search">
      <input type="submit" class='mt-1' id="searchInput" value='search'>
    </form>
  </div>
<div class="order graficons d-flex flex-column  w-full justify-content-center align-items-center ">
  <h2 class="textTitle ">Orders</h2>
  <div class="orderContainer">
  <table class="table table-borderless table table-striped  text-center">
    <tr class="tableHeader header">
      <th class="text-white">name</th>
      <th class="text-white">phone</th>
      <th class="text-white">address</th>
      <th class="text-white">foodname</th>
      <th class="text-white">price</th>
      <th class="text-white">quanitit</th>
      <th class="text-white">total price</th>
      <th class="text-white">action</th>
    </tr>
    @foreach($data as $data)
    <tr>
      <td>{{$data->name}}</td>
      <td>{{$data->phone}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->foodname}}</td>
      <td>{{$data->price}}</td>
      <td>{{$data->quantity}}</td>
      <td>{{$data->price * $data->quantity}}$</td>
      <td><a href="{{url('/deleteorders',$data->id)}}">delete</a></td>
    </tr>
    @endforeach
  </table>

</div>
</div>
@endsection