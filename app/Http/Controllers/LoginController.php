<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //page show login page for cutomer
    public function index(){
        return view('signup');
    }
    public function authenticate(Request $request) {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email',
            'password' => 'required',
        ]);
    
        if ($validator->passes()) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                 return view('form');
            } else {
                return redirect()->route('account.login')->with('error', 'Either email or Password is incorrect...');
            }
        } else {
            return redirect()->route('account.login')->withInput()->withErrors($validator);
        }
    }
    
    public function logout(){
        Auth::logout();
        return redirect()->route('account.login')->withInput();

    }

    public function register(Request $request){

          
    }
    public function processRegister(Request $request) {
        $validator = Validator::make($request->all(), [
            'name'     => 'required|string|min:3|max:255',
            'email'    => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
        ]);
    
        if ($validator->passes()) {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password); // Hash the password
            $user->role = 'customer';
            $user->save();
    
            return view('form'); // or redirect to another page like a welcome page
        } else {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    }
    
}
