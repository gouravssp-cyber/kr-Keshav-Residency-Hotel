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
'name' => 'Twin Room',
'description' => 'This air-conditioned twin room includes a flat-screen TV with cable channels, a private bathroom, and a balcony with city views. The unit offers 2 beds.',
'discount' => '55% OFF',
'price' => '₹6,120',
'url' => 'room-details.html',
'image' => 'images/rooms/twin-room.jpg',
'badge' => null,
'image_side' => 'left',
'features' => [
['icon' => 'fa-bed', 'label' => '2 Single Beds'],
['icon' => 'fa-users', 'label' => '2 Guests'],
['icon' => 'fa-expand', 'label' => '28 m² Room'],
['icon' => 'fa-wifi', 'label' => 'Free WiFi'],
['icon' => 'fa-tv', 'label' => 'Flat-screen TV'],
['icon' => 'fa-snowflake', 'label' => 'Air Conditioning'],
['icon' => 'fa-building', 'label' => 'City View'],
['icon' => 'fa-bath', 'label' => 'Private Bathroom'],
],
],

[
'name' => 'Deluxe Double Room',
'description' => 'This air-conditioned double room features a flat-screen TV, private bathroom, balcony with city views and comfortable bedding. The unit has 1 bed.',
'discount' => '55% OFF',
'price' => '₹6,750',
'url' => 'room-details.html',
'image' => 'images/rooms/deluxe-double-room.jpg',
'badge' => 'Popular',
'image_side' => 'right',
'features' => [
['icon' => 'fa-bed', 'label' => '1 Extra Large Double Bed'],
['icon' => 'fa-users', 'label' => '2 Guests'],
['icon' => 'fa-expand', 'label' => '23 m² Room'],
['icon' => 'fa-wifi', 'label' => 'Free WiFi'],
['icon' => 'fa-tv', 'label' => 'Flat-screen TV'],
['icon' => 'fa-snowflake', 'label' => 'Air Conditioning'],
['icon' => 'fa-building', 'label' => 'City View'],
['icon' => 'fa-door-open', 'label' => 'Balcony'],
],
],

[
'name' => 'Deluxe Triple Room',
'description' => 'The spacious air-conditioned triple room features a flat-screen TV, electric kettle, dressing room and tiled floor. The unit has 2 beds.',
'discount' => '55% OFF',
'price' => '₹7,380',
'url' => 'room-details.html',
'image' => 'images/rooms/deluxe-triple-room.jpg',
'badge' => null,
'image_side' => 'left',
'features' => [
['icon' => 'fa-bed', 'label' => '2 Double Beds'],
['icon' => 'fa-users', 'label' => '3 Guests'],
['icon' => 'fa-expand', 'label' => '33 m² Room'],
['icon' => 'fa-wifi', 'label' => 'Free WiFi'],
['icon' => 'fa-tv', 'label' => 'Flat-screen TV'],
['icon' => 'fa-snowflake', 'label' => 'Air Conditioning'],
['icon' => 'fa-bolt', 'label' => 'Electric Kettle'],
['icon' => 'fa-temperature-half','label'=>'Heating'],
],
],

[
'name' => 'Standard Double Room',
'description' => 'The double room features air conditioning, wardrobe, electric kettle and dressing room. The unit has 1 bed.',
'discount' => '55% OFF',
'price' => '₹7,200',
'url' => 'room-details.html',
'image' => 'images/rooms/standard-double-room.jpg',
'badge' => null,
'image_side' => 'right',
'features' => [
['icon' => 'fa-bed', 'label' => '1 Double Bed'],
['icon' => 'fa-users', 'label' => '2 Guests'],
['icon' => 'fa-expand', 'label' => '23 m² Room'],
['icon' => 'fa-wifi', 'label' => 'Free WiFi'],
['icon' => 'fa-snowflake', 'label' => 'Air Conditioning'],
['icon' => 'fa-fan', 'label' => 'Fan'],
['icon' => 'fa-shirt', 'label' => 'Dressing Room'],
['icon' => 'fa-kettle', 'label' => 'Electric Kettle'],
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
                                <a href="/rooms"><img class="img-fluid d-block" src="{{ $room['image'] }}" alt=""></a>
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
                                    <a class="btn btn-new btn-primary rounded-pill" href="/rooms">
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
                                    <a class="btn btn-new btn-primary rounded-pill" href="/rooms">
                                        <span class="btn-text"><span>Details</span></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="room-item-img rounded-5">
                                <a href="/rooms"><img class="img-fluid d-block" src="{{ $room['image'] }}" alt=""></a>
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