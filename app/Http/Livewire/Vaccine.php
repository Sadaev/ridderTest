<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TypeOfVaccine;

class Vaccine extends Component
{
    public $vaccines, $vaccineName, $vaccineId, $hospitalId;
    public $isOpen = 0;

    public function render()
    {
        $this->vaccines = TypeOfVaccine::all();
        return view('livewire.vaccine');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->vaccineName = '';
        $this->vaccineId = '';
    }

    public function store(){
        $this->validate([
            'vaccineName' => 'required',
        ]);


        TypeOfVaccine::updateOrCreate(['id' => $this->vaccineId],[
            'name' => $this->vaccineName,
        ]);

        session()->flash('message', $this->vaccineId ? __('auth.updatedSuccess') : __('auth.createdSuccess'));
	$this->closeModal();
	$this->resetInputFields();
    }

    public function edit($id)
    {
        $vaccine = TypeOfVaccine::findOrFail($id);
        $this->vaccineId = $id;
        $this->vaccineName = $vaccine->name;

        $this->openModal();
    }

    public function delete($id)
    {
        $id = intval($id);
        TypeOfVaccine::find($id)->delete();
        session()->flash('message',__('auth.deletedSuccess'));
    }
}
