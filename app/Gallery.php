<?php

namespace App;

use app\components\imagine\Image;
use app\components\imagine\Image\Box;
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

            dd($files);

            foreach ($files as $file) {

                $dir = 'public/files/gallery';

                $filename = $file->getClientOriginalName();

                $filename = explode('.', $filename);

                $fileexp = array_pop($filename);

                $filename = General::translit($filename);

                $filename = implode(".", $filename) . time() . '.' . $fileexp;

//                $photo = Image::getImagine()->open($dir . $filename);
//                $photo->thumbnail(new Box(1500, 1500))->save($dir . $filename, ['quality' => 90]);

//                $img = Image::make('public/foo.jpg')->resize(300, 200);

                $path = $file->storeAs($dir, $filename);

                if (!empty($path)) {
                    $gallery = new Gallery();
                    $gallery->path = $filename;
                    $gallery->save();

                }
            }
        }


    }

    public static function delGallery($request)
    {

        if (isset($request['delete_img'])) {

            Gallery::whereIn('id', $request['delete_img'])->delete();
        }


    }
}