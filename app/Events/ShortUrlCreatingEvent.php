<?php

namespace App\Events;

use App\Models\ShortUrl;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ShortUrlCreatingEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public ShortUrl $shortUrl;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(ShortUrl $shortUrl)
    {
        $this->shortUrl = $shortUrl;
    }
}
