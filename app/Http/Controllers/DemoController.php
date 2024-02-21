<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DemoController extends Controller
{

    function SessionPut(Request $request):bool{
        $email=$request->email;
        $request->session()->put('userEmail');
        return true;
    }
  
    function SessionPull(Request $request):string{
        
        return $request->session()->pull('userEmail');
    }
    function SessionForget(Request $request):bool{
        
        $request->session()->forget('userEmail');
        return true;
    }
    function SessionFlush(Request $request):bool{
        
        $request->session()->flush();
        return true;
    }
  
}
