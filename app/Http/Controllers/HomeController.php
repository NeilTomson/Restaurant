<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Food;
use App\Models\FoodChef;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('isUser')->only(['index','showCard','removeOrder','orderconfirm']);
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $food = food::all();
        $chef = FoodChef::all();
        return view('/users/home', compact('food', "chef"));
    }
    public function redirects()
    {
        $userType = Auth::user()->userType;
        if ($userType == "1") {
            return view("admin.index");
        } else {


            return redirect("/users/home");
        }
    }
    public function addcard(Request $request, $id)
    {

        if (Auth::id()) {
            $user_id = Auth::id();
            $food_id = $id;
            $quantity = $request->quantity;

            $card = new Card();
            $card->user_id = $user_id;
            $card->food_id = $food_id;
            $card->quantity = $quantity;
            $card->save();
            return redirect()->back();
        } else {
            return redirect("/login");
        }
    }
    public function showCard(Request $request, $id)
    {

        $data = card::where('user_id', $id)->join("food", "cards.food_id", '=', 'food.id')->get();
        $data2 = card::select("*")->where('user_id', '=', $id)->get();
        return view("users.showCard", compact('data', 'data2'));
    }
    public function removeOrder($id)
    {
        $data = card::find($id);
        $data->delete();

        return  redirect()->back();
    }
    public function orderconfirm(Request $request)
    {
        foreach ($request->foodname as $key => $foodname) {
            $data = new Order;
            $data->foodname = $foodname;
            $data->price = $request->price[$key];
            $data->quantity = $request->quantity[$key];
            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->save();
        }


        return  redirect()->back();
    }
}
