<?php

namespace App\Http\Livewire;
use App\Exports\LotteryExport;
use App\Models\Hospital;
use Livewire\Component;
use App\Models\LotteryParticipant;
use Maatwebsite\Excel\Facades\Excel;



class LotteryParticipantTable extends Component
{
    public $peoples, $hospitals, $peopleId, $peopleFio, $peopleTel, $peopleIin, $hospitalId, $status, $email;
    public $isOpen = 0;
    public $isEdit = 0;

    public function render()
    {
        $this->peoples = $this->getData(LotteryParticipant::all());
        $this->hospitals = Hospital::all();
        return view('livewire.lottery-participant-table');
    }

    public function getData($records){
        foreach ($records as $record) {
            $hospital = Hospital::find(intval($record->hospitalId));
            if(!is_null($hospital)) {
                $record->hospitalName = $hospital->name;
                $record->numberOfParticipiant = $record->status === 'approved' ? $record->id : '';
            }
        }
        return $records ;
    }

    public function create()
    {
        $this->isEdit = false;
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
        $this->peopleId = null;
        $this->peopleFio = null;
        $this->peopleTel = null;
        $this->peopleIin = null;
        $this->hospitalId = null;
        $this->status = null;
        $this->email = null;
    }

    public function store(){
        $validateArray = [
            'peopleFio' => 'required',
            'peopleTel' => 'required',
            'peopleIin' => 'required|min:12|max:12',
            'hospitalId' => 'required',
            'email' => 'required|email'
        ];

        if($this->isEdit){
            $validateArray['status'] = 'required';
        }

        $this->validate($validateArray);

        LotteryParticipant::updateOrCreate(['id' => $this->peopleId],[
            'fio' => $this->peopleFio,
            'phone' => $this->peopleTel,
            'hospitalId' => $this->hospitalId,
            'iin' => $this->peopleIin,
            'status' => $this->status ?? 'underConsideration',
            'email' => $this->email
        ]);

        session()->flash('message', $this->peopleId ? __('auth.updatedSuccess') : __('auth.createdSuccess'));
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $this->isEdit=true;
        $people = LotteryParticipant::findOrFail($id);
        $this->peopleId = $id;
        $this->peopleFio = $people->fio;
        $this->peopleTel = $people->phone;
        $this->peopleIin = $people->iin;
        $this->hospitalId = $people->hospitalId;
        $this->status = $people->status;
        $this->email = $people->email;

        $this->openModal();
    }

    public function delete($id)
    {
        $id = intval($id);
        LotteryParticipant::find($id)->delete();
        session()->flash('message',__('auth.deletedSuccess'));
    }

    public function exportAll(){
    	return Excel::download(new LotteryExport, 'lottery_participants.xlsx');
    }

    public function exportParticipants(){
        return Excel::download(new LotteryExport('approved'), 'lottery_participants.xlsx');
    }
}
