<div id="menu" class="foodContainer d-flex">
    <h1 class="textTitle">Our menu</h1>
    <div class="menuContainer mb-5">
        @foreach ($food as $data )

        <form action="{{url('/addcard',$data->id)}}" method="post" class="form">
            @csrf
            
                <div class="text">
                    <p class="h3 text-capitalize">{{$data->title}}</p>
                    <p class="h4 mt-1 text-capitalize">{{$data->price}}$</p>
                    <p class="h3 mt-3 text-capitalize">{{$data->description}}</p>
                </div>
                <img class="img" src="/foodimage/{{$data->image}}" alt="">
   

            <div class="mt-2 button ">
                <input type="number" class="mx-3" name="quantity" min="1" value="1"  style="width: 80px;">
                <input type="submit" class="submit" value="add card">
            </div>
        </form>

        @endforeach
    </div>

</div>