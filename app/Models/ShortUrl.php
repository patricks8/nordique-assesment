<?php

namespace App\Models;

use App\Events\ShortUrlCreatingEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
}
