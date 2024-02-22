<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DemoController extends Controller
{


    function demoAction1(Request $request):array{
        return $request->header();
    }

    
}
