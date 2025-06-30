@extends('frontend.layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Welcome to FutBook</h1>
            <p>Your premier futsal Venue booking and management platform. Book Venues, manage tournaments, and track your games.</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Latest Bookings & Updates</h2>
            <p>Stay updated with the latest court availability and booking confirmations.</p>
        </div>
    </div>
</div>

<body>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <defs>
        <symbol xmlns="http://www.w3.org/2000/svg" id="futsal-ball" viewBox="0 0 24 24">
            <path fill="currentColor" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="court" viewBox="0 0 24 24">
            <path fill="currentColor" d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V6h16v12z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="calendar" viewBox="0 0 24 24">
            <path fill="currentColor" d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="trophy" viewBox="0 0 24 24">
            <path fill="currentColor" d="M7 4V2c0-1.1.9-2 2-2h6c1.1 0 2 .9 2 2v2h4v2h-1l-.64 7.11c-.07.78-.69 1.39-1.47 1.39H16v4c0 1.1-.9 2-2 2h-4c-1.1 0-2-.9-2-2v-4H5.89c-.78 0-1.4-.61-1.47-1.39L3.78 6H3V4h4z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="team" viewBox="0 0 24 24">
            <path fill="currentColor" d="M16 4c0-1.11.89-2 2-2s2 .89 2 2-.89 2-2 2-2-.89-2-2zm4 18v-6h2.5l-2.54-7.63A1.5 1.5 0 0 0 18.54 7H17c-.8 0-1.54.37-2.01.99L12 11l-2.99-3.01A2.5 2.5 0 0 0 7 7H5.46c-.8 0-1.54.37-2.01.99L1 15h2.5v7h4v-7H9l1.5-2.5L12 15h1.5v7h4z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="booking" viewBox="0 0 24 24">
            <path fill="currentColor" d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="location" viewBox="0 0 24 24">
            <path fill="currentColor" d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="time" viewBox="0 0 24 24">
            <path fill="currentColor" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm4.2 14.2L11 13V7h1.5v5.2l4.5 2.7-.8 1.3z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="star-full" viewBox="0 0 24 24">
            <path fill="currentColor" d="m3.1 11.3l3.6 3.3l-1 4.6c-.1.6.1 1.2.6 1.5c.2.2.5.3.8.3c.2 0 .4 0 .6-.1c0 0 .1 0 .1-.1l4.1-2.3l4.1 2.3s.1 0 .1.1c.5.2 1.1.2 1.5-.1c.5-.3.7-.9.6-1.5l-1-4.6c.4-.3 1-.9 1.6-1.5l1.9-1.7l.1-.1c.4-.4.5-1 .3-1.5s-.6-.9-1.2-1h-.1l-4.7-.5l-1.9-4.3s0-.1-.1-.1c-.1-.7-.6-1-1.1-1c-.5 0-1 .3-1.3.8c0 0 0 .1-.1.1L8.7 8.2L4 8.7h-.1c-.5.1-1 .5-1.2 1c-.1.6 0 1.2.4 1.6"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="menu" viewBox="0 0 24 24">
            <path fill="currentColor" d="M2 6a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1m0 6.032a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1m1 5.033a1 1 0 1 0 0 2h18a1 1 0 0 0 0-2z"/>
        </symbol>
    </defs>
</svg>

<!-- Quick Booking Sidebar -->
<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasBooking">
    <div class="offcanvas-header justify-content-center">
        <h5 class="offcanvas-title">Quick Court Booking</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form id="quickBookingForm">
            <div class="mb-3">
                <label for="courtSelect" class="form-label">Select Court</label>
                <select class="form-select" id="courtSelect" required>
                    <option value="">Choose a Venue...</option>
                    <option value="venue-a">Venue A - Premium</option>
                    <option value="venue-b">Venue B - Standard</option>
                    <option value="venue-c">Venue C - Training</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="bookingDate" class="form-label">Date</label>
                <input type="date" class="form-control" id="bookingDate" required>
            </div>
            <div class="mb-3">
                <label for="timeSlot" class="form-label">Time Slot</label>
                <select class="form-select" id="timeSlot" required>
                    <option value="">Select time...</option>
                    <option value="08:00">08:00 - 09:00</option>
                    <option value="09:00">09:00 - 10:00</option>
                    <option value="10:00">10:00 - 11:00</option>
                    <option value="14:00">14:00 - 15:00</option>
                    <option value="15:00">15:00 - 16:00</option>
                    <option value="16:00">16:00 - 17:00</option>
                    <option value="19:00">19:00 - 20:00</option>
                    <option value="20:00">20:00 - 21:00</option>
                    <option value="21:00">21:00 - 22:00</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Duration (hours)</label>
                <select class="form-select" id="duration" required>
                    <option value="1">1 Hour - $25</option>
                    <option value="2">2 Hours - $45</option>
                    <option value="3">3 Hours - $65</option>
                </select>
            </div>
            <button class="w-100 btn btn-success btn-lg" type="submit">Book Now - $25</button>
        </form>
    </div>
</div>

<!-- Mobile Navigation Menu -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">
    <div class="offcanvas-header justify-content-between">
        <h4 class="fw-normal text-uppercase fs-6">FutBook Menu</h4>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end menu-list list-unstyled d-flex gap-md-3 mb-0">
            <li class="nav-item border-dashed active">
                <a href="{{ route('venues.index') }}" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
                    <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#court"></use></svg>
                    <span>Browse Venues</span>
                </a>
            </li>
            <li class="nav-item border-dashed">
                <a href="{{ route('bookings.index') }}" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
                    <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#booking"></use></svg>
                    <span>My Bookings</span>
                </a>
            </li>
            <li class="nav-item border-dashed">
                <a href="{{ route('tournaments.index') }}" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
                    <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#trophy"></use></svg>
                    <span>Tournaments</span>
                </a>
            </li>
            <li class="nav-item border-dashed">
                <a href="{{ route('teams.index') }}" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
                    <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#team"></use></svg>
                    <span>Teams & Players</span>
                </a>
            </li>
            <li class="nav-item border-dashed">
                <a href="{{ route('venues.index') }}" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
                    <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#location"></use></svg>
                    <span>Venues</span>
                </a>
            </li>
            <li class="nav-item border-dashed">
                <button class="btn btn-toggle dropdown-toggle position-relative w-100 d-flex justify-content-between align-items-center text-dark p-2" data-bs-toggle="collapse" data-bs-target="#services-collapse" aria-expanded="false">
                    <div class="d-flex gap-3">
                        <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#time"></use></svg>
                        <span>Services</span>
                    </div>
                </button>
                <div class="collapse" id="services-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal ps-5 pb-1">
                        <li class="border-bottom py-2"><a href="{{ route('coaching.index') }}" class="dropdown-item">Coaching</a></li>
                        <li class="border-bottom py-2"><a href="{{ route('equipment.index') }}" class="dropdown-item">Equipment Rental</a></li>
                        <li class="border-bottom py-2"><a href="{{ route('events.index') }}" class="dropdown-item">Events</a></li>
                        <li class="border-bottom py-2"><a href="{{ route('leagues.index') }}" class="dropdown-item">Leagues</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>

<!-- Hero Section -->
<section style="background-image: url('{{ asset('frontend-assets/images/futsal-hero-bg.jpg') }}');background-repeat: no-repeat;background-size: cover;">
    <div class="container-lg">
        <div class="row">
            <div class="col-lg-6 pt-5 mt-5">
                <h2 class="display-1 ls-1"><span class="fw-bold text-success">Premium</span> Futsal Venues at your <span class="fw-bold">Fingertips</span></h2>
                <p class="fs-4">Book instantly, play immediately.</p>
                <div class="d-flex gap-3">
                    <a href="{{ route('venue.index') }}" class="btn btn-success text-uppercase fs-6 rounded-pill px-4 py-3 mt-3">Book Now</a>
                    <a href="{{ route('tournaments.index') }}" class="btn btn-dark text-uppercase fs-6 rounded-pill px-4 py-3 mt-3">Join Tournament</a>
                </div>
                <div class="row my-5">
                    <div class="col">
                        <div class="row text-dark">
                            <div class="col-auto"><p class="fs-1 fw-bold lh-sm mb-0">12+</p></div>
                            <div class="col"><p class="text-uppercase lh-sm mb-0">Premium Courts</p></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row text-dark">
                            <div class="col-auto"><p class="fs-1 fw-bold lh-sm mb-0">500+</p></div>
                            <div class="col"><p class="text-uppercase lh-sm mb-0">Active Players</p></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row text-dark">
                            <div class="col-auto"><p class="fs-1 fw-bold lh-sm mb-0">5+</p></div>
                            <div class="col"><p class="text-uppercase lh-sm mb-0">Locations</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-3 g-0 justify-content-center">
            <div class="col">
                <div class="card border-0 bg-success rounded-0 p-4 text-light">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <svg width="60" height="60"><use xlink:href="#booking"></use></svg>
                        </div>
                        <div class="col-md-9">
                            <div class="card-body p-0">
                                <h5 class="text-light">Instant Booking</h5>
                                <p class="card-text">Book your court in seconds with real-time availability.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 bg-secondary rounded-0 p-4 text-light">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <svg width="60" height="60"><use xlink:href="#court"></use></svg>
                        </div>
                        <div class="col-md-9">
                            <div class="card-body p-0">
                                <h5 class="text-light">Premium Venues</h5>
                                <p class="card-text">Professional-grade futsal venues with modern facilities.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 bg-danger rounded-0 p-4 text-light">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <svg width="60" height="60"><use xlink:href="#trophy"></use></svg>
                        </div>
                        <div class="col-md-9">
                            <div class="card-body p-0">
                                <h5 class="text-light">Tournaments</h5>
                                <p class="card-text">Join exciting tournaments and compete with other teams.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Court Categories Section -->
<section class="py-5 overflow-hidden">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header d-flex flex-wrap justify-content-between mb-5">
                    <h2 class="section-title">Venue Categories</h2>
                    <div class="d-flex align-items-center">
                        <a href="{{ route('venues.index') }}" class="btn btn-success me-2">View All Venues</a>
                        <div class="swiper-buttons">
                            <button class="swiper-prev category-carousel-prev btn btn-outline-success">❮</button>
                            <button class="swiper-next category-carousel-next btn btn-outline-success">❯</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="category-carousel swiper">
                    <div class="swiper-wrapper">
                        <a href="{{ route('venues.category', 'premium') }}" class="nav-link swiper-slide text-center">
                            <img src="{{ asset('frontend-assets/images/court-premium.jpg') }}" class="rounded-circle" alt="Premium Venues">
                            <h4 class="fs-6 mt-3 fw-normal category-title">Premium Venues</h4>
                        </a>
                        <a href="{{ route('Venues.category', 'standard') }}" class="nav-link swiper-slide text-center">
                            <img src="{{ asset('frontend-assets/images/venue-standard.jpg') }}" class="rounded-circle" alt="Standard Venues">
                            <h4 class="fs-6 mt-3 fw-normal category-title">Standard Venues</h4>
                        </a>
                        <a href="{{ route('venues.category', 'training') }}" class="nav-link swiper-slide text-center">
                            <img src="{{ asset('frontend-assets/images/venue-training.jpg') }}" class="rounded-circle" alt="Training Venues">
                            <h4 class="fs-6 mt-3 fw-normal category-title">Training Venues</h4>
                        </a>
                        <a href="{{ route('venues.category', 'indoor') }}" class="nav-link swiper-slide text-center">
                            <img src="{{ asset('frontend-assets/images/venue-indoor.jpg') }}" class="rounded-circle" alt="Indoor Venues">
                            <h4 class="fs-6 mt-3 fw-normal category-title">Indoor Venues</h4>
                        </a>
                        <a href="{{ route('venues.category', 'outdoor') }}" class="nav-link swiper-slide text-center">
                            <img src="{{ asset('frontend-assets/images/venue-outdoor.jpg') }}" class="rounded-circle" alt="Outdoor Venues">
                            <h4 class="fs-6 mt-3 fw-normal category-title">Outdoor Venues</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Available Venues Section -->
<section class="pb-5">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header d-flex flex-wrap justify-content-between my-4">
                    <h2 class="section-title">Available Venues Today</h2>
                    <div class="d-flex align-items-center">
                        <a href="{{ route('venues.index') }}" class="btn btn-success rounded-1">View All</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="venue-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4">
                    
                    <!-- Venue Card 1 -->
                    <div class="col">
                        <div class="Venue-item card h-100">
                            <img src="{{ asset('frontend-assets/images/venue-1.jpg') }}" class="card-img-top" alt="Venue A">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Venue A - Premium</h5>
                                <div class="mb-2">
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                    </span>
                                    <span class="text-muted">(45 reviews)</span>
                                </div>
                                <p class="card-text">Professional futsal venue with premium artificial turf and LED lighting.</p>
                                <div class="mt-auto">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="text-success fw-bold fs-5">$30/hour</span>
                                        <span class="badge bg-success">Available</span>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <a href="{{ route('venues.show', 1) }}" class="btn btn-outline-success">View Details</a>
                                        <a href="{{ route('bookings.create', ['venue' => 1]) }}" class="btn btn-success">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Court Card 2 -->
                    <div class="col">
                        <div class="court-item card h-100">
                            <img src="{{ asset('frontend-assets/images/court-2.jpg') }}" class="card-img-top" alt="Court B">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Venue B - Standard</h5>
                                <div class="mb-2">
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                        <svg width="18" height="18" class="text-muted"><use xlink:href="#star-full"></use></svg>
                                    </span>
                                    <span class="text-muted">(32 reviews)</span>
                                </div>
                                <p class="card-text">Standard futsal venue perfect for casual games and training sessions.</p>
                                <div class="mt-auto">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="text-success fw-bold fs-5">$25/hour</span>
                                        <span class="badge bg-success">Available</span>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <a href="{{ route('venues.show', 2) }}" class="btn btn-outline-success">View Details</a>
                                        <a href="{{ route('bookings.create', ['venue' => 2]) }}" class="btn btn-success">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Court Card 3 -->
                    <div class="col">
                        <div class="venue-item card h-100">
                            <img src="{{ asset('frontend-assets/images/venue-3.jpg') }}" class="card-img-top" alt="Venue C">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Venue C - Training</h5>
                                <div class="mb-2">
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                        <svg width="18" height="18" class="text-muted"><use xlink:href="#star-full"></use></svg>
                                    </span>
                                    <span class="text-muted">(28 reviews)</span>
                                </div>
                                <p class="card-text">Ideal for training sessions with coaching equipment available.</p>
                                <div class="mt-auto">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="text-success fw-bold fs-5">$20/hour</span>
                                        <span class="badge bg-warning text-dark">Busy</span>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <a href="{{ route('venues.show', 3) }}" class="btn btn-outline-success">View Details</a>
                                        <a href="{{ route('bookings.create', ['court' => 3]) }}" class="btn btn-success">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Court Card 4 -->
                    <div class="col">
                        <div class="venue-item card h-100">
                            <img src="{{ asset('frontend-assets/images/venue-4.jpg') }}" class="card-img-top" alt="Venue D">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Venue D - Indoor</h5>
                                <div class="mb-2">
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                    </span>
                                    <span class="text-muted">(52 reviews)</span>
                                </div>
                                <p class="card-text">Climate-controlled indoor court with professional sound system.</p>
                                <div class="mt-auto">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="text-success fw-bold fs-5">$35/hour</span>
                                        <span class="badge bg-success">Available</span>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <a href="{{ route('courts.show', 4) }}" class="btn btn-outline-success">View Details</a>
                                        <a href="{{ route('bookings.create', ['court' => 4]) }}" class="btn btn-success">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Promotional Banners -->
<section class="py-3">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-blocks">
                    <div class="banner-ad d-flex align-items-center large bg-info block-1" style="background: url('{{ asset('frontend-assets/images/tournament-banner.jpg') }}') no-repeat; background-size: cover;">
                        <div class="banner-content p-5">
                            <div class="content-wrapper text-light">
                                <h3 class="banner-title text-light">Join Our Tournament</h3>
                                <p>Register your team now for the upcoming championship</p>
                                <a href="{{ route('tournaments.register') }}" class="btn-link text-white">Register Now</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="banner-ad bg-success-subtle block-2" style="background:url('{{ asset('frontend-assets/images/coaching-banner.jpg') }}') no-repeat;background-size: cover">
                        <div class="banner-content align-items-center p-5">
                            <div class="content-wrapper text-light">
                                <h3 class="banner-title text-light">Professional Coaching</h3>
                                <p>Improve your skills with certified coaches</p>
                                <a href="{{ route('coaching.index') }}" class="btn-link text-white">Learn More</a>
                            </div>
                        </div>
                    </div>

                    <div class="banner-ad bg-danger block-3" style="background:url('{{ asset('frontend-assets/images/membership-banner.jpg') }}') no-repeat;background-size: cover">
                        <div class="banner-content align-items-center p-5">
                            <div class="content-wrapper text-light">
                                <h3 class="banner-title text-light">Premium Membership</h3>
                                <p>Get exclusive discounts and priority booking</p>
                                <a href="{{ route('membership.plans') }}" class="btn-link text-white">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Tournaments -->
<section id="tournaments" class="py-5">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header d-flex justify-content-between my-4">
                    <h2 class="section-title">Upcoming Tournaments</h2>
                    <div class="d-flex align-items-center">
                        <a href="{{ route('tournaments.index') }}" class="btn btn-success me-2">View All</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="tournament-card card h-100">
                    <img src="{{ asset('frontend-assets/images/tournament-1.jpg') }}" class="card-img-top" alt="Championship">
                    <div class="card-body">
                        <h5 class="card-title">Summer Championship 2024</h5>
                        <p class="card-text">Join the biggest futsal tournament of the year with teams from across the region.</p>
                        <div class="tournament-info">
                            <div class="d-flex justify-content-between mb-2">
                                <span><i class="fas fa-calendar"></i> June 15-30, 2024</span>
                                <span class="badge bg-success">Open</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span><i class="fas fa-users"></i> 32 Teams Max</span>
                                <span><i class="fas fa-trophy"></i> $5,000 Prize</span>
                            </div>
                        </div>
                        <a href="{{ route('tournaments.show', 1) }}" class="btn btn-success w-100">Register Team</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="tournament-card card h-100">
                    <img src="{{ asset('frontend-assets/images/tournament-2.jpg') }}" class="card-img-top" alt="Youth League">
                    <div class="card-body">
                        <h5 class="card-title">Youth League U-18</h5>
                        <p class="card-text">Development tournament for young players under 18 years old.</p>
                        <div class="tournament-info">
                            <div class="d-flex justify-content-between mb-2">
                                <span><i class="fas fa-calendar"></i> July 5-20, 2024</span>
                                <span class="badge bg-warning text-dark">Filling</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span><i class="fas fa-users"></i> 16 Teams Max</span>
                                <span><i class="fas fa-trophy"></i> $2,000 Prize</span>
                            </div>
                        </div>
                        <a href="{{ route('tournaments.show', 2) }}" class="btn btn-success w-100">Register Team</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="tournament-card card h-100">
                    <img src="{{ asset('frontend-assets/images/tournament-3.jpg') }}" class="card-img-top" alt="Corporate Cup">
                    <div class="card-body">
                        <h5 class="card-title">Corporate Cup 2024</h5>
                        <p class="card-text">Exclusive tournament for corporate teams and company employees.</p>
                        <div class="tournament-info">
                            <div class="d-flex justify-content-between mb-2">
                                <span><i class="fas fa-calendar"></i> Aug 10-25, 2024</span>
                                <span class="badge bg-info">Corporate</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span><i class="fas fa-users"></i> 24 Teams Max</span>
                                <span><i class="fas fa-trophy"></i> $3,000 Prize</span>
                            </div>
                        </div>
                        <a href="{{ route('tournaments.show', 3) }}" class="btn btn-success w-100">Register Team</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section>
    <div class="container-lg">
        <div class="bg-success text-light py-5 my-5 rounded-3" style="background: url('{{ asset('frontend-assets/images/newsletter-bg.jpg') }}') no-repeat; background-size: cover;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5 p-3">
                        <div class="section-header">
                            <h2 class="section-title display-5 text-light">Get 20% Discount on your first booking</h2>
                        </div>
                        <p>Join our community and get exclusive offers and updates.</p>
                    </div>
                    <div class="col-md-5 p-3">
                        <form action="{{ route('newsletter.subscribe') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label d-none">Name</label>
                                <input type="text" class="form-control form-control-md rounded-0" name="name" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label d-none">Email</label>
                                <input type="email" class="form-control form-control-md rounded-0" name="email" id="email" placeholder="Email Address" required>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-dark btn-md rounded-0">Subscribe & Get Discount</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recent Bookings -->
<section id="recent-bookings" class="py-5">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header d-flex justify-content-between my-4">
                    <h2 class="section-title">Recent Activity</h2>
                    <div class="d-flex align-items-center">
                        <a href="{{ route('bookings.index') }}" class="btn btn-success me-2">View All Bookings</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="activity-feed">
                    <div class="activity-item d-flex align-items-center p-3 border-bottom">
                        <div class="activity-icon bg-success text-white rounded-circle p-2 me-3">
                            <svg width="20" height="20"><use xlink:href="#booking"></use></svg>
                        </div>
                        <div class="activity-content flex-grow-1">
                            <h6 class="mb-1">Team Alpha booked Venue A</h6>
                            <small class="text-muted">Premium venue for 2 hours • 5 minutes ago</small>
                        </div>
                        <span class="badge bg-success">$60</span>
                    </div>
                    <div class="activity-item d-flex align-items-center p-3 border-bottom">
                        <div class="activity-icon bg-info text-white rounded-circle p-2 me-3">
                            <svg width="20" height="20"><use xlink:href="#trophy"></use></svg>
                        </div>
                        <div class="activity-content flex-grow-1">
                            <h6 class="mb-1">New team registered for Summer Championship</h6>
                            <small class="text-muted">FC Warriors joined the tournament • 15 minutes ago</small>
                        </div>
                        <span class="badge bg-info">Tournament</span>
                    </div>
                    <div class="activity-item d-flex align-items-center p-3 border-bottom">
                        <div class="activity-icon bg-warning text-dark rounded-circle p-2 me-3">
                            <svg width="20" height="20"><use xlink:href="#team"></use></svg>
                        </div>
                        <div class="activity-content flex-grow-1">
                            <h6 class="mb-1">Lightning FC completed their training session</h6>
                            <small class="text-muted">Venue C training session • 1 hour ago</small>
                        </div>
                        <span class="badge bg-warning text-dark">Training</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest News & Updates -->
<section id="latest-blog" class="pb-4">
    <div class="container-lg">
        <div class="row">
            <div class="section-header d-flex align-items-center justify-content-between my-4">
                <h2 class="section-title">Latest News & Updates</h2>
                <a href="{{ route('news.index') }}" class="btn btn-success">View All</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <article class="post-item card border-0 shadow-sm p-3">
                    <div class="image-holder zoom-effect">
                        <a href="{{ route('news.show', 1) }}">
                            <img src="{{ asset('frontend-assets/images/news-1.jpg') }}" alt="news" class="card-img-top">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                            <div class="meta-date"><svg width="16" height="16"><use xlink:href="#calendar"></use></svg>{{ date('d M Y') }}</div>
                            <div class="meta-categories"><svg width="16" height="16"><use xlink:href="#trophy"></use></svg>Tournament</div>
                        </div>
                        <div class="post-header">
                            <h3 class="post-title">
                                <a href="{{ route('news.show', 1) }}" class="text-decoration-none">Summer Championship Registration Now Open</a>
                            </h3>
                            <p>The biggest futsal tournament of the year is accepting team registrations. Don't miss your chance to compete for the championship title...</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="post-item card border-0 shadow-sm p-3">
                    <div class="image-holder zoom-effect">
                        <a href="{{ route('news.show', 2) }}">
                            <img src="{{ asset('frontend-assets/images/news-2.jpg') }}" alt="news" class="card-img-top">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                            <div class="meta-date"><svg width="16" height="16"><use xlink:href="#calendar"></use></svg>{{ date('d M Y', strtotime('-2 days')) }}</div>
                            <div class="meta-categories"><svg width="16" height="16"><use xlink:href="#venue"></use></svg>Facilities</div>
                        </div>
                        <div class="post-header">
                            <h3 class="post-title">
                                <a href="{{ route('news.show', 2) }}" class="text-decoration-none">New Premium Court Now Available</a>
                            </h3>
                            <p>We're excited to announce the opening of our newest premium futsal court with state-of-the-art facilities and professional lighting...</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="post-item card border-0 shadow-sm p-3">
                    <div class="image-holder zoom-effect">
                        <a href="{{ route('news.show', 3) }}">
                            <img src="{{ asset('frontend-assets/images/news-3.jpg') }}" alt="news" class="card-img-top">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                            <div class="meta-date"><svg width="16" height="16"><use xlink:href="#calendar"></use></svg>{{ date('d M Y', strtotime('-5 days')) }}</div>
                            <div class="meta-categories"><svg width="16" height="16"><use xlink:href="#team"></use></svg>Coaching</div>
                        </div>
                        <div class="post-header">
                            <h3 class="post-title">
                                <a href="{{ route('news.show', 3) }}" class="text-decoration-none">Professional Coaching Programs Available</a>
                            </h3>
                            <p>Improve your futsal skills with our certified professional coaches. Individual and team training sessions now available for all skill levels...</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- Mobile App Section -->
<section class="pb-4 my-4">
    <div class="container-lg">
        <div class="bg-success pt-5 rounded-5">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-4">
                        <h2 class="mt-5 text-white">Download FutBook App</h2>
                        <p class="text-white">Book venues on the go, manage your games, and stay connected with your team.</p>
                        <div class="d-flex gap-2 flex-wrap mb-5">
                            <a href="#" title="App store"><img src="{{ asset('frontend-assets/images/app-store.png') }}" alt="app-store"></a>
                            <a href="#" title="Google Play"><img src="{{ asset('frontend-assets/images/google-play.png') }}" alt="google-play"></a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('frontend-assets/images/futBook-app-mockup.png') }}" alt="phone" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Popular Searches -->
