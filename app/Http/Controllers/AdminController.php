<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservations;
class AdminController extends Controller
{
    public function user(){
        $data = user::all();
        return view("admin.user",compact('data'));
    }



    public function deleteuser($id){
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deletefood($id){
        $data = food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function food(){
        $data = food::all();
        return view('admin.foodmenu',compact('data'));
    }
    public function updateview($id){
        $data = food::find($id);
        return view('admin.updateview',compact('data'));
    }

    public function foodupdate(Request $request,$id){
        $data = food::find($id);
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        if($request->image != null){
            $image=$request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('foodimgs',$imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect()->back();
    }

    public function foodupload(Request $request){
        $data = new food();
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;

        $image=$request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimgs',$imagename);
        $data->image = $imagename;
        $data->save();
        return redirect()->back();
    }

    public function reserve(Request $request){
        $data = new reservations();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;
        $data->guest = $request->guest;
        $data->save();
        return redirect()->back();
    }
    public function viewreserve(Request $request){
        $data = reservations::all();
        return view('admin.adminreservation',compact('data'));
    }

}
