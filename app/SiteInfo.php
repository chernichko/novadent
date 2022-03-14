<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteInfo extends Model
{
    protected $table = 'site_info';

    protected $fillable = ['code', 'value'];

    public static function getSiteInfo()
    {
        $data = SiteInfo::all();

        $info = [];
        foreach ($data as $row) {
            $info[$row->code] = $row->value;
        }

        if (empty($info)) {
            $info = [
                'name' => '',
                'email' => '',
                'phone' => '',
                'phone1' => '',
                'address' => '',
                'gps-data' => '',
                'worktimeWeekday' => '',
                'worktimeWeekend' => '',
            ];
        }

        return $info;
    }

    public static function saveinfo($data)
    {
        SiteInfo::truncate($data);

        foreach ($data as $row => $item) {
            if ($row == '_token') {
                continue;
            }

//                $info = SiteInfo::firstOrNew(array('code' => "$row"));
            $info = new SiteInfo();
            $info->value = "$item";
            $info->code = "$row";

            $info->save();
        }
    }

}
