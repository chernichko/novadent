<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    protected $table = 'doctors';

    protected $fillable = ['name','specialization','description','stage','updated_at'];

    protected $hidden = ['created_at'];

    public static function saveDoctor($request){

        $data = $request->all();

        $path='';

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();

            $filename = explode('.',$filename);

            $fileexp = array_pop($filename);

            $filename = implode("." , $filename) . time() . '.' . $fileexp;

            $path = $request->file('image')->storeAs('public/files/doctors' , $filename);
        }

        if(isset($data['id'])){
            $doctor  = Doctors::findOrFail($data['id']);
        }else{
            $doctor = new Doctors;
        }

        $doctor->name = $data['name'];
        $doctor->specialization = $data['specialization'];
        $doctor->stage = $data['stage'];
        $doctor->description = $data['description'];
        if(!empty($path))
            $doctor->image = $filename;
        $doctor->active = isset($data['active']) ? 1 : 0 ;

        $doctor->save();
    }
}
