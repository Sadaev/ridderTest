<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\GeneralStatistic;

class RGeneralStatistics extends Component
{
	public $id;
	public $title	= '';
	public $count	= 0;
	public $isOpen	= false;

    public function render()
    {
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

		GeneralStatistic::updateOrCreate(['id' => $this->id],[
			'title' => $this->title,
			'count' => $this->count,
		]);

		session()->flash('message', $this->id ? __('auth.updatedSuccess') : __('auth.createdSuccess'));

		$this->closeModal();
		$this->resetInputFields();
	}

	public function edit($id){
		$generalStatistic = GeneralStatistic::findOrFail($id);
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
