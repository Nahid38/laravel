<?php

use App\Http\Controllers\DemoController;
use App\Http\Middleware\demo;
use Illuminate\Support\Facades\Route;


Route::middleware(['demos'])->group(function (){
    Route::get("/hello1/{key}", [DemoController::class,'demoAction1']);
    Route::get("/hello2/{key}", [DemoController::class,'demoAction2']);
    Route::get("/hello3/{key}", [DemoController::class,'demoAction3']);
    Route::get("/hello4/{key}", [DemoController::class,'demoAction4']);
});
