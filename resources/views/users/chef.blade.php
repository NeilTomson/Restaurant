<div class="chefContainer my-5">
    <h1 class="textTitle">Cheff data</h1>
    <div class="mainConainer">

        @foreach ($chef as $data )
        <div class="item">
            <img src="/chefsimage/{{$data->image}}" height="200px" width="350px" alt="">
            <p class="h4 fw-bold">{{$data->name}}</p>
            <p class="h5">{{$data->speciality}}</p>
        </div>
        @endforeach
    </div>
</div>