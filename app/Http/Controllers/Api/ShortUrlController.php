<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShortUrlRequest;
use App\Http\Resources\ShortUrlResource;
use App\Models\ShortUrl;
use App\Services\ShortUrlService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ShortUrlController extends Controller
{
    private ShortUrlService $service;

    /**
     * @param ShortUrlService $service
     */
    public function __construct(ShortUrlService $service)
    {
        $this->service = $service;

        // Add authorization for the whole resource
        $this->authorizeResource(ShortUrl::class, 'short-url');
    }

    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return ShortUrlResource::collection(ShortUrl::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ShortUrlRequest $request
     * @return ShortUrlResource
     */
    public function store(ShortUrlRequest $request): ShortUrlResource
    {
        return new ShortUrlResource($this->service->store($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param ShortUrl $shortUrl
     * @return ShortUrlResource
     */
    public function show(ShortUrl $shortUrl): ShortUrlResource
    {
        return new ShortUrlResource($shortUrl);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ShortUrlRequest $request
     * @param ShortUrl $shortUrl
     * @return ShortUrlResource
     */
    public function update(ShortUrlRequest $request, ShortUrl $shortUrl): ShortUrlResource
    {
        return new ShortUrlResource($this->service->update($shortUrl, $request->validated()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ShortUrl $shortUrl
     * @return ShortUrlResource
     */
    public function destroy(ShortUrl $shortUrl): ShortUrlResource
    {
        return new ShortUrlResource($this->service->destroy($shortUrl));
    }
}
