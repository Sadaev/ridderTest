<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Hospital;

class Hospitals extends Component
{
    public $hospitals, $hospitalName, $hospitalAddress, $hospitalId;
    public $isOpen = 0;

    public function render()
    {
        $this->hospitals = Hospital::all();
        return view('livewire.hospitals');
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
        $this->hospitalName = '';
        $this->hospitalAddress = '';
        $this->hospitalId = '';
    }

    public function store(){
        $this->validate([
            'hospitalName' => 'required',
            'hospitalAddress' => 'required',
        ]);


        Hospital::updateOrCreate(['id' => $this->hospitalId],[
            'name' => $this->hospitalName,
            'address' => $this->hospitalAddress
        ]);

        session()->flash('message', $this->hospitalId ? __('auth.updatedSuccess') : __('auth.createdSuccess'));
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $hospital = Hospital::findOrFail($id);
        $this->hospitalId = $id;
        $this->hospitalName = $hospital->name;
        $this->hospitalAddress = $hospital->address;

        $this->openModal();
    }

    public function delete($id)
    {
        $id = intval($id);
        Hospital::find($id)->delete();
        session()->flash('message',__('auth.deletedSuccess'));
    }
}
