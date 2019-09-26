<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class SignUpForTenGroupDiscountEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $student;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($student)
    {
        $this->student = $student;
    }
}
