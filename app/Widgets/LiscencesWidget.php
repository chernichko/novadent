<?php

namespace App\Widgets;

use App\Liscence;
use Klisl\Widgets\Contract\ContractWidget;


class LiscencesWidget implements ContractWidget{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function execute(){

	    $data = Liscence::get();
				
		return view('Widgets::liscences',['liscences' => $data]);
		
	}	
}
