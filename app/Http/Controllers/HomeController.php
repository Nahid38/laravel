<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function page(Request $request)
    {
        
        $sum1=$request->num1;
        $sum2=$request->num2;
        $sum=$sum1+$sum2;
        $data = ['msg' => $sum];
        return view('welcome', $data);
    }
}
