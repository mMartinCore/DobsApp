<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Auth\Listeners\newCorpseNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\UserRegistered' => [
            'App\Listeners\SendWelcomeEmail',
        ],
        'App\Events\newNotification' => [
            'App\Listeners\SendNotification',
        ],
        'App\Events\pauperBurialRequest' => [
            'App\Listeners\SendPauperBurialRequestEmail',
        ],
        'App\Events\overThirtyDays' => [
            'App\Listeners\SendOverThirtyDaysEmail',
        ],
        'App\Events\UserRole' => [
            'App\Listeners\SendRoleEmail',
        ],
        'App\Events\fifteenDays' => [
            'App\Listeners\SendFifteenDaysEmail',
        ],
        'App\Events\tweentyFiveDays' => [
            'App\Listeners\SendTweentyFiveDaysEmail',
        ],
        'App\Events\postCompleteNoBuried' => [
            'App\Listeners\SendpostCompleteNoBuriedEmail',
        ],
        'App\Events\pendingNoPostmortem' => [
            'App\Listeners\SendpendingNoPostmortemEmail',
        ],
        'App\Events\requestStatus' => [
            'App\Listeners\SendRequestStatusEmail',
        ],
        'App\Events\deny' => [
            'App\Listeners\SenddenyEmail',
        ],


    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
