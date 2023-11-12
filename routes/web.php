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


Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
//InfluencerController
    Route::controller(App\Http\Controllers\Admin\InfluencerController::class)->group(function () {
        Route::get('/influencer', 'index');
        Route::get('/influencer/create', 'create');
        Route::post('/influencer', 'store');
        Route::get('/influencer/{influencer)/edit', 'edit');
        Route::put('/influencer/[influencer}', 'update');
    });
    });