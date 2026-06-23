@extends('layouts.app')

{{--
    About Page
    
    Information about the hotel and company.
    Extends the main layout and provides custom SEO metadata.
--}}

@php
$page = [
'title' => 'Rooms',
'hero_image' => 'images/slider/slide-2.jpg',
'breadcrumb_home' => ['label' => 'Home', 'url' => 'index.html'],
];

$hotel = [
'phone' => '(+060) 444 5346',
];

$rooms = [
[
'name' => 'Superior Rooms',
'description' => 'Our Superior Room offers a comfortable and welcoming space, ideal for business or leisure travelers.',
'discount' => '5% OFF',
'price' => 'र129',
'url' => 'room-details.html',
'image' => 'images/rooms/room-1.jpg',
'badge' => null,
'image_side' => 'left', // image on left, details on right
'features' => [
['icon' => 'fa-bed', 'label' => 'Double Bed'],
['icon' => 'fa-users', 'label' => '1-2 Persons'],
['icon' => 'fa-expand', 'label' => '215–325 sq.ft.'],
['icon' => 'fa-wifi', 'label' => 'Free WiFi'],
['icon' => 'fa-tv', 'label' => '32 Inch TV'],
['icon' => 'fa-water-ladder', 'label' => 'Swimming Pool'],
],
],
[
'name' => 'Deluxe Rooms',
'description' => 'The Deluxe Room provides extra space and added comfort for a relaxing stay. Guests can enjoy our amenities.',
'discount' => '10% OFF',
'price' => 'र149',
'url' => 'room-details.html',
'image' => 'images/rooms/room-2.jpg',
'badge' => 'Popular',
'image_side' => 'right', // details on left, image on right
'features' => [
['icon' => 'fa-bed', 'label' => 'Queen Bed'],
['icon' => 'fa-users', 'label' => '1-2 Persons'],
['icon' => 'fa-expand', 'label' => '300–450 sq.ft.'],
['icon' => 'fa-wifi', 'label' => 'Free WiFi'],
['icon' => 'fa-tv', 'label' => '32 Inch TV'],
['icon' => 'fa-water-ladder', 'label' => 'Swimming Pool'],
],
],
[
'name' => 'Premium Rooms',
'description' => 'The Premium Room offers extra space, comfort, and premium amenities for a relaxing stay.',
'discount' => '10% OFF',
'price' => 'र199',
'url' => 'room-details.html',
'image' => 'images/rooms/room-3.jpg',
'badge' => null,
'image_side' => 'left',
'features' => [
['icon' => 'fa-bed', 'label' => 'King Size Bed'],
['icon' => 'fa-users', 'label' => '3-4 Persons'],
['icon' => 'fa-expand', 'label' => '430–645 sq.ft.'],
['icon' => 'fa-wifi', 'label' => 'Free WiFi'],
['icon' => 'fa-tv', 'label' => '50 Inch TV'],
['icon' => 'fa-water-ladder', 'label' => 'Swimming Pool'],
],
],
[
'name' => 'Executive Rooms',
'description' => 'Designed for business and upscale travelers, the Executive Room combines elegance and functionality.',
'discount' => '15% OFF',
'price' => 'र249',
'url' => 'room-details.html',
'image' => 'images/rooms/room-4.jpg',
'badge' => null,
'image_side' => 'right',
'features' => [
['icon' => 'fa-bed', 'label' => 'Twin Bed'],
['icon' => 'fa-users', 'label' => '3-4 Persons'],
['icon' => 'fa-expand', 'label' => '645–1,015 sq.ft.'],
['icon' => 'fa-wifi', 'label' => 'Free WiFi'],
['icon' => 'fa-tv', 'label' => '55 Inch TV'],
['icon' => 'fa-water-ladder', 'label' => 'Swimming Pool'],
],
],
];

