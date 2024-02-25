<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function page(Request $request)
    {
        
       $user=[
        ["fname"=>"Hablu","lname"=>"khan"],
        ["fname"=>"Kablu","lname"=>"Chowdhury"],
        ["fname"=>"Tablu","lname"=>"Hasan"]
       ];
       return view('welcome',['users'=>$user]);
    }


}
