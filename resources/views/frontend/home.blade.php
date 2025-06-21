@extends('layouts.app') <!-- Make sure this layout exists -->

@section('title', 'Home')

@section('content')
<div class="container mt-5">

    {{-- Hero Section with Statistics --}}
    <div class="row text-center mb-5">
        <div class="col">
            <h1>Welcome to Futbook</h1>
            <p class="lead">Your ultimate futsal booking and tournament platform.</p>
        </div>
    </div>
    <div class="row text-center mb-4">
        <div class="col-md-4">
            <h3>Total Courts</h3>
            <p>{{ $stats['total_courts'] }}</p>
        </div>
        <div class="col-md-4">
            <h3>Active Players</h3>
            <p>{{ $stats['active_players'] }}</p>
        </div>
        <div class="col-md-4">
            <h3>Total Venues</h3>
            <p>{{ $stats['total_venues'] }}</p>
        </div>
    </div>

    {{-- Available Courts --}}
    <h2>Available Courts Today</h2>
    <div class="row mb-5">
        @forelse($availableCourts as $court)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $court->name }}</h5>
                        <p>Status: {{ $court->status }}</p>
                        <p>Location: {{ $court->location ?? 'N/A' }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p>No available courts found for today.</p>
        @endforelse
    </div>

    {{-- Upcoming Tournaments --}}
    <h2>Upcoming Tournaments</h2>
    <div class="row mb-5">
        @forelse($upcomingTournaments as $tournament)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $tournament->name }}</h5>
                        <p>Starts on: {{ \Carbon\Carbon::parse($tournament->start_date)->format('d M, Y') }}</p>
                        <p>Register before: {{ \Carbon\Carbon::parse($tournament->registration_end)->format('d M, Y') }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p>No upcoming tournaments at the moment.</p>
        @endforelse
    </div>

    {{-- Recent Bookings --}}
    <h2>Recent Bookings</h2>
    <ul class="list-group mb-5">
        @forelse($recentBookings as $booking)
            <li class="list-group-item">
                <strong>{{ $booking->user->name ?? 'Guest' }}</strong> booked 
                <strong>{{ $booking->venue->name ?? 'Unknown Venue' }}</strong> 
                on {{ \Carbon\Carbon::parse($booking->booking_date)->format('d M, Y') }}
            </li>
        @empty
            <li class="list-group-item">No recent bookings in the last 24 hours.</li>
        @endforelse
    </ul>

    {{-- Latest News --}}
    <h2>Latest News</h2>
    <div class="row mb-5">
        @forelse($latestNews as $news)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $news->title }}</h5>
                        <p>{{ Str::limit($news->content, 100) }}</p>
                        <small class="text-muted">Published on {{ \Carbon\Carbon::parse($news->published_at)->format('d M, Y') }}</small>
                    </div>
                </div>
            </div>
        @empty
            <p>No news articles available.</p>
        @endforelse
    </div>

</div>
@endsection
