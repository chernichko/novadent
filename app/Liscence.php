<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liscence extends Model
{
    protected $table = 'liscences';

    protected $fillable = ['path', 'updated_at'];

    protected $hidden = ['created_at'];

    public static function saveLiscence($request)
    {
        if ($request->hasFile('file')) {
            $files = $request->file('file');

            foreach ($files as $file) {
                $dir = 'public/files/liscence';

                $filename = $file->getClientOriginalName();

                $filename = explode('.', $filename);

                $fileexp = array_pop($filename);

                $filename = General::translit($filename);

                $filename = implode(".", $filename) . time() . '.' . $fileexp;

                $path = $file->storeAs($dir, $filename);

                if (!empty($path)) {
                    $gallery = new Liscence();
                    $gallery->path = $filename;
                    $gallery->save();
                }
            }
        }
    }

    public static function delLiscece($request)
    {
        if (isset($request['delete_img'])) {
            Gallery::whereIn('id', $request['delete_img'])->delete();
        }
    }
}