$amenities = [
[
'icon' => 'fa-car',
'title' => 'Pick Up & Drop',
'description' => 'Free pick up from the railway station and air port or bus stand. Well-maintained vehicles and professional drivers ensure seamless travel for guests.',
'wow_delay' => null,
],
[
'icon' => 'fa-wifi',
'title' => 'High Speed Wifi',
'description' => 'Enjoy seamless connectivity high-speed Wi-Fi, available in all guest rooms and public areas. our network ensures fast, stable, and secure internet access at all times.',
'wow_delay' => '.2s',
],
[
'icon' => 'fa-charging-station',
'title' => 'EV Charger',
'description' => 'We provide convenient on-site EV charging services for our eco-conscious guests. Our fast and reliable chargers are compatible with all major electric vehicle models..',
'wow_delay' => '.4s',
],
[
'icon' => 'fa-shirt',
'title' => 'Laundry',
'description' => 'Enjoy the convenience of our professional laundry service. our efficient and reliable service ensures your clothes are cleaned and pressed promptly.',
'wow_delay' => null,
],
[
'icon' => 'fa-water-ladder',
'title' => 'Swimming Pool',
'description' => 'Dive into relaxation at our pristine swimming pool, designed for leisure, fitness, and fun. Whether you want to unwind under the sun, take a refreshing dip, or enjoy a few lap.',
'wow_delay' => '.2s',
],
[
'icon' => 'fa-utensils',
'title' => 'Bar & Restaurant',
'description' => 'Enjoy exceptional dining and refreshing drinks at our hotel bar and restaurant. Gourmet meals, expertly mixed cocktails, and fine wines made with fresh, locally sourced ingredients.',
'wow_delay' => '.2s',
],
];

// ── Hotel Surroundings ───────────────────────────────────────
$surroundings = [
'whats_nearby' => [
'icon' => 'fa-person-walking',
'title' => "What's Nearby",
'items' => [
['name' => 'Park - Sector 47', 'distance' => '550 m'],
['name' => 'Satvir Park', 'distance' => '1 km'],
['name' => 'Colony Ground', 'distance' => '1.7 km'],
['name' => 'Park - Sector 40', 'distance' => '2.1 km'],
['name' => 'Lig Park', 'distance' => '2.4 km'],
['name' => 'Sahid Chandra Shekhar Azad Park', 'distance' => '2.4 km'],
['name' => 'Morning Walk Park', 'distance' => '2.5 km'],
['name' => 'Sector 40 Park', 'distance' => '2.5 km'],
['name' => 'Huda Park', 'distance' => '2.5 km'],
['name' => 'I Block Park', 'distance' => '2.6 km'],
],
],
'restaurants' => [
'icon' => 'fa-utensils',
'title' => 'Restaurants & Cafes',
'items' => [
['name' => 'Restaurant - Sham Restaurant', 'distance' => '450 m'],
['name' => 'Restaurant - Zamzam Restaurant', 'distance' => '500 m'],
['name' => 'Restaurant - Chamel Singh Ka Dhaba', 'distance' => '650 m'],
],
],
'attractions' => [
'icon' => 'fa-monument',
'title' => 'Top Attractions',
'items' => [
['name' => 'Qutub Minar', 'distance' => '19 km'],
],
],
'nature' => [
'icon' => 'fa-mountain-sun',
'title' => 'Natural Beauty',
'items' => [
['name' => 'Lake - Water Pond', 'distance' => '9 km'],
],
],
'transport' => [
'icon' => 'fa-train-subway',
'title' => 'Public Transport',
'items' => [
['name' => 'Train - Huda City Centre', 'distance' => '4 km'],
['name' => 'Metro - HUDA City Centre', 'distance' => '4.3 km'],
['name' => 'Metro - IFFCO Chowk', 'distance' => '6 km'],
['name' => 'Train - Sikanderpur Metro Station', 'distance' => '8 km'],
],
],
'airports' => [
'icon' => 'fa-plane',
'title' => 'Closest Airports',
'items' => [
['name' => 'Delhi International Airport', 'distance' => '19 km'],
['name' => 'Hindon Airport', 'distance' => '49 km'],
],
],
];

