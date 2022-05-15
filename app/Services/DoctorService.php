<?php

namespace App\Services;

use App\Doctors;
use Illuminate\Http\Request;

class DoctorService
{
    protected $imgPath = 'public/files/doctors';
    private $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function save(Request $request)
    {
        $data = $request->all();

        if (isset($data['id'])) {
            $doctor = Doctors::findOrFail($data['id']);
        } else {
            $doctor = new Doctors;
        }

        if ($request->hasFile('preview')) {
            $file = $this->imageService->saveImage($this->imgPath, $request);

            if (!empty($file['path'])) {
                $doctor->image = $file['filename'];
            }
        }

        $doctor->name = $data['name'];
        $doctor->specialization = $data['specialization'];
        $doctor->stage = $data['stage'];
        $doctor->description = $data['description'];
        $doctor->active = isset($data['active']) ? 1 : 0;

        $doctor->save();
    }
}
