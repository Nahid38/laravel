<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\VController;
use App\Http\Middleware\demo;
use Illuminate\Support\Facades\Route;



    Route::get("/hello", [DemoController::class,'demoAction']);
    Route::get("/video", VController::class);
