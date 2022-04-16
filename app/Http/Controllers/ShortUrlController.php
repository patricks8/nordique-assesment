<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShortUrlRequest;
use App\Models\ShortUrl;
use App\Services\ShortUrlService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ShortUrlController extends Controller
{
    private ShortUrlService $service;

    public function __construct(ShortUrlService $service)
    {
        $this->service = $service;

        // Add authorization for the whole resource
        $this->authorizeResource(ShortUrl::class, 'short-url');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $shortUrls = ShortUrl::withCount('visits')
            ->paginate(50);

        return view('short_urls.index', [
           'shortUrls' => $shortUrls
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('short_urls.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ShortUrlRequest $request
     * @return RedirectResponse
     */
    public function store(ShortUrlRequest $request)
    {
        $this->service->store($request->validated());

        return redirect()->route('short-url.index')
            ->with('successMessage', __('Added.'));
    }

    /**
     * Display the specified resource.
     *
     * @param ShortUrl $shortUrl
     * @return Application|Factory|View
     */
    public function show(ShortUrl $shortUrl): View|Factory|Application
    {
        return view('short_urls.view', [
            'shortUrl' => $shortUrl,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ShortUrl $shortUrl
     * @return Application|Factory|View
     */
    public function edit(ShortUrl $shortUrl): Application|Factory|View
    {
        return view('short_urls.edit', [
            'shortUrl' => $shortUrl,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ShortUrlRequest $request
     * @param ShortUrl $shortUrl
     * @return RedirectResponse
     */
    public function update(ShortUrlRequest $request, ShortUrl $shortUrl): RedirectResponse
    {
        $shortUrl = $this->service->update($shortUrl, $request->validated());

        return redirect()->route('short-url.show', $shortUrl)
            ->with('successMessage', __('Saved.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ShortUrl $shortUrl
     * @return RedirectResponse
     */
    public function destroy(ShortUrl $shortUrl): RedirectResponse
    {
        $this->service->destroy($shortUrl);

        return redirect()->route('short-url.index')
        ->with('successMessage', __('Trashed'));
    }
}
