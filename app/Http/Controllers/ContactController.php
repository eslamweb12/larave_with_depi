<?php

namespace App\Http\Controllers;

use App\Http\Requests\formRequest;
use App\Http\Resources\ContactResource;
use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public  function show(){



        return view('contact');
    }

    public function save(formRequest $request){
        //request methods
        contact::query()->create(
            $request->validated()


        );

        return redirect()->back()->with('message','you questetion added successfully');


    }
    public  function index(){
        $data=contact::query()->orderBy(
            'id','DESC')->get();
        return ContactResource::collection($data);
    }

}