<section class="py-4">
    <div class="container-lg">
        <h2 class="my-4">Popular Searches</h2>
        <a href="{{ route('courts.search', 'premium-venues') }}" class="btn btn-outline-success me-2 mb-2">Premium Courts</a>
        <a href="{{ route('courts.search', 'indoor-fuBook') }}" class="btn btn-outline-success me-2 mb-2">Indoor FutBook Courts</a>
        <a href="{{ route('courts.search', 'weekend-booking') }}" class="btn btn-outline-success me-2 mb-2">Weekend Booking</a>
        <a href="{{ route('tournaments.search', 'summer-championship') }}" class="btn btn-outline-success me-2 mb-2">Summer Championship</a>
        <a href="{{ route('coaching.search', 'youth-training') }}" class="btn btn-outline-success me-2 mb-2">Youth Training</a>
        <a href="{{ route('courts.search', 'night-games') }}" class="btn btn-outline-success me-2 mb-2">Night Games</a>
        <a href="{{ route('teams.search', 'team-registration') }}" class="btn btn-outline-success me-2 mb-2">Team Registration</a>
        <a href="{{ route('courts.search', 'hourly-booking') }}" class="btn btn-outline-success me-2 mb-2">Hourly Booking</a>
        <a href="{{ route('tournaments.search', 'corporate-cup') }}" class="btn btn-outline-success me-2 mb-2">Corporate Cup</a>
    </div>
