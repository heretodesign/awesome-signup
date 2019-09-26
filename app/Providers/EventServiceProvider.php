<?php

namespace App\Providers;

use App\Events\SignUpForTwentyGroupDiscountEvent;
use App\Listeners\TwentyGroupDiscountListener;
use App\Events\SignUpForTenGroupDiscountEvent;
use App\Listeners\TenGroupDiscountListener;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        SignUpForTenGroupDiscountEvent::class => [
            TenGroupDiscountListener::class,
            \App\Listeners\NotifyAdminViaSlack::class,
        ],
        SignUpForTwentyGroupDiscountEvent::class => [
            TwentyGroupDiscountListener::class,
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
