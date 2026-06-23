@extends('layouts.app')

{{--
    Services Page
    
    Displays all services and amenities offered by the hotel.
    Extends the main layout and provides custom SEO metadata.
--}}

@php
$room = [
'name' => 'Twin Room',
'tagline' => '"Comfy beds and a relaxed city view, right in the heart of Sector 46."',
'size' => '28 sq.m.',
'capacity' => '2 Persons',
'bed_type' => '2 Single Beds',
'description' => 'This air-conditioned Twin Room at Keshav Residency Hotel is designed for comfort and convenience, featuring two single beds, a flat-screen TV with cable channels, and a private bathroom. Guests can also enjoy a balcony with pleasant city views, making it an ideal choice for friends, colleagues, or family members travelling together.',
'review_note' => 'Rated 9.2 based on 34 reviews for its comfy beds, the Twin Room blends modern amenities with a homely atmosphere, making it a popular choice for both business and leisure stays in Gurugram.',
'smoking' => 'No smoking',
'checkin' => '12:00 PM',
'checkout' => '11:00 AM',
'pets' => 'Not Allowed',
'checkin_instructions' => 'We look forward to welcoming you to Keshav Residency Hotel. Check-in is available from 12:00 PM at our reception desk. Kindly present a valid photo ID upon arrival. Our staff will be pleased to assist with luggage, room access, and any special requests to ensure a smooth and comfortable arrival experience.',

'images' => [
'images/rooms/room-3.jpg',
'images/rooms/room-single-2.jpg',
'images/rooms/room-single-3.jpg',
'images/rooms/room-single-4.jpg',
],

'other_rooms' => [
['label' => 'Twin Room', 'url' => 'room-details.html'],
['label' => 'Deluxe Room', 'url' => 'room-details.html'],
['label' => 'Banquet & Venue', 'url' => 'room-details.html'],
],

'pricing' => [
[
'guest_count' => '2 Guests',
'guest_icon' => 'fa-users',
'subtitle' => 'Perfect for couples',
'original' => '₹ 13,493',
'discounted' => '₹ 6,120',
'discount' => '55% off',
'features' => ['Free WiFi included', '1 parking spot', 'High-speed internet'],
],
[
'guest_count' => '2 Guests',
'guest_icon' => 'fa-users',
'subtitle' => 'Room with view',
'original' => '₹ 15,000',
'discounted' => '₹ 6,750',
'discount' => '55% off',
'features' => ['Very good breakfast included', '1 parking spot', 'High-speed internet'],
],
[
'guest_count' => '2 Guests',
'guest_icon' => 'fa-users',
'subtitle' => 'Breakfast package',
'original' => '₹ 16,400',
'discounted' => '₹ 7,380',
'discount' => '55% off',
'features' => ['Breakfast & dinner included', 'Partially refundable', 'Pay online'],
],
[
'guest_count' => '1 Guest',
'guest_icon' => 'fa-user',
'subtitle' => 'Solo traveler',
'original' => '₹ 16,000',
'discounted' => '₹ 7,200',
'discount' => '55% off',
'features' => ['Very good breakfast ₹400', '1 parking spot', 'High-speed internet'],
],
[
'guest_count' => '2 Guests',
'guest_icon' => 'fa-users',
'subtitle' => 'Breakfast & parking deal',
'original' => '₹ 13,600',
'discounted' => '₹ 6,120',
'discount' => '55% off',
'features' => ['Very good breakfast ₹400', '1 parking spot', 'High-speed internet'],
],
[
'guest_count' => '2 Guests',
'guest_icon' => 'fa-users',
'subtitle' => 'Premium stay',
'original' => '₹ 15,000',
'discounted' => '₹ 6,750',
'discount' => '55% off',
'features' => ['Very good breakfast included', '1 parking spot', 'High-speed internet'],
],
[
'guest_count' => '3 Guests',
'guest_icon' => 'fa-users',
'subtitle' => 'Premium suite with meals',
'original' => '₹ 16,400',
'discounted' => '₹ 7,380',
'discount' => '55% off',
'features' => ['Breakfast & dinner included', 'Partially refundable', 'Pay online'],
],
[
'guest_count' => '1 Guest',
'guest_icon' => 'fa-user',
'subtitle' => 'Single room offer',
'original' => '₹ 16,000',
'discounted' => '₹ 7,200',
'discount' => '55% off',
'features' => ['Very good breakfast ₹400', 'Partially refundable', 'Pay online'],
],
],

'trust_badges' => [
['icon' => 'fa-shield-halved', 'title' => 'Secure Booking', 'text' => '100% safe and secure payment gateway'],
['icon' => 'fa-rotate-left', 'title' => 'Easy Cancellation', 'text' => 'Cancel anytime before check-in'],
['icon' => 'fa-headset', 'title' => '24/7 Support', 'text' => 'Dedicated customer support always ready'],
['icon' => 'fa-tag', 'title' => 'Best Rates', 'text' => 'Lowest price guaranteed on all rooms'],
],

'amenities' => [
['icon' => 'fa-wifi', 'label' => 'Free WiFi'],
['icon' => 'fa-tv', 'label' => 'Flat-screen TV with Cable Channels'],
['icon' => 'fa-snowflake', 'label' => 'Air Conditioning'],
['icon' => 'fa-building', 'label' => 'Balcony with City View'],
['icon' => 'fa-shower', 'label' => 'Private Bathroom'],
['icon' => 'fa-mug-hot', 'label' => 'Tea/Coffee Maker'],
['icon' => 'fa-bell-concierge', 'label' => 'Wake-up Service / Alarm Clock'],
['icon' => 'fa-utensils', 'label' => 'Pure Vegetarian Dining Available'],
],

'bathroom_features' => [
'Free Toiletries',
'Towels',
'Additional Bathroom',
'Slippers',
'Toilet',
'Toilet Paper',
'Bath or Shower',
],

'views' => [
'City View',
],

'facilities' => [
'Balcony',
'Wake Up Service / Alarm Clock',
'Air Conditioning',
'Electric Kettle',
'Linen',
'Cable Channels',
'Socket Near the Bed',
'Wake-up Service',
'Tile/Marble Floor',
'Wardrobe or Closet',
'Desk',
'Dining Area',
'Seating Area',
'Dining Table',
'TV',
'Upper Floors Accessible by Elevator',
'Ironing Facilities',
'Entire Unit Wheelchair Accessible',
'Satellite Channels',
'Air Purifiers',
'Tea/Coffee Maker',
'Single-room Air Conditioning for Guest Accommodation',
'Iron',
'Hand Sanitiser',
'Heating',
'Flat-screen TV',
'Fan',
'Extra Long Beds (> 2 metres)',
'Dressing Room',
],
];

