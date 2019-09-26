<?php

namespace App\Listeners;

use App\Events\SignUpForTenGroupDiscountEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyAdminViaSlack
{

    /**
     * Handle the event.
     *
     * @param  SignUpForTenGroupDiscountEvent  $event
     * @return void
     */
    public function handle(SignUpForTenGroupDiscountEvent $event)
    {
        // slack notification to Admin 
        dump('Slack message here');
    }
}
