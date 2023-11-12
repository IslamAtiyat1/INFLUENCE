<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

    Route::controller(App\Http\Controllers\Frontend\InfluencerController::class)->group(function () {
        Route::get('/home', 'index');
    });

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    // InfluencerController
    Route::prefix('influencer')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\InfluencerController::class, 'index']);
        Route::get('/create', [App\Http\Controllers\Admin\InfluencerController::class, 'create']);
        Route::post('/', [App\Http\Controllers\Admin\InfluencerController::class, 'store']);
        Route::get('/{influencer}/edit', [App\Http\Controllers\Admin\InfluencerController::class, 'edit']);
        Route::put('/{influencer}', [App\Http\Controllers\Admin\InfluencerController::class, 'update']);
    });
});