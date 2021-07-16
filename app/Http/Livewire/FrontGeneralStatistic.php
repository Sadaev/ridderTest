<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\GeneralStatistic;
use App\Models\RemainderOftheVaccine;

class FrontGeneralStatistic extends Component
{
	public $statistics;
	public $countVaccine = 0;
    public function render()
    {
		$vaccine = RemainderOftheVaccine::all();
		foreach($vaccine as $row){
			$this->countVaccine =+ $row->count;
		}
	    $this->statistics = GeneralStatistic::all();
        return view('livewire.front-general-statistic');
    }
}
