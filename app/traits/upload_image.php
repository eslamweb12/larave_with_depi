<?php

namespace App\traits;

use function PHPUnit\Framework\isNan;

trait upload_image
{
    public function upload($file, $foldername)
    {
        // Check if the file is not null
        if ($file !== null) {
            $validExtension = ['jpg', 'jpeg', 'png', 'svg', 'gif'];

            if (in_array($file->getClientOriginalExtension(), $validExtension)) {
                $name = time().rand(0, 9999999999).'_image.'. $file->getClientOriginalExtension();

                // Move the file to the specified folder
                $file->move(public_path('/images/'.$foldername), $name);

                return $foldername.'/'.$name;
            } else {
                return false; // Invalid file extension
            }
        } else {
            return false; // File is null
        }
    }


}
