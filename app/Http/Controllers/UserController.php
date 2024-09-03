<?php

namespace App\Http\Controllers;

use App\actions\ImageModelSave;
use App\Http\Requests\RegisterRequest;
use App\services\serviceUser;
use Illuminate\Http\Request;
use App\Models\User;
use App\traits\upload_image;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    use upload_image;
    public  function index()

    {
        $data=request()->all();
        if(request()->filled('name')){
            $data=User::query()->where('name','LIKE','%'.request('name').'%')
                ->get();
            return $data;
        }else{
            echo 'no data';
        }

    }
    public  function profile($id){
        $user=User::query()->find($id);
        if($user){
            return $user;
        }
        echo  'no user like this ';
    }
    public function store(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['type'] = 'client';

        $file = $request->file('image');
        if ($file == null) {
            $image_name = 'default.jpg';
        } else {
            $image_name = $this->upload($file, 'users');
        }

        // Save the user data
        $user = serviceUser::save($data);

        // Save the image data
        ImageModelSave::make($user->id, 'Users', $image_name);

        // Log in the user
//        Auth::login($user);

        return redirect()->to('/')->with('register', 'You have registered successfully');
    }



}