$surroundingsTags = [
['icon' => 'fa-utensils', 'label' => 'Food and drinks'],
['icon' => 'fa-bag-shopping', 'label' => 'Shopping'],
['icon' => 'fa-champagne-glasses', 'label' => 'Entertainment and nightlife'],
['icon' => 'fa-person-walking', 'label' => 'Guests loved walking around the neighbourhood!'],
];

// ── Travellers Are Asking (FAQ) ──────────────────────────────
$faqs = [
['question' => 'Do they serve breakfast?', 'answer' => 'Yes, a complimentary breakfast is served daily for all guests staying with us.'],
['question' => 'Can I park there?', 'answer' => 'Yes, free on-site parking is available for all guests.'],
['question' => 'Is the restaurant open?', 'answer' => 'Yes, our in-house restaurant is open for breakfast, lunch and dinner.'],
['question' => 'Is there an airport shuttle service?', 'answer' => 'Yes, we offer a pick up and drop service from the nearest airport on request.'],
['question' => 'What are the check-in and check-out times?', 'answer' => 'Check-in is from 12:00 PM and check-out is until 11:00 AM.'],
['question' => 'What restaurants, attractions, and public transport options are nearby?', 'answer' => 'See the "Hotel Surroundings" section above for a full list of nearby restaurants, attractions and transport links.'],
['question' => 'Are there rooms with a private bathroom?', 'answer' => 'Yes, every room category includes a private en-suite bathroom.'],
['question' => 'Is there a swimming pool?', 'answer' => 'Yes, guests have access to our outdoor swimming pool throughout their stay.'],
['question' => 'Is there a spa?', 'answer' => 'Yes, we offer spa and wellness services — please ask our front desk to book a slot.'],
['question' => 'Are there rooms with a balcony?', 'answer' => 'Select room categories include a private balcony — ask our team when booking.'],
];

// ── Guest Reviews ─────────────────────────────────────────────
$reviews = [
'score' => '8.9',
'rating_text' => 'Fabulous',
'count' => '131',
'categories' => [
['label' => 'Staff', 'score' => 9.7],
['label' => 'Facilities', 'score' => 9.2],
['label' => 'Cleanliness', 'score' => 9.2],
['label' => 'Comfort', 'score' => 9.1],
['label' => 'Value for money', 'score' => 9.6],
['label' => 'Location', 'score' => 8.7],
['label' => 'Free WiFi', 'score' => 10.0],
],
];
@endphp

@section('content')

<!-- Page Header
		============================================= -->
