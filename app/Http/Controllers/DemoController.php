<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DemoController extends Controller
{


    function demoAction1():string{
        return "hello1";
    }
    function demoAction2():string{
        return "hello2";
    }
    function demoAction3():string{
        return "hello3";
    }
    function demoAction4():string{
        return "hello4";
    }
    
}
