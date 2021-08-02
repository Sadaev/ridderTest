<?php

namespace App\Providers;

use App\Models\LotteryParticipant;
use App\Models\RegistrationForVaccination;
use App\Observers\LotteryParticipantObserver;
use App\Observers\RegistrationForVaccinationObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        LotteryParticipant::observe(LotteryParticipantObserver::class);
        RegistrationForVaccination::observe(RegistrationForVaccinationObserver::class);
    }
}
