<?php

namespace App\Observers;

use App\Mail\RegistrationForVaccinationNotification;
use App\Models\RegistrationForVaccination;
use Illuminate\Support\Facades\Mail;

class RegistrationForVaccinationObserver
{
    /**
     * Handle the RegistrationForVaccination "updated" event.
     *
     * @param  \App\Models\RegistrationForVaccination  $registrationForVaccination
     * @return void
     */
    public function updated(RegistrationForVaccination $registrationForVaccination)
    {
        if ($registrationForVaccination->wasChanged('status') && $registrationForVaccination->status === 'successfully') {
            try {
                Mail::to($registrationForVaccination->email)->send(new RegistrationForVaccinationNotification($registrationForVaccination->toArray()));
            } catch (\Exception $exception){
                //
            }
        }
    }
}
