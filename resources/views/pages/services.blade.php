@extends('layouts.app')

{{-- 
    Services Page
    
    Displays all services and amenities offered by the hotel.
    Extends the main layout and provides custom SEO metadata.
--}}

@section('content')
    <div class="services-page">
        <!-- Page Header -->
        <section class="page-header bg-light py-5 mb-5">
            <div class="container">
                <h1 class="display-4 fw-bold mb-3">Our Services</h1>
                <p class="lead text-muted">Explore our comprehensive range of hospitality services and amenities</p>
            </div>
        </section>

        <!-- Services Grid -->
        <section class="services-grid py-5 mb-5">
            <div class="container">
                <div class="row g-4">
                    <!-- Service Card 1 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card card h-100 shadow-sm border-0">
                            <div class="card-body">
                                <div class="service-icon mb-3">
                                    <i class="fas fa-bed fa-2x text-primary"></i>
                                </div>
                                <h5 class="card-title">Accommodation</h5>
                                <p class="card-text text-muted">
                                    Comfortable and luxurious rooms designed for your comfort and convenience.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Service Card 2 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card card h-100 shadow-sm border-0">
                            <div class="card-body">
                                <div class="service-icon mb-3">
                                    <i class="fas fa-utensils fa-2x text-primary"></i>
                                </div>
                                <h5 class="card-title">Dining</h5>
                                <p class="card-text text-muted">
                                    World-class culinary experiences prepared by our expert chefs.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Service Card 3 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card card h-100 shadow-sm border-0">
                            <div class="card-body">
                                <div class="service-icon mb-3">
                                    <i class="fas fa-spa fa-2x text-primary"></i>
                                </div>
                                <h5 class="card-title">Spa & Wellness</h5>
                                <p class="card-text text-muted">
                                    Rejuvenate your mind and body with our premium spa services.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Service Card 4 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card card h-100 shadow-sm border-0">
                            <div class="card-body">
                                <div class="service-icon mb-3">
                                    <i class="fas fa-dumbbell fa-2x text-primary"></i>
                                </div>
                                <h5 class="card-title">Fitness Center</h5>
                                <p class="card-text text-muted">
                                    State-of-the-art equipment and facilities for your fitness needs.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Service Card 5 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card card h-100 shadow-sm border-0">
                            <div class="card-body">
                                <div class="service-icon mb-3">
                                    <i class="fas fa-users fa-2x text-primary"></i>
                                </div>
                                <h5 class="card-title">Events & Banquets</h5>
                                <p class="card-text text-muted">
                                    Perfect venues and services for conferences, weddings, and events.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Service Card 6 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card card h-100 shadow-sm border-0">
                            <div class="card-body">
                                <div class="service-icon mb-3">
                                    <i class="fas fa-concierge-bell fa-2x text-primary"></i>
                                </div>
                                <h5 class="card-title">Concierge Service</h5>
                                <p class="card-text text-muted">
                                    Dedicated assistance for all your travel and lifestyle needs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Additional Information Section -->
        <section class="additional-services bg-light py-5">
            <div class="container">
                <h2 class="mb-4">More About Our Services</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <h5 class="mb-3">Premium Amenities</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 24/7 Room Service</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Free WiFi Throughout</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Airport Transfers</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Business Center</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="mb-3">Guest Benefits</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Loyalty Program</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Special Packages</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Early Check-in/Late Checkout</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Personalized Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
