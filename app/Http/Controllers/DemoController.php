<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    // function DemoAction():string{
    //     return "This is my first request-response";
    // }

    function DemoAction1(Request $request):array
    {

   

        return $request->getAcceptableContentTypes();
        
    }
}
