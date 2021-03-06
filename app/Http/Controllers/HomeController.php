<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * Get the home dashboard
     *
     * @return Factory|View|Application
     */
    public function index(): Factory|View|Application
    {
        return view('dashboard');
    }
}
