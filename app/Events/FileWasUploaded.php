<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class FileWasUploaded extends Event implements ShouldBroadcast
{
    use SerializesModels;

    public $greeting;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($greeting)
    {
        $this->greeting = $greeting;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['file.uploaded'];
    }
}
