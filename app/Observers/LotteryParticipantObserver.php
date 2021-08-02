<?php

namespace App\Observers;

use App\Mail\LotteryParticipantNotification;
use App\Models\LotteryParticipant;
use Illuminate\Support\Facades\Mail;

class LotteryParticipantObserver
{
    /**
     * Handle the LotteryParticipant "updated" event.
     *
     * @param  \App\Models\LotteryParticipant  $lotteryParticipant
     * @return void
     */
    public function updated(LotteryParticipant $lotteryParticipant)
    {
        if ($lotteryParticipant->wasChanged('status') && $lotteryParticipant->status === 'approved') {
            try {
                Mail::to($lotteryParticipant->email)->send(new LotteryParticipantNotification($lotteryParticipant->toArray()));
            } catch (\Exception $exception){
                //
            }
        }
    }
}
