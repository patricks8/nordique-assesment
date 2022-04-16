<?php

namespace App\Listeners;

use App\Events\UserCreatingEvent;
use App\Models\User;
use Illuminate\Support\Str;

class UserCreatingListener
{
    /**
     * Handle the event.
     *
     * @param UserCreatingEvent $event
     * @return void
     */
    public function handle(UserCreatingEvent $event)
    {
        $event->user->api_token = $this->getUniqueApiToken();
    }

    /**
     * Get a unique api token
     *
     * @param $length
     * @return string
     */
    private function getUniqueApiToken($length = 50): string
    {
        $token = Str::random($length);

        if (User::where('api_token', $token)->exists()) {
            return $this->getUniqueApiToken($length);
        }

        return $token;
    }
}