$hotel = [
'phone' => '+91 98184 33468',
'email' => 'keshavresidency1@gmail.com',
];
@endphp

@section('content')
<!-- Page Header
		============================================= -->
<section class="page-header page-header-text-light py-0 mb-0">
    <div class="hero-wrap py-5">
        <div class="hero-mask opacity-6 bg-black"></div>
        <div class="hero-bg hero-bg-scroll" style="background-image:url('{{ $room['images'][0] }}');"></div>
        <div class="hero-content py-2 py-lg-4 my-2 my-md-4">
            <div class="container text-center mt-5 pt-5 pb-2">
                <h1 class="text-17 mb-4 wow fadeInUp">{{ $room['name'] }}</h1>
                <ul class="breadcrumb justify-content-center mb-0 wow fadeInUp" data-wow-delay=".2s">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="rooms.html">Rooms</a></li>
                    <li class="active">{{ $room['name'] }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Page Header end -->

<!-- Content
		============================================= -->
<div id="content" role="main">

    <!-- Rooms & Suites
			============================================= -->
    <section class="section">
        <div class="container">
            <div class="room-items-wrap">
                <div class="row gx-4 gy-5">
                    <div class="col-lg-8 col-xl-9">
                        <!-- Images Slider -->
                        <div class="swiper rounded-5 mb-4" data-effect="creative" data-loop="true" data-margin="30" data-items-xs="1" data-items-sm="1" data-items-md="1" data-items-lg="1">
                            <div class="swiper-wrapper">
                                @foreach($room['images'] as $image)
                                <div class="swiper-slide">
                                    <img class="img-fluid d-block rounded-5" src="{{ $image }}" alt="">
                                </div>
                                @endforeach
                            </div>
                            <!-- Navigation -->
                            <div class="swiper-button-next mt-n5"><i class="fa-solid fa-angle-right"></i></div>
                            <div class="swiper-button-prev mt-n5"><i class="fa-solid fa-angle-left"></i></div>
                            <!-- Pagination (optional) -->
                            <div class="swiper-pagination position-relative mt-3 mt-md-4"></div>
                        </div>

                        <!-- Rooms Details -->
                        <p class="mb-2"><span class="text-3 text-uppercase fw-600 rounded-pill border border-dark border-opacity-10 px-3 py-1">Stay with us</span></p>
                        <h2 class="text-13 fw-600">{{ explode(' ', $room['name'])[0] }} <span class="text-primary">{{ implode(' ', array_slice(explode(' ', $room['name']), 1)) }}</span></h2>
                        <p class="text-body-secondary">{{ $room['tagline'] }}</p>
                        <div class="row gy-2 gx-5 text-body-secondary mb-4">
                            <div class="col-6 col-md-auto d-flex align-items-center">
                                <span class="text-primary text-6 me-2"><i class="fa-solid fa-expand"></i></span>{{ $room['size'] }}
                            </div>
                            <div class="col-6 col-md-auto d-flex align-items-center">
                                <span class="text-primary text-6 me-2"><i class="fa-solid fa-users"></i></span>{{ $room['capacity'] }}
                            </div>
                            <div class="col-6 col-md-auto d-flex align-items-center">
                                <span class="text-primary text-6 me-2"><i class="fa-solid fa-bed"></i></span>{{ $room['bed_type'] }}
                            </div>
                        </div>
                        <p class="text-body-secondary lh-lg">{{ $room['description'] }}</p>
                        <p class="text-body-secondary lh-lg">{{ $room['review_note'] }}</p>


                        <!-- Room Pricing Options
			============================================= -->
                        <section class="section">
                            <div class="container">
                                <div class="row mb-5">
                                    <div class="col-12 text-center">
                                        <p><span class="text-3 text-uppercase fw-600 rounded-pill border border-dark border-opacity-10 px-3 py-1">Room Pricing</span></p>
                                        <h2 class="heading-font-family text-13 fw-600 lh-sm mb-3">Our Best <span class="text-primary">Room Rates</span></h2>
                                        <p class="text-body-secondary text-5">Select your room type and check our exclusive pricing options</p>
                                    </div>
                                </div>

                                <!-- Pricing Table -->
                                <div class="table-responsive">
                                    <table class="table table-hover align-middle">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="text-start py-4 ps-4">
                                                    <span class="text-6 fw-600">Guest Capacity</span>
                                                </th>
                                                <th class="text-center py-4">
                                                    <span class="text-6 fw-600">Price for 2 Nights</span>
                                                </th>
                                                <th class="text-start py-4">
                                                    <span class="text-6 fw-600">Room Features</span>
                                                </th>
                                                <th class="text-center py-4 pe-4">
                                                    <span class="text-6 fw-600">Action</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($room['pricing'] as $plan)
                                            <tr class="{{ !$loop->last ? 'border-bottom' : '' }}">
                                                <td class="py-4 ps-4">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="text-primary text-8"><i class="fa-solid {{ $plan['guest_icon'] }}"></i></span>
                                                        <div>
                                                            <div class="text-5 fw-600">{{ $plan['guest_count'] }}</div>
                                                            <div class="text-3 text-body-tertiary">{{ $plan['subtitle'] }}</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="py-4 text-center">
                                                    <div class="d-flex flex-column align-items-center">
                                                        <del class="text-body-tertiary text-4">{{ $plan['original'] }}</del>
                                                        <span class="text-primary text-9 fw-700">{{ $plan['discounted'] }}</span>
                                                        <span class="badge bg-success mt-2">{{ $plan['discount'] }}</span>
                                                    </div>
                                                </td>
                                                <td class="py-4">
                                                    <div class="d-flex flex-column gap-2">
                                                        @foreach($plan['features'] as $feature)
                                                        <div class="d-flex align-items-center gap-2 text-body-secondary text-4">
                                                            <i class="fa-solid fa-check text-success"></i>
                                                            <span>{{ $feature }}</span>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </td>
                                                <td class="py-4 text-center pe-4">
                                                    <button class="btn btn-new btn-sm btn-primary rounded-pill">
                                                        <span class="btn-text"><span>Book Now</span></span>
                                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Pricing Table end -->


                            </div>
                        </section>
                        <!-- Room Pricing Options end -->

                        <!-- Amenities -->
                        <h3 class="text-7 fw-600 mt-5 mb-3">Room Amenities</h3>
                        <div class="row g-3 text-body-secondary mb-3">
                            @foreach($room['amenities'] as $amenity)
                            <div class="col-md-6 d-flex align-items-center gap-3">
                                <span class="text-primary text-5"><i class="fa-solid {{ $amenity['icon'] }}"></i></span>{{ $amenity['label'] }}
                            </div>
                            @endforeach
                        </div>

                        <!-- Private Bathroom -->
                        <h3 class="text-7 fw-600 mt-5 mb-3">In Your Private Bathroom</h3>
                        <div class="row g-3 text-body-secondary mb-3">
                            @foreach($room['bathroom_features'] as $item)
                            <div class="col-md-6 d-flex align-items-center gap-3">
                                <span class="text-primary text-5"><i class="fa-solid fa-check"></i></span>{{ $item }}
                            </div>
                            @endforeach
                        </div>

                        <!-- View -->
                        <h3 class="text-7 fw-600 mt-5 mb-3">View</h3>
                        <div class="row g-3 text-body-secondary mb-3">
                            @foreach($room['views'] as $view)
                            <div class="col-md-6 d-flex align-items-center gap-3">
                                <span class="text-primary text-5"><i class="fa-solid fa-check"></i></span>{{ $view }}
                            </div>
                            @endforeach
                        </div>

                        <!-- Facilities -->
                        <h3 class="text-7 fw-600 mt-5 mb-3">Facilities</h3>
                        <div class="row g-3 text-body-secondary mb-3">
                            @foreach($room['facilities'] as $facility)
                            <div class="col-md-6 d-flex align-items-center gap-3">
                                <span class="text-primary text-5"><i class="fa-solid fa-check"></i></span>{{ $facility }}
                            </div>
                            @endforeach
                        </div>

                        <!-- Smoking -->
                        <p class="text-body-secondary mb-4"><strong class="text-body-emphasis">Smoking:</strong> {{ $room['smoking'] }}</p>

                        <!-- Rules -->
                        <h3 class="text-7 fw-600 mt-5 mb-3">Hotel Rules</h3>
                        <div class="row g-3">
                            <div class="col-6 col-sm-4 col-md-3">
                                <p class="text-2 fw-600 text-body-tertiary mb-0">Check-in:</p>
                                <div class="fw-700">{{ $room['checkin'] }}</div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3">
                                <p class="text-2 fw-600 text-body-tertiary mb-0">Check-out:</p>
                                <div class="fw-700">{{ $room['checkout'] }}</div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3">
                                <p class="text-2 fw-600 text-body-tertiary mb-0">Pets:</p>
                                <div class="fw-700">{{ $room['pets'] }}</div>
                            </div>
                        </div>

                        <!-- Instructions -->
                        <h3 class="text-7 fw-600 mt-5 mb-3">Check In Instructions</h3>
                        <p class="text-body-secondary lh-lg">{{ $room['checkin_instructions'] }}</p>
                        <hr class="opacity-1 my-4">
                        <div class="d-flex align-items-center justify-content-between w-100 bottom-0 start-0">
                            <div class="text-9 fw-600 d-flex align-items-center gap-1">Contact for Rates <span class="text-3 fw-500 text-body-tertiary text-uppercase">/ Per Night</span></div>
                            <a class="btn btn-new btn-primary rounded-pill" href="#">
                                <span class="btn-text"><span>Check Now</span></span>
                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="row">
                            <div class="col-sm-6 col-lg-12">
                                <!-- Other Link -->
                                <div class="bg-white rounded-5 p-4 mb-4">
                                    <h4 class="text-7 fw-600">Other Rooms</h4>
                                    <ul class="list-link">
                                        @foreach($room['other_rooms'] as $other)
                                        <li><a href="{{ $other['url'] }}">{{ $other['label'] }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-12">
                                <!-- Help -->
                                <div class="hero-wrap rounded-5">
                                    <div class="hero-mask opacity-6 bg-black"></div>
                                    <img class="img-fluid d-flex rounded-5" src="images/help-bg.jpg" alt="">
                                    <div class="hero-content position-absolute top-50 start-50 translate-middle w-100">
                                        <div class="container py-5 px-4 text-center">
                                            <span class="text-primary text-13"><i class="fa-solid fa-circle-question"></i></span>
                                            <h3 class="text-white text-6 fw-600 mb-3">Need Help?</h3>
                                            <div class="text-6 fw-700 text-primary mb-1">{{ $hotel['phone'] }}</div>
                                            <div class="fw-600 link-light link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover mb-3">{{ $hotel['email'] }}</div>
                                            <a class="btn btn-new btn-sm btn-dark rounded-pill" href="contact-us.html">
                                                <span class="btn-text"><span>Contact Us</span></span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Info Box -->
            <div class="mt-5 pt-5 row">
                @foreach($room['trust_badges'] as $badge)
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="bg-light-1 rounded-5 p-4 text-center h-100">
                        <div class="text-primary text-9 mb-3"><i class="fa-solid {{ $badge['icon'] }}"></i></div>
                        <h4 class="text-6 fw-600 mb-2">{{ $badge['title'] }}</h4>
                        <p class="text-body-secondary text-4 mb-0">{{ $badge['text'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        



    </section>
    <!-- Rooms & Suites end -->

    <!-- Check Availability
			============================================= -->
    <section class="section bg-light-1">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 align-content-center wow fadeInLeft">
                    <!-- Heading -->
                    <p><span class="text-3 text-uppercase fw-600 rounded-pill border border-dark border-opacity-10 px-3 py-1">Plan Your Stay</span></p>
                    <h2 class="heading-font-family text-13 fw-600 lh-sm mb-4">Embark on <span class="text-primary">Your Comfortable</span> Stay</h2>
                    <!-- Heading End -->
                    <p class="text-body-secondary mb-4">Discover a comfortable retreat in Gurugram. Select your dates, choose your room, and secure your stay at Keshav Residency Hotel.</p>
                    <div class="d-inline-flex align-items-center gap-4">
                        <!-- Call us -->
                        <div class="d-flex align-items-center gap-3 ms-sm-2 h-100">
                            <div class="text-primary text-7 d-inline-flex"><i class="fa-solid fa-phone-volume"></i></div>
                            <div class="vr my-1 opacity-1"></div>
                            <div class="text-start">
                                <div class="text-2 fw-600 text-body-tertiary mb-1">Call us for Inquiry:</div>
                                <h3 class="text-4 fw-700 mb-0">{{ $hotel['phone'] }}</h3>
                            </div>
                        </div>
                        <!-- Call us End -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-white rounded-5 px-4 px-sm-5 py-5 wow fadeInRight">
                        <h3 class="text-8 fw-600 mb-4">Check <span class="text-primary">Availability</span></h3>
                        <!-- Search Booking Form -->
                        <form id="searchHotels" method="post">
                            <div class="row gy-4 gx-3">
                                <div class="col-12">
                                    <label class="form-label text-3 fw-600" for="searchCheckIn">Check In:</label>
                                    <div class="position-relative">
                                        <input id="searchCheckIn" type="text" class="form-control rounded-pill" required placeholder="Check In">
                                        <span class="icon-inside"><i class="fa-regular fa-calendar-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label text-3 fw-600" for="searchCheckOut">Check Out:</label>
                                    <div class="position-relative">
                                        <input id="searchCheckOut" type="text" class="form-control rounded-pill" required placeholder="Check Out">
                                        <span class="icon-inside"><i class="fa-regular fa-calendar-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg">
                                    <label class="form-label text-3 fw-600" for="searchAdults">Adults:</label>
                                    <div>
                                        <select id="searchAdults" class="form-select rounded-pill h-100" required="">
                                            <option value="">Adults</option>
                                            <option>1 Adult</option>
                                            <option>2 Adults</option>
                                            <option>3 Adults</option>
                                            <option>4 Adults</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg">
                                    <label class="form-label text-3 fw-600" for="searchChild">Children:</label>
                                    <div>
                                        <select id="searchChild" class="form-select rounded-pill h-100" required="">
                                            <option value="">Children</option>
                                            <option>1 Child</option>
                                            <option>2 Children</option>
                                            <option>3 Children</option>
                                            <option>4 Children</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label text-3 fw-600" for="searchRoom">Select Room:</label>
                                    <div>
                                        <select id="searchRoom" class="form-select rounded-pill h-100" required="">
                                            <option value="">Select Room</option>
                                            <option>1 Room</option>
                                            <option>2 Rooms</option>
                                            <option>3 Rooms</option>
                                            <option>4 Rooms</option>
                                            <option>5 Rooms</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 d-grid">
                                    <button class="btn btn-new btn-primary rounded-pill" type="submit">
                                        <span class="btn-text"><span>Check Availability</span></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- Booking Form end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Check Availability end -->

</div>
<!-- Content end -->
@endsection