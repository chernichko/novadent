<?php

namespace App\Widgets;

use Klisl\Widgets\Contract\ContractWidget;
use App\Doctors;

class DoctorsWidget implements ContractWidget
{
    public function execute()
    {
        $data = Doctors::where(['active' => 1])->get();
        return view('Widgets::doctors', ['doctors' => $data]);
    }
}
