<?php

namespace App\Http\Controllers\Admin;

use App\Doctors;
use App\Http\Controllers\Controller;
use App\Services\DoctorService;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function doctors()
    {
        $list_doctors = Doctors::all();
        return view('admin.doctors.index', ['listDoctors' => $list_doctors]);
    }

    public function doctorCreate(Request $request, DoctorService $doctorService)
    {
        if ($request->isMethod('post')) {
            $doctorService->save($request);
            return redirect()->route('admin.doctors');
        }

        return view('admin.doctors.create');
    }

    public function doctorEdit(Request $request, DoctorService $doctorService, $id)
    {
        if ($request->isMethod('post')) {
            $doctorService->save($request);
        }

        $doctor = Doctors::where(['id' => $id])->first();

        return view('admin.doctors.edit', ['doctor' => $doctor]);
    }
}
