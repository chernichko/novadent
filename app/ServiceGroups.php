<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceGroups extends Model
{
    protected $table = 'service_groups';

    protected $fillable = ['name','code','short_description','description','updated_at'];

    protected $hidden = ['created_at'];

    public static function saveGroup($data){

        if(isset($data['id'])){
            $service  = ServiceGroups::findOrFail($data['id']);
        }else{
            $service = new ServiceGroups;
        }

        $service->name = $data['name'];
        $service->code = $data['code'];
        $service->short_description = $data['shortdescription'];
        $service->description = $data['description'];
        $service->active = isset($data['active']) ? 1 : 0 ;

        $service->save();
    }
}
