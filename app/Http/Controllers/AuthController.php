<?php

namespace App\Http\Controllers;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Validator;

class AuthController extends BaseController
{
    //

    public function register(Request $request){
        $validator = Validator::make($request->all,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'c_password' => 'required|same:password',

        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.',$validator->errors());
        }
    }

    public function login(){}


    public function logout(){}


    public function refresh(){}
    public function profile(){}


  

}
