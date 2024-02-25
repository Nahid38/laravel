<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function page()
    {
        $data = ['msg' => 'This is messege'];
        return view('welcome', $data);
    }
}
