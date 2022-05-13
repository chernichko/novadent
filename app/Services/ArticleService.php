<?php

namespace App\Services;

use App\Article;

class ArticleService extends BaseServices {

    protected $article;
    protected $imgPath = 'public/files/article';

    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    public function all(){
        return $this->article->all();
    }

    public function save($request){

        if($request->hasFile('preview')){

            $file = parent::saveImage($this->imgPath, $request);

            if (!empty($file['path'])) {
                $this->article->image = $file['filename'];
            }
        }

        if (isset($data['dltImg'])) {
            $this->article->image = '';
        }

        $data = $request->all();

        $this->article->name = $data['name'];
        $this->article->code = $data['code'];
        $this->article->description = htmlspecialchars($data['description']);
        $this->article->short_description = htmlspecialchars($data['short_description']);
        $this->article->active = isset($data['active']) ? 1 : 0;

        $this->article->save();
    }

}
