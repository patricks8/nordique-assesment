<?php

namespace App\Listeners;

use App\Events\ShortUrlVisitEvent;

class ShortUrlVisitListener
{
    /**
     * Handle the event.
     *
     * @param ShortUrlVisitEvent $event
     * @return void
     */
    public function handle(ShortUrlVisitEvent $event)
    {
        $event->shortUrl->visits()
            ->create([
                'ip_address' => request()->ip(),
            ]);
    }
}
