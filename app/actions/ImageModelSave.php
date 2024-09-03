<?php

namespace App\actions;

use App\Models\image;

class ImageModelSave
{
    public static function make($id,$model_name,$file_name)
    {
        image::query()->create([
            'imageable_id' => $id,
            'imageable_type' => 'App\Models\\'.$model_name,
            'name' => $file_name,

        ]);

    }

}
