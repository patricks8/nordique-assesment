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

    /**
     * Update the short url
     *
     * @param ShortUrl $shortUrl
     * @param array $data
     * @return ShortUrl
     */
    public function update(ShortUrl $shortUrl, array $data): ShortUrl
    {
        $shortUrl->update($data);

        return $shortUrl;
    }

    /**
     * Destroy the short url
     *
     * @param ShortUrl $shortUrl
     * @return ShortUrl
     */
    public function destroy(ShortUrl $shortUrl): ShortUrl
    {
        $shortUrl->delete();

        return $shortUrl;
    }
}
