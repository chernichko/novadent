<?php

namespace App\Widgets;

use App\Liscence;
use Klisl\Widgets\Contract\ContractWidget;

class LiscencesWidget implements ContractWidget
{
    public function execute()
    {
        $data = Liscence::get();
        return view('Widgets::liscences', ['liscences' => $data]);
    }
}
