<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{

    public  function __construct(){
        $this->middleware('auth')->only('logout');
    }
    public  function logout(){
        if(auth()->check()){
            auth()->logout();
        }
        return redirect()->to('/login');

    }
}
