<?php

use App\Http\Controllers\DemoController;
use App\Http\Middleware\demo;
use Illuminate\Support\Facades\Route;



Route::get('/hello', [DemoController::class,'demoAction'])->middleware([demo::class]);
