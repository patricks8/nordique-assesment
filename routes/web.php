<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShortUrlController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])
        ->name('dashboard');

    Route::resource('short-url', ShortUrlController::class);
});

require __DIR__ . '/auth.php';
