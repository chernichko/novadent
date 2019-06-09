<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';

    protected $fillable = ['path','updated_at'];

    protected $hidden = ['created_at'];

    public static function saveGallery($request)
    {

        $data = $request->all();

        $path = '';

        if ($request->hasFile('file')) {
            $files = $request->file('file');

            foreach ($files as $file) {

                $filename = $file->getClientOriginalName();

                $filename = explode('.', $filename);

                $fileexp = array_pop($filename);

                $filename = General::translit($filename);

                $filename = implode(".", $filename) . time() . '.' . $fileexp;

                $path = $file->storeAs('public/files/gallery', $filename);

                if (!empty($path)) {
                    $gallery = new Gallery();
                    $gallery->path = $filename;
                    $gallery->save();

                }
            }
        }


    }
}
