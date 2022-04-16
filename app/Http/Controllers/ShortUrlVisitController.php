<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ShortUrlVisitController extends Controller
{
    /**
     * Redirect to the short url destination
     *
     * @param $key
     * @return RedirectResponse
     */
    public function __invoke($key): RedirectResponse
    {
        $shortUrl = ShortUrl::where('key', $key)
            ->firstOrFail();

        return redirect()->to($shortUrl->destination);
    }
}
