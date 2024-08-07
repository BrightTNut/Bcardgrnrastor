<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=> 'account'],function(){
    Route::group(['middleware'=>'guest'],function(){
     
Route::get('sign', [LoginController::class, 'index'])->name('account.login');
Route::post('authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
//for registring user
Route::post('signup', [LoginController::class, 'processRegister'])->name('account.processRegister');

    });
    Route::group(['middleware'=>'auth'],function(){
Route::get('logout', [LoginController::class,'logout'])->name('account.logout');

Route::get('form', [FormController::class,'index'])->name('account.form');
//submitting form 


Route::get('/form', function () {
    return view('form');
});

Route::get('/social', function () {
    return view('social');
});
    });
});

Route::get('/display-image', function () {
    return view('image');
});
Route::put('/account/update', [UserController::class, 'update'])->name('account.update');
Route::get('/account/templates1', [UserController::class, 'getdata'])->name('account.template1');

Route::get('/templates', function () {
    return view('Templates/templates');
});
Route::get('template1', function () {
    return view('Templates/templates1');
});