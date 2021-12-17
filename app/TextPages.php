<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TextPages extends Model
{
    protected $table = 'text_pages';
    protected $fillable = ['name', 'code', 'description', 'updated_at'];

    public static function savePage($data)
    {
        if (isset($data['id'])) {
            $page = TextPages::findOrFail($data['id']);
        } else {
            $page = new TextPages;
        }

        $page->name = $data['name'];
        $page->code = $data['code'];
        $page->description = $data['description'];
        $page->active = isset($data['active']) ? 1 : 0;
        $page->save();
    }
}
