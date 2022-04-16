<?php

namespace App\Events;

use App\Models\ShortUrl;

class ShortUrlVisitEvent
{
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
