<?php

namespace App;

//use app\components\imagine\Image;
//use app\components\imagine\Image\Box;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;

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

//            dd($files);

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
                if($height >= 1500) {
                    $img->resize(1500, null, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                }
                if($width >= 1500) {
                    $img->resize(null, 1500, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                }
//
              $img->save( __DIR__ . '/../' . $dir  . $filename);


                $dir = 'storage/app/public/files/gallery/thumb/';
                $img = Image::make($file);

                $height = $img->height();
                $width = $img->width();
                if($height >= 150) {
                    $img->resize(150, null, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                }
                if($width >= 250) {
                    $img->resize(null, 250, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                }
//
                $img->save( __DIR__ . '/../' . $dir  . $filename, 100);

                $path = $filename;

//                dd($path);

//                $filename = str_random(20) .'.' . $$file->getClientOriginalExtension() ?: 'png';
//                $img = ImageInt::make($file);
//                $img->resize(200,200)->save($path . $filename);
//                Image::create(['title' => $request->title, 'img' => $filename]);

//                $path =$file->storeAs($dir, $filename);

//                $img = Image::make($file)->resize(200,200);
//                $img->save($dir.'/thumb/' . $filename);

//                Image::make($file->getRealPath())->resize(200, 200)->save($dir.'/thumb/'.$filename);



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
