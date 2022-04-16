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

        $event->shortUrl->key = $this->getUniqueKey(config('short_url.key_length'));
    }

    /**
     * Generate a unique key for the short url
     *
     * @param int $length
     * @return string
     */
    private function getUniqueKey(int $length = 10): string
    {
        $key = Str::random($length);

        if (ShortUrl::where('key', $key)->exists()) {
            return $this->getUniqueKey($length);
        }

        return $key;
    }
}
