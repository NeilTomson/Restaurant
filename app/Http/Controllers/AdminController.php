<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\FoodChef;
use App\Models\Order;
use App\Models\Reservation;

class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('isAdmin')->only(['updatmenu', 'editchef', 'search', 'orderShow', 'updateChef', 'editmenu', 'deletemenu', 'user', 'deleteuser', 'deletemenu', 'foodmenu', 'cheff', 'showreservation', 'upload', 'uploadchef']);
    // }
    // user

    public function user()
    {
        $data = user::all();
        return view("admin.user", compact('data'));
    }
    public function deleteuser($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    //menu 
    public function foodmenu()
    {
        $data = food::all();
        return view("admin.foodmenu", compact('data'));
    }
    public function uploadmenu(Request $request)
    {
        $data = new food;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->image;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('foodimage', $imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect()->back();
    }
    public function deletemenu($id)
    {
        $data = food::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function editmenu($id)
    {
        $data = food::find($id);
        return view('admin.editmenu', compact("data"));
    }
    public function updatemenu(Request $request, $id)
    {
        $data = food::find($id);
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->image;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('foodimage', $imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect('/foodmenu');
    }
    // cheff
    public function cheff()
    {
        $chef = FoodChef::all();
        return view("admin.cheff", compact('chef'));
    }
    public function uploadchef(Request $request)
    {
        $data = new FoodChef;
        $data->name = $request->name;
        $data->speciality = $request->speciality;
        if ($request->hasFile('image')) {
            $image = $request->image;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('chefsimage', $imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect()->back();
    }
    public function editchef($id)
    {
        $data = FoodChef::find($id);
        return view('admin.editchef', compact("data"));
    }
    public function deleteChef($id)
    {
        $data = FoodChef::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updateChef(Request $request, $id)
    {
        $data = FoodChef::find($id);
        $data->name = $request->name;
        $data->speciality = $request->speciality;
        if ($request->hasFile('image')) {
            $image = $request->image;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('chefsimage', $imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect('/foodmenu');
    }
    // reservation
    public function showreservation()
    {
        $data = reservation::all();
        return view("admin.reservation", compact('data'));
    }
    public function deletereservation($id)
    {
        $data = reservation::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function reservation(Request $request)
    {
        $data = new reservation;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->messagge = $request->messagge;
        $data->save();
        return redirect('users/home');
    }
// order
    public function orderShow()
    {
        $data = order::all();
        return view('admin.showOrder', compact('data'));
    }
    public function search(Request $request)
    {
        $search = $request->search;
        $data = Order::where('name', 'Like', '%' . $search . '%')->orWhere('foodname', 'Like', '%' . $search . '%')->get();
        return view('admin.showOrder', compact('data'));
    }
    public function deleteorders($id)
    {
        $data = Order::find($id);
        $data->delete();
        return redirect()->back();
    }
}
