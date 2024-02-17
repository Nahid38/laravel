<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    // function DemoAction():string{
    //     return "This is my first request-response";
    // }

    function DemoAction1(Request $request): JsonResponse
    {

        $code = 401;
        $content = array('name' => 'nahid');




        return response()->json($content,$code);
    }
}
