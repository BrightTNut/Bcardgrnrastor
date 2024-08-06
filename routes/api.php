<?php

use App\Http\Controllers\Authcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth',
],function($router){
    Route::post('/register',[Authcontroller::class,'register']);
    Route::post('/login',[Authcontroller::class,'login']);
    Route::post('/logout',[Authcontroller::class,'logout'])->middleware('auth:api');
    Route::post('/refresh',[Authcontroller::class,'refresh'])->middleware('auth:api');
    Route::post('/',[Authcontroller::class,'register'])->middleware('auth:api');

});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
