<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = ['name', 'short_description', 'description', 'code', 'image', 'updated_at'];

    protected $hidden = ['created_at'];

    public static function saveArticle($request)
    {
        $data = $request->all();

        $path = '';

        if ($request->hasFile('preview')) {
            $file = $request->file('preview');
            $filename = $file->getClientOriginalName();
            $filename = explode('.', $filename);
            $fileexp = array_pop($filename);
            $filename = implode(".", $filename) . time() . '.' . $fileexp;
            $path = $request->file('preview')->storeAs('public/files/article', $filename);
        }

        if (isset($data['id'])) {
            $article = Article::findOrFail($data['id']);
        } else {
            $article = new Article();
        }

        $article->name = $data['name'];
        $article->code = $data['code'];
        if (!empty($path)) {
            $article->image = $filename;
        }

        if (isset($data['dltImg'])) {
            $article->image = '';
        }

        $article->description = htmlspecialchars($data['description']);
        $article->short_description = htmlspecialchars($data['short_description']);
        $article->active = isset($data['active']) ? 1 : 0;

        $article->save();
    }
}
