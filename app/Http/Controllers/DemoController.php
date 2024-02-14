<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    // function DemoAction():string{
    //     return "This is my first request-response";
    // }

    function DemoAction1(Request $request):bool
    {

        $photoFile=$request->file('photo');
        $photoFile->storeAs('upload',$photoFile->getClientOriginalName());
           // $photoFile->move(public_path('upload'), $fileName);
        $photoFile->move(public_path('upload'),$photoFile->getClientOriginalName());


        return true;
        
    }
}
