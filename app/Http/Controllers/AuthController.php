<?php

namespace App\Http\Controllers;
use App\Http\Controllers\BaseController;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;

class AuthController extends BaseController
{
    //

    public function register(Request $request){
        $validator = Validator::make($request->all(),[
           'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',

        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.',$validator->errors());
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        $success['user'] = $user;
        return $this->sendResponse($success,'User register successfully...');
    }

    public function login(){
        $credetials = request(['email','password']);
        if(! $token = auth()->attempt($credetials)){
            return $this->sendError('Unathorized.',['error'=>'UnAthorized']);
        }

        $success = $this->responseWithToken($token);
        return $this->sendResponse($success,'User login successFully...');
    }


   

    public function refresh(){
        $success = $this->responseWithToken(auth()->refresh());
        return $this->sendResponse($success,'Refesh of Token done successfully.....');
    }
    public function profile(){
        $success = auth()->user();

        return $this->sendResponse($success,'Profile fetch successfully...');
    }

    public function logout(){
        $success = Auth()->logout();
        return $this->sendResponse($success,'Successfully Logout......');
    }


  protected function responseWithToken($token){
    return [
        'access_token' => $token,
        'token_type' => 'bearer',
        'expires_in' => auth()->factory()->getTTL() * 60,


    ];
  }

}
