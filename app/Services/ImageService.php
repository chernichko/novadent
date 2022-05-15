<?php
namespace App\Services;

class ImageService{

    public function saveImage($imgPath,$request){

        $file = $request->file('preview');
        $filename = $file->getClientOriginalName();
        $filename = explode('.', $filename);
        $fileexp = array_pop($filename);
        $filename = implode(".", $filename) . time() . '.' . $fileexp;
        $path = $request->file('preview')->storeAs($imgPath, $filename);

        return ['filename' => $filename, 'path' => $path];
    }


}
