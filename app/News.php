<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = ['name', 'short_description', 'description', 'code', 'image', 'updated_at'];

    protected $hidden = ['created_at'];

    public static function saveNews($request)
    {
        $data = $request->all();

        $path = '';

        if ($request->hasFile('preview')) {
            $file = $request->file('preview');
            $filename = $file->getClientOriginalName();

            $filename = explode('.', $filename);

            $fileexp = array_pop($filename);

            $filename = implode(".", $filename) . time() . '.' . $fileexp;

            $path = $request->file('preview')->storeAs('public/files/news', $filename);
        }

        if (isset($data['id'])) {
            $new = News::findOrFail($data['id']);
        } else {
            $new = new News;
        }

        $new->name = $data['name'];
        $new->code = $data['code'];
        if (!empty($path)) {
            $new->image = $filename;
        }

        if (isset($data['dltImg'])) {
            $new->image = '';
        }
//        $new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
        $new->description = htmlspecialchars($data['description']);
        $new->short_description = htmlspecialchars($data['short_description']);
        $new->active = isset($data['active']) ? 1 : 0;

        $new->save();
    }
}
