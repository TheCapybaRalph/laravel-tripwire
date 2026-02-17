<?php

namespace TheCapybaRalph\LaravelTripwire\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class IntegrityCheckFailed
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public function __construct(public string $message = "") { }

    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('tripwire.check.failed'),
        ];
    }
}
