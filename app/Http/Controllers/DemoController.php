<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DemoController extends Controller
{


    function __construct()
    {
        $this->middleware('demos');
    }
    function demoAction(Request $request):array{
        return $request->header();
    }
}