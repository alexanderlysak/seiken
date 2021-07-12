<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

/* Auth */
Auth::routes();
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');



/* Frontend */
Route::get('/home', [App\Http\Controllers\Frontend\MainController::class, 'indexAction'])->name('home');
Route::get('/', [App\Http\Controllers\Frontend\MainController::class, 'indexAction'])->name('home');

Route::get('/registration', [App\Http\Controllers\Frontend\MainController::class, 'registerAction'])->name('registration');
Route::post('/registration', [App\Http\Controllers\Frontend\MainController::class, 'postRegisterAction'])->name('post_registration');

/* Dashboard */
Route::prefix('dashboard')->name('dashboard.')->middleware(['auth', 'dashboard.access'])->group(function() {
    Route::get('/', [App\Http\Controllers\Dashboard\MainController::class, 'indexAction']);

    Route::get('/gymnasts', [App\Http\Controllers\Dashboard\GymnastsController::class, 'indexAction'])->name('gymnasts');
    Route::get('/gymnast-profile/{id}', [App\Http\Controllers\Dashboard\GymnastsController::class, 'profileAction'])->name('gymnast_profile');
    Route::get('/gymnasts-new', [App\Http\Controllers\Dashboard\GymnastsController::class, 'newItemAction'])->name('gymnasts_new');
    Route::post('/gymnasts-new', [App\Http\Controllers\Dashboard\GymnastsController::class, 'createAction'])->name('gymnasts_create');



});
