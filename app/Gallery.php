<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;

class Gallery extends Model
{
    protected $table = 'gallery';
    protected $fillable = ['path', 'updated_at'];
    protected $hidden = ['created_at'];

    public static function saveGallery($request)
    {
        if ($request->hasFile('file')) {
            $files = $request->file('file');

            foreach ($files as $file) {
                $dir = 'storage/app/public/files/gallery/';
                $filename = $file->getClientOriginalName();
                $filename = explode('.', $filename);
                $fileexp = array_pop($filename);
                $filename = General::translit($filename);
                $filename = implode(".", $filename) . time() . '.' . $fileexp;
                $img = Image::make($file);
                $height = $img->height();
                $width = $img->width();
                if ($height >= 1500) {
                    $img->resize(1500, null, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                }
                if ($width >= 1500) {
                    $img->resize(null, 1500, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                }

                $img->save(__DIR__ . '/../' . $dir . $filename);

                $path = $filename;

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
