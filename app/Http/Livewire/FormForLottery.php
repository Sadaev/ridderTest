<?php

namespace App\Http\Livewire;

use App\Models\Hospital;
use App\Models\LotteryParticipant;
use Livewire\Component;

class FormForLottery extends Component
{
    public $peoples, $hospitals, $peopleId, $peopleFio, $peopleTel, $peopleIin, $hospitalId, $status, $email;
    public $saveDisabled = 0;
    public $isOpen = false;

    public function render()
    {
        $this->peoples = $this->getData(LotteryParticipant::all());
        $this->hospitals = Hospital::all();
        return view('livewire.form-for-lottery');
    }

    private function cleanVars()
    {
        $this->peopleFio = null;
        $this->peopleTel = null;
        $this->peopleIin = null;
        $this->hospitalId = null;
        $this->status = null;
        $this->email = null;
        $this->saveDisabled = 0;
    }

    public function changeButtonState(){
        $this->saveDisabled = !$this->saveDisabled;
    }

    public function getData($records){
        foreach ($records as $record) {
            $hospital = Hospital::find(intval($record->hospitalId));
            if(!is_null($hospital)){
                $record->hospitalName = $hospital->name;
            }
        }
        return $records ;
    }

    public function store(){
        $validateArray = [
            'peopleFio' => 'required',
            'peopleTel' => 'required',
            'peopleIin' => 'required|min:12|max:12',
            'hospitalId' => 'required',
            'email' => 'required|email',
        ];
        $this->validate($validateArray);
        LotteryParticipant::updateOrCreate(['id' => $this->peopleId],[
            'fio' => $this->peopleFio,
            'phone' => $this->peopleTel,
            'hospitalId' => $this->hospitalId,
            'iin' => $this->peopleIin,
            'status' => $this->status ?? 'underConsideration',
            'email' => $this->email
        ]);
//        $this->dispatchBrowserEvent('closeModalLottery');
        $this->saveDisabled = 0;
	$this->cleanVars();
	session()->flash('message', __('auth.successRegistrationLottery'));

    }

    public function closeModal(){
    	$this->isOpen = false;
    }

    public function openModal(){
	session()->flash('message', '');
    	$this->isOpen = true;
    }
}
