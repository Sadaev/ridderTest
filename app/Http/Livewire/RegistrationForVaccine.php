<?php

namespace App\Http\Livewire;

use App\Models\Hospital;
use App\Models\LotteryParticipant;
use App\Models\TypeOfVaccine;
use Livewire\Component;
use App\Models\RegistrationForVaccination;
//use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Concerns\FromCollection;

class RegistrationForVaccinationExport implements FromCollection{
	/**
	 * @return \Illuminate\Support\Collection
	 */
	public function collection(){
		return RegistrationForVaccination::all();
	}
}

class RegistrationForVaccine extends Component
{
    public $peoples, $hospitals, $vaccineTypes, $peopleId, $peopleFio, $peopleTel, $peopleIin, $vaccineId, $hospitalId, $dateOfVaccine, $status, $peopleEmail;
    public $isOpen = 0;
    public $isEdit = false;

    public function render()
    {
	    $collection = RegistrationForVaccination::all();
	    $filtered = $collection->where('status','!=', 'successfully');
	$this->peoples = $this->getData($filtered->all());
        $this->hospitals = Hospital::all();
        $this->vaccineTypes = TypeOfVaccine::all();
        return view('livewire.registration-for-vaccine');
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
        $this->peopleFio = '';
        $this->peopleTel = '';
        $this->peopleIin = '';
        $this->vaccineId = null;
        $this->hospitalId = null;
        $this->dateOfVaccine = null;
        $this->status = '';
        $this->peopleEmail = '';
    }

    public function store(){
        $validateArray = [
            'peopleFio' => 'required',
            'peopleTel' => 'required',
            'peopleIin' => 'required',
            'vaccineId' => 'required',
            'hospitalId' => 'required',
            'dateOfVaccine' => 'required',
            'peopleEmail' => 'required|email',
        ];

        if($this->isEdit){
            $validateArray['status'] = 'required';
        }

        $this->validate($validateArray);


        RegistrationForVaccination::updateOrCreate(['id' => $this->peopleId],[
            'fio' => $this->peopleFio,
            'tel' => $this->peopleTel,
            'vaccinationTypeId' => $this->vaccineId,
            'hospitalId' => $this->hospitalId,
            'dateOfVaccination' => $this->dateOfVaccine,
            'iin' => $this->peopleIin,
            'status' => empty($this->status) ? 'opened' : $this->status,
            'email' => $this->peopleEmail
	]);

	if(!empty($this->status) && $this->status === 'successfully')
		LotteryParticipant::create([
			'fio' => $this->peopleFio,
			'phone' => $this->peopleTel,
			'hospitalId' => $this->hospitalId,
			'iin' => $this->peopleIin,
			'status' => 'approved',
			'email' => $this->peopleEmail,
		]);

        session()->flash('message', $this->peopleId ? __('auth.updatedSuccess') : __('auth.createdSuccess'));
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $this->isEdit=true;
        $people = RegistrationForVaccination::findOrFail($id);
        $this->peopleId = $id;
        $this->peopleFio = $people->fio;
        $this->peopleTel = $people->tel;
        $this->peopleIin = $people->iin;
        $this->vaccineId = $people->vaccinationTypeId;
        $this->hospitalId = $people->hospitalId;
        $this->dateOfVaccine = $people->dateOfVaccination;
        $this->status = $people->status;
        $this->peopleEmail= $people->email;

        $this->openModal();
    }

    public function delete($id)
    {
        $id = intval($id);
        RegistrationForVaccination::find($id)->delete();
        session()->flash('message',__('auth.deletedSuccess'));
    }

    public function export(){
	$result = RegistrationForVaccination::all();
	    Excel::create('registration_for_vaccination', function ($excel) use($result) {
         $excel->setTitle('Export');
         $excel->setCreator('Bauhaus')->setCompany('KraftHaus');
         $excel->sheet('Excel sheet', function ($sheet) use($result) {
             $sheet->setOrientation('landscape');
             $sheet->fromArray($result);
         });
	    })->download('xls');
    	//return Excel::download(new RegistrationForVaccinationExport, 'registration_for_vaccination.xlsx');
    }
}
