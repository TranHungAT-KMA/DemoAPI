<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    //
    public function getLogin(){
    	return view('login');
    }
    public function postLogin(Request $request){
    	dd($request->all());

    }
}
