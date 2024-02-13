<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    // function DemoAction():string{
    //     return "This is my first request-response";
    // }

    function DemoAction1(Request $request): array
    {
         $name=$request->name;
         $age=$request->age;
         $address=$request->input(key:'address');
         $postcode=$request->input(key:'postcode');
         $city=$request->header(key:'city');
       
         return array(
            'name' =>$name,
            'age' => $age,
            'address' => $address,
            'postcode' => $postcode,
            'city' => $city);
    }
}
