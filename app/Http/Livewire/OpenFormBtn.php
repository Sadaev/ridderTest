<?php

namespace App\Http\Livewire;

use App\Models\Hospital;
use App\Models\RegistrationForVaccination;
use App\Models\TypeOfVaccine;
use Livewire\Component;

class OpenFormBtn extends Component
{
	public $isOpen = false;
	public $saveDisabled = true;
    public $peoples, $hospitals, $vaccineTypes, $peopleId, $peopleFio, $peopleTel, $peopleIin, $vaccineId, $hospitalId, $dateOfVaccine, $status;

    public function render()
    {
        $this->peoples = $this->getData(RegistrationForVaccination::all());
        $this->hospitals = Hospital::all();
        $this->vaccineTypes = TypeOfVaccine::all();
        return view('livewire.open-form-btn');
    }

    private function cleanVars()
    {
        $this->peopleFio = null;
        $this->peopleIin = null;
        $this->peopleTel = null;
        $this->vaccineId = null;
        $this->dateOfVaccine = null;
	$this->hospitalId = null;
	$this->saveDisabled = true;
    }

    public function getData($records){
        foreach ($records as $record) {
            $hospital = Hospital::find(intval($record->hospitalId));
            $vaccine = TypeOfVaccine::find(intval($record->vaccinationTypeId));
            if(!is_null($hospital) and !is_null($vaccine)){
                $record->hospitalName = $hospital->name;
                $record->vaccineName = $vaccine->name;
            }
        }
        return $records ;
    }

    public function store(){
        $validateArray = [
            'peopleFio' => 'required',
            'peopleTel' => 'required',
            'peopleIin' => 'required|min:12|max:12',
            'vaccineId' => 'required',
            'hospitalId' => 'required',
            'dateOfVaccine' => 'required',
        ];

	$this->validate($validateArray);

        RegistrationForVaccination::updateOrCreate(['id' => $this->peopleId],[
            'fio' => $this->peopleFio,
            'tel' => $this->peopleTel,
            'vaccinationTypeId' => $this->vaccineId,
            'hospitalId' => $this->hospitalId,
            'dateOfVaccination' => $this->dateOfVaccine,
            'iin' => $this->peopleIin,
            'status' => $this->status ?? 'opened'
        ]);
        //$this->dispatchBrowserEvent('closeModal');
	$this->cleanVars();
	session()->flash('message', __('auth.successRegistrationForVaccination'));
    }

    public function closeModal(){
	session()->flash('message', '');
	$this->cleanVars();
    	$this->isOpen = false;
    }

    public function openModal(){
    	$this->isOpen = true;
    }

}
