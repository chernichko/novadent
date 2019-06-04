<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $table = 'reviews';

    protected $fillable = ['name','phone','text','updated_at'];

    protected $hidden = ['created_at'];

    public static function saveReviewe($data){

        $review = new Reviews;

        $review->name = $data['name'];
        $review->phone = $data['phone'];
        $review->text = $data['text'];

        return $review->save();
    }
}
