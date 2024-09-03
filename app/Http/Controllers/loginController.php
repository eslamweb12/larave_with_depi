<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public  function  index()
    {
        return view('login');

    }
    public  function  login(LoginRequest $request)
    {
        $data=$request->validated();
        if(auth()->attempt($data)){
            return redirect()->to('/');
        }else{
            return redirect()->back()->withe('error','email or password has aprobelm');
        }


    }
}
