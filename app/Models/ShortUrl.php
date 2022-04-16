<?php

namespace App\Models;

use App\Events\ShortUrlCreatingEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShortUrl extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'destination'
    ];

    protected $dispatchesEvents = [
        'creating' => ShortUrlCreatingEvent::class,
    ];

    protected $appends = [
        'url'
    ];

    /**
     * @return HasMany
     */
    public function visits(): HasMany
    {
        return $this->hasMany(ShortUrlVisit::class);
    }

    /**
     * Get the url attribute
     *
     * @return string
     */
    public function getUrlAttribute(): string
    {
        return route('short-url.visit', $this->key);
    }
}
