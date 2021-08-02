<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LotteryParticipantNotification extends Mailable
{
    use Queueable, SerializesModels;

    public array $lotteryParticipant;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $lotteryParticipant)
    {
        $this->lotteryParticipant = $lotteryParticipant;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Вакцинация в г.Риддер')
            ->view('emails.lotteryParticipantMail');
    }
}
