<?php

use App\Http\Controllers\DemoController;
use App\Http\Middleware\demo;
use Illuminate\Support\Facades\Route;



    Route::get("/hello1", [DemoController::class,'demoAction1'])->middleware([demo::class]);
