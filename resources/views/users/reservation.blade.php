<div class='reservationContainer d-flex  mt-4'>
    <div>
        <h1 class="textTitle my-4">Reservation</h1>
    </div>
    <div class="reservationContent ">
        <div class="image">
        </div>
        <div>
            <form action="{{url('reservation')}}" method="POST" enctype="" class="form">
                @csrf
                <div class="reservationTitle">
                    <h2 class="my-4">reservaton a table</h2>
                </div>
                <div class="col">
                    <label for="">name</label>
                    <input type="text" placeholder="name" name="name" require>
                </div>
                <div class="col">
                    <label for="">email</label>
                    <input type="text" name='email' placeholder="email" require>
                </div>
                <div class="col">
                    <label for="">phone</label>
                    <input type="text" placeholder="phone" name="phone" require>
                </div>
                <div class="col">
                    <label for="">guest</label>
                    <input type="text" placeholder="guest" name="guest" require>
                </div>
                <div class="col">
                    <label for="">date</label>
                    <input type="text" placeholder="date" name="date" require>
                </div>
                <div class="col">
                    <label for="">time</label>
                    <input type="text" placeholder="time" name="time" require>
                </div>
                <div class="colcolumn">
                    <div class="messagge d-flex flex-column">
                        <label for="">messagge</label>
                        <textarea placeholder="messagge" name="messagge" rows="4" cols="50" require></textarea>
                    </div>
                    <div class="mt-4 submitbutton">
                        <input type="submit" class="button" value="save">
                    </div>

                </div>
            </form>
        </div>
    </div>

</div>