</section>

<!-- Features Section -->
<section class="py-5">
    <div class="container-lg">
        <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-5">
            <div class="col">
                <div class="card mb-3 border border-success p-3">
                    <div class="text-success mb-3">
                        <svg width="32" height="32"><use xlink:href="#booking"></use></svg>
                    </div>
                    <div class="card-body p-0">
                        <h5>Instant Booking</h5>
                        <p class="card-text">Book your venue instantly with real-time availability checking.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3 border border-success p-3">
                    <div class="text-success mb-3">
                        <svg width="32" height="32"><use xlink:href="#venue"></use></svg>
                    </div>
                    <div class="card-body p-0">
                        <h5>Premium Facilities</h5>
                        <p class="card-text">Professional-grade venues with modern amenities and equipment.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3 border border-success p-3">
                    <div class="text-success mb-3">
                        <svg width="32" height="32"><use xlink:href="#trophy"></use></svg>
                    </div>
                    <div class="card-body p-0">
                        <h5>Tournament Management</h5>
                        <p class="card-text">Organize and participate in exciting futsal tournaments.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3 border border-success p-3">
                    <div class="text-success mb-3">
                        <svg width="32" height="32"><use xlink:href="#team"></use></svg>
                    </div>
                    <div class="card-body p-0">
                        <h5>Team Management</h5>
                        <p class="card-text">Manage your team, track statistics, and coordinate games.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3 border border-success p-3">
                    <div class="text-success mb-3">
                        <svg width="32" height="32"><use xlink:href="#time"></use></svg>
                    </div>
                    <div class="card-body p-0">
                        <h5>24/7 Support</h5>
                        <p class="card-text">Round-the-clock customer support for all your booking needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection