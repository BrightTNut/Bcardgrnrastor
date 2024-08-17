<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //

    
    public function index(){
        $user = auth()->user(); // Get the currently logged-in user
        return view('form', compact('user')); // Pass the user data to the view
    
        
    }
}
