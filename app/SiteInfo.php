<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteInfo extends Model
{
    protected $table = 'site_info';

    protected $fillable = ['code','value'];

    public static function saveinfo($data){

        //$path = $data->file('logotip')->store('files');

//        dd($path);

        SiteInfo::truncate($data);

        foreach ($data as $row => $item) {

            if($row == '_token') continue;

//                $info = SiteInfo::firstOrNew(array('code' => "$row"));
            $info = new SiteInfo();
            $info->value = "$item";
            $info->code = "$row";

            $info->save();

        }
    }

}
