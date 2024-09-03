<?php

namespace App\services;

use App\Models\User;

class serviceUser
{
    public static function save($data ,$id=null)
    {

        //first methos
//        if($id==null){
//          User::query()->create($data);
//        }else{
//          user::query()->find($id)->update($data);
//        }

        //second method
    return
        User::query()->updateOrCreate([
            'id'=>$id

        ],$data);


    }

}
