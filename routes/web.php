<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestController;
use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
*/


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'processLogin'])->name('process_login');
Route::get('/test', [TestController::class, 'test']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registering'])->name('registering');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/profile/{id}', [AuthController::class, 'profile'])->name('profile');
Route::post('/profile/store/{id}', [AuthController::class, 'store'])->name('store');


Route::get('/auth/redirect/{provider}', function ($provider) {
    return Socialite::driver($provider)->redirect();
})->name('auth.redirect');


Route::get('/auth/callback/{provider}', [AuthController::class, 'callback'])->name('auth.callback');


Route::get('/', function () {
    return view('layout_frontpage.master');
})->name('welcome');


Route::get('/language/{locale}', function ($locale) {
    if (!in_array($locale, config('app.locales'))) {
        $locale = config('app.fallback_locale');
    }
    session()->put('locale', $locale);
    return redirect()->back();
})->name('language');
