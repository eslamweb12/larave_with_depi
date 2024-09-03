<?php

namespace App\Http\Controllers;

use App\Http\Resources\userResource;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $users=User::query()->with('image')->orderBy(  'id','DESC' )->get();
//        dd($users);
        $data=userResource::collection($users);
             return $data;
//        return view('admin.users',compact('data'));

    }
}
