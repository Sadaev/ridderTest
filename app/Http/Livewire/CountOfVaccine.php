<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\RemainderOftheVaccine;
use App\Models\Hospital;
use App\Models\TypeOfVaccine;

class CountOfVaccine extends Component
{
    public $records, $hospitals, $completeData, $hospitalId, $vaccineId, $count, $recordId, $vaccineTypes;
    public $isOpen = 0;

    public function render()
    {
        $this->records = RemainderOftheVaccine::all();
        $this->hospitals = Hospital::all();
        $this->vaccineTypes = TypeOfVaccine::all();
        $this->completeData = $this->getData($this->records);
        return view('livewire.count-of-vaccine');
    }

    public function getData($records){
        foreach ($records as $record) {
            $hospital = Hospital::find(intval($record->hospitalId));
            $vaccine = TypeOfVaccine::find(intval($record->typeOfVaccineId));
            if(!is_null($hospital) and !is_null($vaccine)){
                $record->hospitalName = $hospital->name;
                $record->vaccineName = $vaccine->name;
            }
        }
        return $records ;
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
        $this->hospitalId = null;
        $this->vaccineId = null;
        $this->count = null;
    }

    public function store(){
        $this->validate([
            'hospitalId' => 'required',
            'vaccineId' => 'required',
            'count' => 'required',
        ]);


        RemainderOftheVaccine::updateOrCreate(['id' => $this->recordId],[
            'hospitalId' => $this->hospitalId,
            'typeOfVaccineId' => $this->vaccineId,
            'count' => $this->count
        ]);

        session()->flash('message', $this->hospitalId ? __('auth.updatedSuccess') : __('auth.createdSuccess'));
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $records = RemainderOftheVaccine::findOrFail($id);
        $this->recordId = $id;
        $this->hospitalId = $records->hospitalId;
        $this->vaccineId = $records->typeOfVaccineId;
        $this->count = $records->count;

        $this->openModal();
    }

    public function delete($id)
    {
        $id = intval($id);
        RemainderOftheVaccine::find($id)->delete();
        session()->flash('message',__('auth.deletedSuccess'));
    }

}
