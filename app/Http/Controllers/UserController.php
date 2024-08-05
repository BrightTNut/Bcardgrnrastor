<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function addUsers(Request $request){
        echo $request->firstname;
        echo "<br>";
        echo $request->lastname;
        echo "<br>";
        echo $request->position;
        echo "<br>";
        echo $request->about;
        echo "<br>";
        echo $request->phone;
        echo "<br>";
        echo $request->facebook;
        echo "<br>";
        echo $request->twitter;
        echo "<br>";
        echo $request->instagram;
        echo "<br>";
        echo $request->linkedin;
        echo "<br>";
        echo $request->photo;
        echo "<br>";
        echo $request->logo;
        echo "<br>";
        
    }
}
