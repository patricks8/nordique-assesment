<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShortUrlVisit extends Model
{
    use HasFactory;

    protected $fillable = [
        'short_url_id',
        'ip_address',
    ];

    /**
     * @return BelongsTo
     */
    public function shortUrl(): BelongsTo
    {
        return $this->belongsTo(ShortUrl::class);
    }
}