<section class="page-header page-header-text-light py-0 mb-0">
    <div class="hero-wrap py-5">
        <div class="hero-mask opacity-6 bg-black"></div>
        <div class="hero-bg hero-bg-scroll" style="background-image:url('{{ $page['hero_image'] }}');"></div>
        <div class="hero-content py-2 py-lg-4 my-2 my-md-4">
            <div class="container text-center mt-5 pt-5 pb-2">
                <h1 class="text-17 mb-4 wow fadeInUp">{{ $page['title'] }}</h1>
                <ul class="breadcrumb justify-content-center mb-0 wow fadeInUp" data-wow-delay=".2s">
                    <li><a href="{{ $page['breadcrumb_home']['url'] }}">{{ $page['breadcrumb_home']['label'] }}</a></li>
                    <li class="active">{{ $page['title'] }}</li>
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
                @foreach($rooms as $room)
                <div class="room-item bg-white rounded-5 mb-5">
                    <div class="row g-0">
                        @if($room['image_side'] === 'left')
                        {{-- Image left, details right --}}
                        <div class="col-lg-6">
                            <div class="room-item-img rounded-5">
                                <a href="{{ $room['url'] }}"><img class="img-fluid d-block" src="{{ $room['image'] }}" alt=""></a>
                                @if($room['badge'])
                                <div class="position-absolute top-0 start-0 ms-4 mt-4 px-3 py-1 text-3 fw-500 text-bg-primary rounded-pill">{{ $room['badge'] }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 align-content-center">
                            <div class="p-4 m-2">
                                <div class="room-discount d-inline-flex text-2 fw-500 rounded-pill border border-dark border-opacity-10 ms-0 mt-0 mb-2">
                                    <span class="text-primary me-1"><i class="fa-solid fa-tag"></i></span>
                                    {{ $room['discount'] }}
                                </div>
                                <h3 class="text-8 fw-600">{{ $room['name'] }}</h3>
                                <p class="text-3 text-body-secondary">{{ $room['description'] }}</p>
                                <div class="row g-2 text-3 text-body-secondary mb-3">
                                    @foreach($room['features'] as $feature)
                                    <div class="col-6 col-xl-4 d-flex align-items-center">
                                        <span class="text-primary text-5 me-2"><i class="fa-solid {{ $feature['icon'] }}"></i></span>
                                        {{ $feature['label'] }}
                                    </div>
                                    @endforeach
                                </div>
                                <hr class="opacity-1">
                                <div class="d-flex align-items-center justify-content-between w-100 bottom-0 start-0">
                                    <div class="text-7 fw-600 d-flex align-items-center gap-1">{{ $room['price'] }} <span class="text-3 fw-500 text-body-tertiary text-uppercase">/ Per Night</span></div>
                                    <a class="btn btn-new btn-primary rounded-pill" href="{{ $room['url'] }}">
                                        <span class="btn-text"><span>Details</span></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @else
                        {{-- Details left, image right --}}
                        <div class="col-lg-6 align-content-center">
                            <div class="p-4 m-2">
                                <div class="room-discount d-inline-flex text-2 fw-500 rounded-pill border border-dark border-opacity-10 ms-0 mt-0 mb-2">
                                    <span class="text-primary me-1"><i class="fa-solid fa-tag"></i></span>
                                    {{ $room['discount'] }}
                                </div>
                                <h3 class="text-8 fw-600">{{ $room['name'] }}</h3>
                                <p class="text-3 text-body-secondary">{{ $room['description'] }}</p>
                                <div class="row g-2 text-3 text-body-secondary mb-3">
                                    @foreach($room['features'] as $feature)
                                    <div class="col-6 col-xl-4 d-flex align-items-center">
                                        <span class="text-primary text-5 me-2"><i class="fa-solid {{ $feature['icon'] }}"></i></span>
                                        {{ $feature['label'] }}
                                    </div>
                                    @endforeach
                                </div>
                                <hr class="opacity-1">
                                <div class="d-flex align-items-center justify-content-between w-100 bottom-0 start-0">
                                    <div class="text-7 fw-600 d-flex align-items-center gap-1">{{ $room['price'] }} <span class="text-3 fw-500 text-body-tertiary text-uppercase">/ Per Night</span></div>
                                    <a class="btn btn-new btn-primary rounded-pill" href="{{ $room['url'] }}">
                                        <span class="btn-text"><span>Details</span></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="room-item-img rounded-5">
                                <a href="{{ $room['url'] }}"><img class="img-fluid d-block" src="{{ $room['image'] }}" alt=""></a>
                                @if($room['badge'])
                                <div class="position-absolute top-0 start-0 ms-4 mt-4 px-3 py-1 text-3 fw-500 text-bg-primary rounded-pill">{{ $room['badge'] }}</div>
                                @endif
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Rooms & Suites end -->



    <!-- Hotel Surroundings
			============================================= -->
    <section class="section bg-light-1">
        <div class="container">
            <!-- Heading -->
            <div class="d-flex flex-wrap align-items-center justify-content-between mb-4 gap-3 wow fadeInUp">
                <div>
                    <p class="mb-2"><span class="text-3 text-uppercase fw-600 rounded-pill border border-dark border-opacity-10 px-3 py-1">Know The Area</span></p>
                    <h2 class="heading-font-family text-13 fw-600 lh-sm mb-0">Hotel <span class="text-primary">Surroundings</span></h2>
                </div>
                <a class="btn btn-new btn-primary rounded-pill" href="#searchHotels">
                    <span class="btn-text"><span>See Availability</span></span>
                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                </a>
            </div>
            <!-- Heading End -->

            <!-- Area Tags -->
            <div class="d-flex flex-wrap align-items-center gap-2 gap-md-4 mb-5 wow fadeInUp" data-wow-delay=".1s">
                <span class="text-3 text-body-secondary fw-500">Guests enjoyed this area for:</span>
                @foreach($surroundingsTags as $tag)
                <span class="d-inline-flex align-items-center text-3 fw-500 text-body-secondary">
                    <span class="text-primary me-2"><i class="fa-solid {{ $tag['icon'] }}"></i></span>{{ $tag['label'] }}
                </span>
                @endforeach
            </div>
            <!-- Area Tags End -->

            <div class="row g-4">
                @foreach($surroundings as $group)
                <div class="col-md-6 col-lg-4">
                    <div class="bg-white rounded-5 p-4 h-100 wow fadeInUp">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="text-primary text-5"><i class="fa-solid {{ $group['icon'] }}"></i></span>
                            <h3 class="text-5 fw-600 mb-0">{{ $group['title'] }}</h3>
                        </div>
                        <ul class="list-unstyled mb-0">
                            @foreach($group['items'] as $item)
                            <li class="d-flex align-items-baseline justify-content-between text-3 text-body-secondary py-2 {{ !$loop->last ? 'border-bottom border-dark border-opacity-10' : '' }}">
                                <span>{{ $item['name'] }}</span>
                                <span class="text-nowrap ms-3 fw-500">{{ $item['distance'] }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>

            <p class="text-2 text-body-tertiary mt-4 mb-0 wow fadeInUp">Shortest estimated walking or driving distances displayed, actual distances may vary.</p>
        </div>
    </section>
    <!-- Hotel Surroundings end -->

    <!-- Travellers Are Asking (FAQ)
			============================================= -->
    <section class="section">
        <div class="container">
            <!-- Heading -->
            <div class="d-flex flex-wrap align-items-center justify-content-between mb-5 gap-3 wow fadeInUp">
                <div>
                    <p class="mb-2"><span class="text-3 text-uppercase fw-600 rounded-pill border border-dark border-opacity-10 px-3 py-1">Got Questions?</span></p>
                    <h2 class="heading-font-family text-13 fw-600 lh-sm mb-0">Travellers Are <span class="text-primary">Asking</span></h2>
                </div>
                <a class="btn btn-new btn-primary rounded-pill" href="#searchHotels">
                    <span class="btn-text"><span>See Availability</span></span>
                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                </a>
            </div>
            <!-- Heading End -->

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        @foreach($faqs as $index => $faq)
                        <div class="bg-white rounded-5 mb-3 overflow-hidden wow fadeInUp">
                            <h4 class="mb-0">
                                <button class="btn w-100 text-start d-flex align-items-center justify-content-between p-4 text-4 fw-500" type="button" data-bs-toggle="collapse" data-bs-target="#faq-{{ $index }}" aria-expanded="false" aria-controls="faq-{{ $index }}">
                                    {{ $faq['question'] }}
                                    <span class="text-primary text-5 flex-shrink-0 ms-3"><i class="fa-solid fa-chevron-down"></i></span>
                                </button>
                            </h4>
                            <div id="faq-{{ $index }}" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="px-4 pb-4 text-3 text-body-secondary">{{ $faq['answer'] }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="bg-white rounded-5 p-4 p-lg-5 text-center h-100 d-flex flex-column align-items-center justify-content-center wow fadeInUp" data-wow-delay=".2s">
                        <div class="text-primary text-13 mb-3"><i class="fa-solid fa-comments"></i></div>
                        <h3 class="text-6 fw-600 mb-3">Still Looking?</h3>
                        <p class="text-3 text-body-secondary mb-4">We have an instant answer to most questions.</p>
                        <a class="btn btn-new btn-primary rounded-pill" href="contact.html">
                            <span class="btn-text"><span>Ask a Question</span></span>
                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Travellers Are Asking end -->

    <!-- Guest Reviews
			============================================= -->
    <section class="section bg-light-1">
        <div class="container">
            <div class="bg-white rounded-5 p-4 p-md-5 wow fadeInUp">
                <!-- Heading -->
                <div class="d-flex flex-wrap align-items-center justify-content-between mb-4 gap-3">
                    <h2 class="heading-font-family text-13 fw-600 lh-sm mb-0">Guest <span class="text-primary">Reviews</span></h2>
                    <a class="btn btn-new btn-primary rounded-pill" href="#searchHotels">
                        <span class="btn-text"><span>See Availability</span></span>
                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>
                <!-- Heading End -->

                <div class="d-flex align-items-center gap-3 mb-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary text-white fw-700 text-6 rounded-3" style="width:56px;height:56px;">{{ $reviews['score'] }}</div>
                    <div>
                        <div class="text-5 fw-600">{{ $reviews['rating_text'] }}</div>
                        <a href="#" class="text-3 text-body-secondary text-decoration-none">{{ $reviews['count'] }} reviews · Read all reviews</a>
                    </div>
                </div>

                <div class="row g-4">
                    @foreach($reviews['categories'] as $category)
                    <div class="col-md-4">
                        <div class="d-flex align-items-center justify-content-between text-3 fw-500 mb-2">
                            <span>{{ $category['label'] }}</span>
                            <span class="fw-600">{{ $category['score'] }}</span>
                        </div>
                        <div class="progress rounded-pill" style="height:6px;">
                            <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: {{ $category['score'] * 10 }}%;" aria-valuenow="{{ $category['score'] }}" aria-valuemin="0" aria-valuemax="10"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Guest Reviews end -->



    <!-- Amenities
			============================================= -->
    <section class="section bg-light-1">
        <div class="container">
            <!-- Heading -->
            <div class="mx-auto text-center mb-5">
                <p class="wow fadeInUp"><span class="text-3 text-uppercase fw-600 rounded-pill border border-dark border-opacity-10 px-3 py-1">Hotel Amenities</span></p>
                <h2 class="heading-font-family text-13 fw-600 lh-sm wow fadeInUp" data-wow-delay=".2s">Our Premium, <span class="text-primary">Industry <br class="d-none d-md-block">Leading</span> Facilities</h2>
            </div>
            <!-- Heading End -->

            <div class="row g-4">
                @foreach($amenities as $amenity)
                <div class="col-md-6 col-lg-4">
                    <div class="featured-box style-4 bg-white rounded-5 p-4 h-100 wow fadeInUp" {{ $amenity['wow_delay'] ? ' data-wow-delay="' . $amenity['wow_delay'] . '"' : '' }}>
                        <div class="featured-box-icon border rounded-5 text-13 shadow-none text-primary mt-3"><i class="fa-solid {{ $amenity['icon'] }}"></i></div>
                        <h3 class="text-7 fw-600">{{ $amenity['title'] }}</h3>
                        <p class="text-3 text-body-secondary">{{ $amenity['description'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Button -->
            <div class="text-center mt-5 wow fadeInUp">
                <a class="btn btn-new btn-primary rounded-pill" href="amenities.html">
                    <span class="btn-text"><span>View all Amenities</span></span>
                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                </a>
            </div>
        </div>
    </section>
    <!-- Amenities end -->

    <!-- Check Availability
			============================================= -->
    <section class="section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 align-content-center wow fadeInLeft">
                    <!-- Heading -->
                    <p><span class="text-3 text-uppercase fw-600 rounded-pill border border-dark border-opacity-10 px-3 py-1">Plan Your Stay</span></p>
                    <h2 class="heading-font-family text-13 fw-600 lh-sm mb-4">Embark on <span class="text-primary">Your Bespoke</span> Experience</h2>
                    <!-- Heading End -->
                    <p class="text-body-secondary mb-4">Discover your perfect retreat. Select your dates, choose your suite, and secure your exclusive experience at The Mist luxury hotel.</p>
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