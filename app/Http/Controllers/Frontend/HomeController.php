<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Venue;
use App\Models\Tournament;
use App\Models\Booking;
use App\Models\News;
use App\Models\Court;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // Get available courts for today
       $availableCourts = Venue::query()
            ->with(['venue', 'bookings' => function ($query) {
                $query->whereDate('booking_date', today())
                      ->where('status', '!=', 'cancelled');
            }])
            ->take(8)
            ->get();

        // Get upcoming tournaments
        $upcomingTournaments = Tournament::where('registration_end', '>', now())
            ->where('status', 'open')
            ->orderBy('start_date')
            ->take(3)
            ->get();

        // Get recent bookings for activity feed
        $recentBookings = Booking::with(['venue', 'user'])
            ->where('created_at', '>', now()->subHours(24))
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        // Get latest news
        $latestNews = News::where('status', 'published')
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

     

$stats = [
    'total_courts' => Venue::where('status', 'active')->count(),  // use Venue here instead of Court
    'active_players' => DB::table('users')->where('role', 'player')->count(),
    'total_venues' => DB::table('venues')->where('status', 'active')->count(),
];

        return view('frontend.pages.home', compact(
            'availableCourts',
            'upcomingTournaments',
            'recentBookings',
            'latestNews',
            'stats'
        ));
    }
}
