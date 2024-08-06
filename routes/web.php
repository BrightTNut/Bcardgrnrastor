<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/display-image', function () {
    return view('image');
});
Route::get('/sign', function () {
    return view('signup');
});
Route::get('/templates', function () {
    return view('Templates/templates');
});
Route::get('/template1', function () {
    return view('Templates/templates1');
});
Route::get('/form', function () {
    return view('form');
});
Route::post('/addUser',[UserController::class,'addUsers']);
Route::get('/temp',[UserController::class,'temp']);

Route::get('/social', function () {
    return view('social');
});