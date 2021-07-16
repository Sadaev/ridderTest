<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\GeneralStatistic;
use App\Models\RemainderOftheVaccine;

class GeneralStatistics extends Component
{
	public $statistics;
	public $statisticId;
	public $countVaccine = 0;
	public $title	= '';
	public $count	= 0;
	public $isOpen	= false;

    public function render()
    {
	    $vaccine = RemainderOftheVaccine::all();
	    foreach($vaccine as $row){
	    	$this->countVaccine =+ $row->count;
	    }
	    $this->statistics = GeneralStatistic::all();
	    return view('livewire.general-statistic');
    }

	public function create(){
		$this->resetInputFields();
		$this->openModal();
	}

	public function openModal(){
		$this->isOpen = true;
	}

	public function closeModal(){
		$this->isOpen = false;
	}

	public function resetInputFields(){
		$this->title = '';
		$this->count = 0;
	}

	public function store(){
		$this->validate([
			'title' => 'required',
			'count' => 'required',
		]);

		GeneralStatistic::updateOrCreate(['id' => $this->statisticId],[
			'title' => $this->title,
			'count' => $this->count,
		]);

		session()->flash('message', $this->id ? __('auth.updatedSuccess') : __('auth.createdSuccess'));

		$this->closeModal();
		$this->resetInputFields();
	}

	public function edit($id){
		$generalStatistic = GeneralStatistic::findOrFail($id);
		$this->statisticId = $generalStatistic->id;
		$this->title = $generalStatistic->title;
		$this->count = $generalStatistic->count;

		$this->openModal();
	}

	public function delete($id){
		$id = intval($id);
		GeneralStatistic::find($id)->delete();
		session()->flash('message',__('auth.deletedSuccess'));
	}
}
