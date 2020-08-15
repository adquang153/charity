<?php 

namespace App\Helpers;
use Storage;

class Handler{

    public static function uploadFiles($images, $type){
        $extension = $images->extension();
        $pathFile = 'public/images/'. $type . '/' . time() . '.' . $extension;
        $file = Storage::put($pathFile, $images->__toString());
        dd($file);
    }

}

?>