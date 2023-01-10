@extends('layouts.app')

@section('content')
<div class="d-flex flex-column container-fluid ">
    @include('users/index')
    @include('users/foodshow')
    @include('users/reservation')
    @include('users/chef')
    <footer class="footer">
        &#169 Toaso Albert Attila
    </footer>


</div>
@endsection