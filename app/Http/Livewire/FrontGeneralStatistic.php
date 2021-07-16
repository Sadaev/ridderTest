<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\GeneralStatistic;

class FrontGeneralStatistic extends Component
{
	public $statistics;
    public function render()
    {
	    $this->statistics = GeneralStatistic::all();
        return view('livewire.front-general-statistic');
    }
}
