<?php

namespace App\Services;

use App\Models\ShortUrl;

class ShortUrlService
{
    /**
     * Store the url
     *
     * @param array $data
     * @return ShortUrl
     */
    public function store(array $data): ShortUrl
    {
        return ShortUrl::create($data);
    }
}
