<?php

namespace App\Listeners;

use App\Events\ShortUrlCreatingEvent;
use App\Models\ShortUrl;
use Illuminate\Support\Str;

class ShortUrlCreatingListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param ShortUrlCreatingEvent $event
     * @return void
     */
    public function handle(ShortUrlCreatingEvent $event)
    {
        if (!is_null($event->shortUrl->key)) {
            return;
        }

        $event->shortUrl->key = $this->getUniqueKey();
    }

    /**
     * Generate a unique key for the short url
     *
     * @return string
     */
    private function getUniqueKey(): string
    {
        $key = Str::random(10);

        if (ShortUrl::where('key', $key)->exists()) {
            return $this->getUniqueKey();
        }

        return $key;
    }
}
