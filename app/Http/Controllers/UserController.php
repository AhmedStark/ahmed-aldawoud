<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Sentinel;
class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = [
            'email'    => $request->email,
            'password' => $request->pwd,
        ];
        
        $emptyValidation=[
            'email' => "required",
            'pwd' => "required",
        ];
        $validRequest = Validator::make($request->all(),$emptyValidation);
        $emailValidation = array('email' => 'email|required'  );
        $validEmail = Validator::make($request->all(),$emailValidation);
        if($validEmail->fails()){
            return redirect('/login')->with(['response'=>'<div class="error--text">The email is not valid.</div>']);
        }
        elseif ($validRequest->fails()){
            return redirect('/login')->with(['response'=>'<div class="error--text">One of the fields was empty</dib>']);
        }else{
            if(!Sentinel::authenticate($credentials)){
                return redirect('/login')->with(['response'=>'<div class="error--text">User email or password was not right.</div>']);
            }
            Sentinel::authenticate($credentials);
            return redirect('/');
        }
    }


    public function logout(){
        Sentinel::logout();
        return redirect('');
    }


    public function loginView()
    {
        return view('login');
    }
}
