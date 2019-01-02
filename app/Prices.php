<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prices extends Model
{
    protected $table = 'services';

    protected $fillable = ['name','price','service_group_id','updated_at'];

    protected $hidden = ['created_at'];

    public static function savePrice($data,$srv_group){

        if(empty($data->name) || empty($data->price)) return;

        if(isset($data->id) && !empty($data->id)){
            $price  = Prices::findOrFail($data->id);
        }else{
            $price = new Prices;
        }

        $price->name = $data->name;
        $price->price = $data->price;
        $price->service_group_id = $srv_group;

        $price->save();
    }

    public static function deletePrice($id){

        $price = Prices::find($id);
        if ($price != null)
            $price->delete();

    }
}
