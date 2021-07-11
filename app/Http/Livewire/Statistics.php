<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Hospital;
use App\Models\RegistrationFroVaccination;

class Statistics extends Component
{
    public $records;

    public function render()
    {
        $this->records = $this->getData();
        return view('livewire.statistics');
    }

    private function getData(){
        $hospitals = Hospital::all();
        $usersWhoVaccinated = RegistrationFroVaccination::where('status', 'close')->get();
        $hospitalVaccinated = [];
        foreach($hospitals as $hospital){
            $name = $hospital->name;
            $hospitalVaccinated[$name] = 0;
            foreach($usersWhoVaccinated as $user){
                if($user->hospitalId == $hospital->id){
                    $hospitalVaccinated[$name] = $hospitalVaccinated[$name] + 1;
                }
            }

        }
        return $hospitalVaccinated;
    }
}
