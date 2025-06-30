<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\CourtController;
use App\Http\Controllers\Frontend\BookingController;
use App\Http\Controllers\Frontend\TournamentController;
use App\Http\Controllers\Frontend\TeamController;
use App\Http\Controllers\Frontend\VenueController;
use App\Http\Controllers\Frontend\CoachingController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\MembershipController;
use App\Http\Controllers\Frontend\NewsletterController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Courts
Route::prefix('courts')->name('courts.')->group(function () {
    Route::get('/', [CourtController::class, 'index'])->name('index');
    Route::get('/category/{category}', [CourtController::class, 'category'])->name('category');
    Route::get('/search/{query}', [CourtController::class, 'search'])->name('search');
    Route::get('/{court}', [CourtController::class, 'show'])->name('show');
});

// Bookings
Route::prefix('bookings')->name('bookings.')->group(function () {
    Route::get('/', [BookingController::class, 'index'])->name('index');
    Route::get('/create', [BookingController::class, 'create'])->name('create');
    Route::post('/', [BookingController::class, 'store'])->name('store');
    Route::get('/{booking}', [BookingController::class, 'show'])->name('show');
    Route::put('/{booking}', [BookingController::class, 'update'])->name('update');
    Route::delete('/{booking}', [BookingController::class, 'destroy'])->name('destroy');
});

// Tournaments
Route::prefix('tournaments')->name('tournaments.')->group(function () {
    Route::get('/', [TournamentController::class, 'index'])->name('index');
    Route::get('/register', [TournamentController::class, 'register'])->name('register');
    Route::get('/search/{query}', [TournamentController::class, 'search'])->name('search');
    Route::get('/{tournament}', [TournamentController::class, 'show'])->name('show');
    Route::post('/{tournament}/register', [TournamentController::class, 'registerTeam'])->name('register.team');
});

// Teams
Route::prefix('teams')->name('teams.')->group(function () {
    Route::get('/', [TeamController::class, 'index'])->name('index');
    Route::get('/create', [TeamController::class, 'create'])->name('create');
    Route::post('/', [TeamController::class, 'store'])->name('store');
    Route::get('/search/{query}', [TeamController::class, 'search'])->name('search');
    Route::get('/{team}', [TeamController::class, 'show'])->name('show');
});

// Venues
Route::prefix('venues')->name('venues.')->group(function () {
    Route::get('/', [VenueController::class, 'index'])->name('index');
    Route::get('/{venue}', [VenueController::class, 'show'])->name('show');
});

// Coaching
Route::prefix('coaching')->name('coaching.')->group(function () {
    Route::get('/', [CoachingController::class, 'index'])->name('index');
    Route::get('/search/{query}', [CoachingController::class, 'search'])->name('search');
    Route::get('/{program}', [CoachingController::class, 'show'])->name('show');

    // Additional coaching related routes grouped under coaching prefix
    Route::get('/equipment', [CoachingController::class, 'equipment'])->name('equipment');
    Route::get('/events', [CoachingController::class, 'events'])->name('events');
    Route::get('/leagues', [CoachingController::class, 'leagues'])->name('leagues');
});

// News
Route::prefix('news')->name('news.')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('index');
    Route::get('/{article}', [NewsController::class, 'show'])->name('show');
});

// Membership
Route::prefix('membership')->name('membership.')->group(function () {
    Route::get('/plans', [MembershipController::class, 'plans'])->name('plans');
    Route::post('/subscribe', [MembershipController::class, 'subscribe'])->name('subscribe');
});

// Newsletter
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

// API Routes for AJAX
Route::prefix('api')->name('api.')->group(function () {
    Route::get('/courts/availability', [CourtController::class, 'checkAvailability'])->name('courts.availability');
    Route::post('/bookings/quick', [BookingController::class, 'quickBook'])->name('bookings.quick');
});
Route::get('/contact', function () {
    return view('contact'); 
})->name('contact.form');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
