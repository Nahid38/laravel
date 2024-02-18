<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DemoController extends Controller
{

    function FileBinary(){
        $FilePath="upload/pic.png";
        return response()->file($FilePath);
    }
    function FileDownload(){
        $FilePath="upload/pic.png";
        return response()->download($FilePath);
    }
  
}
