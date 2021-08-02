<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationForVaccinationNotification extends Mailable
{
    use Queueable, SerializesModels;

    public array $registrationForVaccination;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $registrationForVaccination)
    {
        $this->registrationForVaccination = $registrationForVaccination;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Вакцинация в г.Риддер')
            ->view('emails.registrationForVaccinationMail');
    }
}
