<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    function addUsers(Request $request){
        $user= new User();
        $user->firstname=$request->firstname;
        $user->lastname=$request->lastname;
        $user->role=$request->role;
        $user->about=$request->about;
        $user->phone=$request->phone;
        $user->facebook=$request->facebook;
        $user->twitter=$request->twitter;
        $user->instagram=$request->instagram;
        $user->linkedin=$request->linkedin;
        $user->save();
        if($user){
            return "New User Added";
        }else{
            return "opration Failed";

        }
        // $user->photo=$request->photo;
        // $user->logo=$request->logo;
    }
    function temp(){
         $user = User::all();
         return view('user',['user'=>$user]);
    }
}
