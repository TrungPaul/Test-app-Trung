<?php

namespace App\Repositories;

class UploadImageRepository
{
    protected  $path = 'images/';
    public function uploadImage($image)
    {
        $extension = $image->getClientOriginalExtension();
        $file_name = time().'-'.rand(1,100).'.'.$extension;

        return asset($image->move($this->path, $file_name));
    }
}
