<?php

namespace App\Widgets;

use Klisl\Widgets\Contract\ContractWidget;
use App\Doctors;

/**
 * Class TestWidget
 * Класс для демонстрации работы расширения
 * @package App\Widgets
 */
class DoctorsWidget implements ContractWidget{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function execute(){

	    $data = Doctors::where(['active'=>1])->get();
				
		return view('Widgets::doctors',['doctors' => $data]);
		
	}	
}
