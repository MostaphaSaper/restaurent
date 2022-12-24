<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
class UserController extends Controller
{
    public function review(Request $request){
        $data = new Review();
        $data->question1 = $request->q1;
        $data->question2 = $request->q2;
        $data->question3 = $request->q3;
        $data->question4 = $request->q4;
        $data->question5 = $request->q5;
        $data->phone = $request->phone;
        $data->review = $request->review;
        $data->save();
        return redirect()->back();
    }
}
