<?php

namespace App\Providers;

use App\Events\ShortUrlCreatingEvent;
use App\Events\ShortUrlVisitEvent;
use App\Events\UserCreatingEvent;
use App\Listeners\ShortUrlCreatingListener;
use App\Listeners\ShortUrlVisitListener;
use App\Listeners\UserCreatingListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ShortUrlCreatingEvent::class => [
            ShortUrlCreatingListener::class,
        ],
        ShortUrlVisitEvent::class => [
            ShortUrlVisitListener::class,
        ],
        UserCreatingEvent::class => [
            UserCreatingListener::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
