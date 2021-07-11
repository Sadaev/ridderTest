<?php

namespace App\Http\Livewire;

use App\Models\Hospital;
use App\Models\RemainderOftheVaccine;
use App\Models\TypeOfVaccine;
use Livewire\Component;

class FrontReminderVaccine extends Component
{
    public $hospitals, $completeData, $hospitalId, $count, $recordId, $vaccineTypes;

    public function render()
    {
        $this->completeData = $this->getData();
        return view('livewire.front-reminder-vaccine');
    }

    public function getData(){
        $records = RemainderOftheVaccine::all();
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
}
