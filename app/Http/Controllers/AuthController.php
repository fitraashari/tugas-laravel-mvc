<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    function register(){
        return view('register');
    }
    function welcome(Request $request){
        $fname = $request['fname'];
        $lname = $request['lname'];
        return view('welcome_new',['fname'=>$fname,'lname'=>$lname]);
    }
}
