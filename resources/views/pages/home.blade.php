@extends('layouts.app')

{{--
    Home Page
    
    The landing page of the application.
    Extends the main layout and provides custom SEO metadata.
--}}

@section('content')

<!-- Content
		============================================= -->
<div id="content" role="main">

    <!-- Intro
			============================================= -->
    <section class="hero-wrap">
        <div class="hero-mask bg-dark opacity-6"></div>
        <div class="hero-bg" style="background-image:url('{{ asset("images/slider/slide-1.jpg") }}');"></div>
        <div class="hero-content section pb-0 d-flex flex-column min-vh-100">
            <div class="container my-auto py-5 text-center">
                <p class="text-3 text-light text-uppercase fw-600 ls-2 wow fadeInUp">
                    <span class="rounded-pill border border-white border-opacity-50 px-3 py-1">Luxury Hotel Experience</span>
                </p>
                <h1 class="heading-font-family text-19 fw-700 text-white wow fadeInUp" data-wow-delay=".2s">A Divine Experience<br>The Mist Lifestyle</h1>

                <!-- Booking Form -->
                <form id="bookingHotels" method="post">
                    <div class="intro-booking-form bg-black bg-opacity-75 rounded-pill p-4 p-lg-3 mt-4 wow fadeInUp" data-wow-delay=".4s">
                        <div class="row gy-3 gx-lg-0 input-group">
                            <div class="col-md-6 col-lg">
                                <div class="position-relative">
                                    <input id="hotelsCheckIn" type="text" class="form-control rounded-pill" required placeholder="Check In">
                                    <span class="icon-inside"><i class="fa-regular fa-calendar-alt"></i></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg">
                                <div class="position-relative">
                                    <input id="hotelsCheckOut" type="text" class="form-control rounded-pill" required placeholder="Check Out">
                                    <span class="icon-inside"><i class="fa-regular fa-calendar-alt"></i></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg">
                                <select class="form-select rounded-pill h-100" id="adults" required="">
                                    <option value="">Adults</option>
                                    <option>1 Adult</option>
                                    <option>2 Adults</option>
                                    <option>3 Adults</option>
                                    <option>4 Adults</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-lg">
                                <select class="form-select rounded-pill h-100" id="child" required="">
                                    <option value="">Children</option>
                                    <option>1 Child</option>
                                    <option>2 Children</option>
                                    <option>3 Children</option>
                                    <option>4 Children</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-lg">
                                <select class="form-select rounded-pill h-100" id="room" required="">
                                    <option value="">Select Room</option>
                                    <option>1 Room</option>
                                    <option>2 Rooms</option>
                                    <option>3 Rooms</option>
                                    <option>4 Rooms</option>
                                    <option>5 Rooms</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-lg col-xl-auto d-grid">
                                <button class="btn btn-primary text-nowrap rounded-pill" type="submit">Check Now</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Booking Form end -->
            </div>
        </div>
    </section>
    <!-- Intro end -->
    <!-- About
============================================= -->
    <section class="section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInLeft">
                    <!-- Heading -->
                    <p><span class="text-3 text-uppercase fw-600 rounded-pill border border-dark border-opacity-10 px-3 py-1">About Keshav Residency Hotel</span></p>
                    <h2 class="heading-font-family text-13 fw-600 lh-sm mb-4">
                        Comfortable <span class="text-primary">hotel stays</span> and venue facilities in Gurugram
                    </h2>
                    <!-- Heading End -->

                    <p class="text-5 text-body-secondary">
                        Keshav Residency Hotel is a comfortable and well-located hospitality destination in Sector 46, Gurugram, offering a balanced stay experience for both business and leisure guests.
                    </p>

                    <p class="text-body-secondary mb-4">
                        Located at 1105P, Huda Colony, Sector 46, Gurugram, Haryana 122002, the hotel offers well-maintained rooms, pure vegetarian dining, and venue facilities for gatherings, celebrations, meetings, and social functions, with a strong focus on cleanliness, comfort, and guest satisfaction.
                    </p>

                    <div class="d-inline-flex align-items-center gap-4">
                        <!-- Button -->
                        <a class="btn btn-new btn-primary rounded-pill" href="about-us.php">
                            <span class="btn-text"><span>Know More</span></span>
                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                        </a>

                        <!-- Call us -->
                        <div class="d-flex align-items-center gap-3 ms-sm-2 h-100">
                            <div class="text-body-tertiary text-7 opacity-7 d-inline-flex">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <div class="vr my-1 opacity-1"></div>
                            <div class="text-start">
                                <div class="text-2 fw-600 text-body-tertiary mb-1">Call us for Inquiry:</div>
                                <h3 class="text-4 fw-700 mb-0">+91 9818433468</h3>
                            </div>
                        </div>
                        <!-- Call us End -->
                    </div>
                </div>

                <div class="col-lg-6 text-center wow fadeInRight">
                    <div class="position-relative d-inline-flex">
                        <img class="img-fluid rounded-5" src="{{ asset('images/about.jpg') }}" alt="Keshav Residency Hotel">

                        <div class="position-absolute top-0 end-0">
                            <!-- Circle Text -->
                            <div class="circle-text bg-white border border-2 border-primary mt-5 me-5 wow bounceIn" data-wow-delay="0.5s">
                                <svg viewBox="0 0 500 500">
                                    <defs>
                                        <path id="circlePath" d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250"></path>
                                    </defs>
                                    <text class="text-uppercase fw-700 ls-4">
                                        <textPath xlink:href="#circlePath">Comfort Stay ✦ Pure Veg ✦ Venue ✦</textPath>
                                    </text>
                                </svg>
                                <div class="circle-icon text-bg-primary translate-middle">
                                    <i class="fa-solid fa-hotel"></i>
                                </div>
                            </div>
                            <!-- Circle Text End -->
                        </div>

                        <div class="position-absolute bottom-0 start-50 translate-middle-x w-100">
                            <div class="text-light text-start bg-dark bg-opacity-50 rounded-5 m-5 p-4 wow fadeInUp">
                                A peaceful and affordable hospitality experience for families, travellers, and events in Sector 46, Gurugram.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About end -->

    <!-- Rooms & Suites
			============================================= -->
    <section class="section bg-light-1">
        <div class="container">
            <!-- Heading -->
            <div class="mx-auto text-center mb-5">
                <p class="wow fadeInUp"><span class="text-3 text-uppercase fw-600 rounded-pill border border-dark border-opacity-10 px-3 py-1">Rooms & Suites</span></p>
                <h2 class="heading-font-family text-13 fw-600 lh-sm wow fadeInUp" data-wow-delay=".2s">Revel in the <span class="text-primary">Unmatched<br class="d-none d-md-block"> Comfort</span> with The Mist</h2>
            </div>
            <!-- Heading End -->

            <div class="room-items-wrap wow fadeInUp">
                <div class="row justify-content-center g-4">
                    @forelse($rooms ?? [] as $room)
                    @php
                    $roomImage = $room->coverImage()->first() ?? $room->images()->first();
                    $imageUrl = $roomImage ? $roomImage->url : asset('images/rooms/placeholder.jpg');
                    @endphp
                    <div class="col-md-6 @if($loop->iteration > 3) col-lg-4 @endif">
                        <div class="room-item rounded-5">
                            <a class="stretched-link" href="{{ route('room-detail', $room->slug) }}"></a>
                            <!-- Image -->
                            <div class="room-item-img rounded-5">
                                <img class="img-fluid d-block" src="{{ $imageUrl }}" alt="{{ $room->name }}">
                            </div>
                            <!-- Rooms Details -->
                            <div class="room-details d-flex align-items-center justify-content-between w-100 bottom-0 start-0">
                                <div>
                                    @if($room->price_on_request)
                                    <p class="text-3 fw-500 text-uppercase text-light mb-0">Contact for Rates</p>
                                    @else
                                    <p class="text-3 fw-500 text-uppercase text-light mb-0">{{ $room->currency ?? 'INR' }} {{ number_format($room->price_per_night, 0) }} / Per Night</p>
                                    @endif
                                    <h3 class="text-white text-7 fw-600 mb-0">{{ $room->name }}</h3>
                                </div>
                                <span class="details-link-icon"><i class="fa-solid fa-arrow-right"></i></span>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center">
                        <p class="text-body-secondary">No rooms available at the moment.</p>
                    </div>
                    @endforelse
                </div>
            </div>
            <div class="position-relative text-center z-1 mt-5 wow fadeInUp">
                <a class="btn btn-new btn-primary rounded-pill" href="rooms.html">
                    <span class="btn-text"><span>View all Rooms</span></span>
                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                </a>
            </div>
            <div class="text-30 text-body-tertiary fw-700 opacity-1 text-center text-nowrap position-absolute bottom-0 start-50 translate-middle-x z-0 lh-1 mb-n2 mb-sm-n3 mb-lg-n4 mb-xl-n5">The Mist</div>
        </div>
    </section>
    <!-- Rooms & Suites end -->

    <!-- Services
============================================= -->
    <section class="section">
        <div class="container">
            <!-- Heading -->
            <div class="mx-auto text-center mb-5">
                <p class="wow fadeInUp">
                    <span class="text-3 text-uppercase fw-600 rounded-pill border border-dark border-opacity-10 px-3 py-1">Services</span>
                </p>
                <h2 class="heading-font-family text-13 fw-600 lh-sm wow fadeInUp" data-wow-delay=".2s">
                    We provide <span class="text-primary">comfortable stays <br class="d-none d-md-block">and venue services</span>
                </h2>
            </div>
            <!-- Heading End -->

            <!-- Hotel Rooms -->
            <div class="row gx-5 gy-4 gy-lg-5 mb-5">
                <div class="col-lg-6 text-center wow fadeInLeft">
                    <img class="img-fluid rounded-5" src="{{ asset('img/deluxe-room.png') }}" alt="Keshav Residency hotel rooms">
                </div>
                <div class="col-lg-6 align-content-center wow fadeInRight">
                    <p>
                        <span class="d-inline-flex text-2 text-uppercase fw-500 rounded-pill border border-dark border-opacity-10 px-3">Stay With Comfort</span>
                    </p>
                    <h3 class="heading-font-family text-8 fw-600">Hotel Rooms</h3>
                    <p class="text-3 text-body-secondary">
                        Keshav Residency offers well-maintained and comfortable rooms designed for both short and long stays, with a balance of hotel convenience and a homely feel for business and leisure travellers. [web:3][web:11]
                    </p>
                    <a class="btn btn-new btn-primary rounded-pill" href="rooms.html">
                        <span class="btn-text"><span>Read More</span></span>
                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>

            <!-- Dining -->
            <div class="row gx-5 gy-4 gy-lg-5 mb-5">
                <div class="col-lg-6 align-content-center order-2 order-lg-1 wow fadeInLeft">
                    <p>
                        <span class="d-inline-flex text-2 text-uppercase fw-500 rounded-pill border border-dark border-opacity-10 px-3">Pure Veg Dining</span>
                    </p>
                    <h3 class="heading-font-family text-8 fw-600 mb-3">Restaurant & Food</h3>
                    <p class="text-3 text-body-secondary">
                        The hotel is known for serving pure vegetarian food and also offers authentic Jain food, prepared with hygiene and care to give guests a fresh and satisfying dining experience.
                    </p>
                    <a class="btn btn-new btn-primary rounded-pill" href="restaurant.html">
                        <span class="btn-text"><span>Read More</span></span>
                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>
                <div class="col-lg-6 text-center order-1 order-lg-2 wow fadeInRight">
                    <img class="img-fluid rounded-5" src="{{ asset('img/front-img.png') }}" alt="Pure vegetarian dining at Keshav Residency">
                </div>
            </div>

            <!-- Banquet Hall -->
            <div class="row gx-5 gy-4 gy-lg-5">
                <div class="col-lg-6 text-center wow fadeInLeft">
                    <img class="img-fluid rounded-5" src="{{ asset('img/enterence.png') }}" alt="Banquet and event venue at Keshav Residency">
                </div>
                <div class="col-lg-6 align-content-center wow fadeInRight">
                    <p>
                        <span class="d-inline-flex text-2 text-uppercase fw-500 rounded-pill border border-dark border-opacity-10 px-3">Celebrate With Us</span>
                    </p>
                    <h3 class="heading-font-family text-8 fw-600 mb-3">Banquet & Venue</h3>
                    <p class="text-3 text-body-secondary">
                        Keshav Residency provides banquet and event facilities for celebrations, family gatherings, meetings, and social functions, with versatile space and dedicated support for small to mid-sized events.
                    </p>
                    <a class="btn btn-new btn-primary rounded-pill" href="banquets.html">
                        <span class="btn-text"><span>Read More</span></span>
                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services end -->

    <!-- Video
			============================================= -->
    <section class="hero-wrap section">
        <div class="hero-mask opacity-5 bg-black"></div>
        <div class="hero-bg jarallax" style="background-image:url('{{ asset("images/slider/slide-2.jpg") }}');"></div>
        <div class="hero-content">
            <div class="container text-center">
                <!-- Video Button -->
                <a class="glightbox rounded-circle d-inline-flex mb-4 wow fadeInUp" href="https://www.youtube.com/embed/s8vnc9l8sz4">
                    <span class="playButton playButton-pulsing text-white bg-white bg-opacity-50"><i class="fa-solid fa-play"></i></span>
                </a>
                <h2 class="text-19 fw-600 text-white lh-sm wow fadeInUp" data-wow-delay=".2s">Enjoy Facilities of Unmatched Quality!</h2>
            </div>
        </div>
    </section>
    <!-- Video end -->

    <!-- Amenities
			============================================= -->
    <section class="section">
        <div class="container">
            <!-- Heading -->
            <div class="mx-auto text-center mb-5">
                <p class="wow fadeInUp"><span class="text-3 text-uppercase fw-600 rounded-pill border border-dark border-opacity-10 px-3 py-1">Hotel Amenities</span></p>
                <h2 class="heading-font-family text-13 fw-600 lh-sm wow fadeInUp" data-wow-delay=".2s">Our Premium, <span class="text-primary">Industry <br class="d-none d-md-block">Leading</span> Facilities</h2>
            </div>
            <!-- Heading End -->

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="featured-box style-4 bg-white rounded-5 p-4 h-100 wow fadeInUp">
                        <div class="featured-box-icon border rounded-5 text-13 shadow-none text-primary mt-3"> <i class="fa-solid fa-car"></i></div>
                        <h3 class="text-7 fw-600">Pick Up & Drop</h3>
                        <p class="text-3 text-body-secondary">Free pick up from the railway station and air port or bus stand. Well-maintained vehicles and professional drivers ensure seamless travel for guests.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="featured-box style-4 bg-white rounded-5 p-4 h-100 wow fadeInUp" data-wow-delay=".2s">
                        <div class="featured-box-icon border rounded-5 text-13 shadow-none text-primary mt-3"> <i class="fa-solid fa-wifi"></i></div>
                        <h3 class="text-7 fw-600">High Speed Wifi</h3>
                        <p class="text-3 text-body-secondary">Enjoy seamless connectivity high-speed Wi-Fi, available in all guest rooms and public areas. our network ensures fast, stable, and secure internet access at all times.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="featured-box style-4 bg-white rounded-5 p-4 h-100 wow fadeInUp" data-wow-delay=".4s">
                        <div class="featured-box-icon border rounded-5 text-13 shadow-none text-primary mt-3"> <i class="fa-solid fa-charging-station"></i></div>
                        <h3 class="text-7 fw-600">EV Charger</h3>
                        <p class="text-3 text-body-secondary">We provide convenient on-site EV charging services for our eco-conscious guests. Our fast and reliable chargers are compatible with all major electric vehicle models..</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="featured-box style-4 bg-white rounded-5 p-4 h-100 wow fadeInUp">
                        <div class="featured-box-icon border rounded-5 text-13 shadow-none text-primary mt-3"> <i class="fa-solid fa-shirt"></i></div>
                        <h3 class="text-7 fw-600">Laundry</h3>
                        <p class="text-3 text-body-secondary">Enjoy the convenience of our professional laundry service. our efficient and reliable service ensures your clothes are cleaned and pressed promptly.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="featured-box style-4 bg-white rounded-5 p-4 h-100 wow fadeInUp" data-wow-delay=".2s">
                        <div class="featured-box-icon border rounded-5 text-13 shadow-none text-primary mt-3"> <i class="fa-solid fa-water-ladder"></i></div>
                        <h3 class="text-7 fw-600">Swimming Pool</h3>
                        <p class="text-3 text-body-secondary">Dive into relaxation at our pristine swimming pool, designed for leisure, fitness, and fun. Whether you want to unwind under the sun, take a refreshing dip, or enjoy a few lap.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="featured-box style-4 bg-white rounded-5 p-4 h-100 wow fadeInUp" data-wow-delay=".2s">
                        <div class="featured-box-icon border rounded-5 text-13 shadow-none text-primary mt-3"> <i class="fa-solid fa-utensils"></i></div>
                        <h3 class="text-7 fw-600">Bar & Restaurant</h3>
                        <p class="text-3 text-body-secondary">Enjoy exceptional dining and refreshing drinks at our hotel bar and restaurant. Gourmet meals, expertly mixed cocktails, and fine wines made with fresh, locally sourced ingredients.</p>
                    </div>
                </div>
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

    <!-- Our Experience ============================================= -->
    <section class="hero-wrap section">
        <div class="hero-mask opacity-7 bg-black"></div>
        <div class="hero-bg jarallax" style="background-image:url('{{ asset("img/hero-section-bg.jpeg") }}');"></div>
        <div class="hero-content">
            <div class="container-xxl px-4">
                <div class="row g-5">
                    <div class="col-lg-6 text-center wow fadeInLeft">
                        <div class="position-relative d-inline-flex">
                            <img class="img-fluid rounded-5" src="{{ asset('img/front-img.png') }}" alt="Keshav Residency Hotel exterior">
                        </div>
                    </div>

                    <div class="col-lg-6 align-content-center wow fadeInRight">
                        <!-- Heading -->
                        <p>
                            <span class="text-3 text-light text-uppercase fw-600 rounded-pill border border-light border-opacity-25 px-3 py-1">
                                Our Hospitality
                            </span>
                        </p>
                        <h2 class="heading-font-family text-white text-13 fw-600 lh-sm mb-4">
                            A stay experience designed for <span class="text-primary">comfort, care, and convenience</span>
                        </h2>
                        <!-- Heading End -->

                        <p class="text-7 text-light fw-500 lh-sm">
                            Comfortable rooms, pure vegetarian dining, and thoughtful venue support for every guest.
                        </p>

                        <p class="text-light mb-4">
                            Keshav Residency Hotel in Sector 46, Gurugram offers affordable premium hospitality with well-designed rooms, hygienic pure vegetarian and Jain-friendly food, and versatile banquet facilities for social gatherings, meetings, and celebrations.
                        </p>

                        <p class="mb-4">
                            <a class="btn btn-new btn-primary rounded-pill" href="contact-us.html">
                                <span class="btn-text"><span>Contact Us</span></span>
                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Experience end -->

    <!-- Testimonial
			============================================= -->
    <section class="section">
        <div class="container">
            <!-- Heading -->
            <div class="mx-auto text-center mb-5">
                <p class="wow fadeInUp"><span class="text-3 text-uppercase fw-600 rounded-pill border border-dark border-opacity-10 px-3 py-1">Our Testimonials</span></p>
                <h2 class="heading-font-family text-13 fw-600 lh-sm wow fadeInUp" data-wow-delay=".2s">What Our <span class="text-primary">Client Says <br class="d-none d-md-block">About</span> Hotel The Mist</h2>
            </div>
            <!-- Heading End -->

            <div class="swiper wow fadeInUp" data-loop="true" data-autoplay="true" data-margin="30" data-items-xs="1" data-items-sm="1" data-items-md="1" data-items-lg="2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bg-white rounded-5 p-5">
                            <p class="lh-lg">"Easy to use, reasonably priced simply dummy text of the printing and typesetting industry. Quidam lisque persius interesset his et, in quot quidam possim iriure. Simply dummy text of the printing and typesetting industry.”</p>
                            <div class="d-flex align-items-center gap-3">
                                <img class="rounded-circle w-auto" src="images/testimonial/client-sm-1.jpg" alt="">
                                <div>
                                    <h3 class="text-4 fw-600 mb-1">Dennis Jacques</h3>
                                    <div class="text-3 fw-500 text-body-tertiary">From Australia</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white rounded-5 p-5">
                            <p class="lh-lg">“We hosted our anniversary celebration here, and it was simply perfect. The event team handled every detail flawlessly. Our guests are still talking about how beautiful everything was. It truly felt like a home away from home.”</p>
                            <div class="d-flex align-items-center gap-3">
                                <img class="rounded-circle w-auto" src="images/testimonial/client-sm-2.jpg" alt="">
                                <div>
                                    <h3 class="text-4 fw-600 mb-1">Patrick Cary</h3>
                                    <div class="text-3 fw-500 text-body-tertiary">From USA</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white rounded-5 p-5">
                            <p class="lh-lg">“We traveled as a family and couldn’t have asked for a better place to stay. The staff was incredibly kind, the amenities were perfect for both adults and kids, and we felt right at home the entire time.”</p>
                            <div class="d-flex align-items-center gap-3">
                                <img class="rounded-circle w-auto" src="images/testimonial/client-sm-3.jpg" alt="">
                                <div>
                                    <h3 class="text-4 fw-600 mb-1">Sarah Mitchell</h3>
                                    <div class="text-3 fw-500 text-body-tertiary">From Spain</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white rounded-5 p-5">
                            <p class="lh-lg">“As a frequent business traveler, I appreciate efficiency and comfort — and this hotel delivers both flawlessly. Fast check-in, reliable Wi-Fi, and a peaceful atmosphere made my trip productive and stress-free.”</p>
                            <div class="d-flex align-items-center gap-3">
                                <img class="rounded-circle w-auto" src="images/testimonial/client-sm-4.jpg" alt="">
                                <div>
                                    <h3 class="text-4 fw-600 mb-1">Olivia Bennett</h3>
                                    <div class="text-3 fw-500 text-body-tertiary">From United Kingdom</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="swiper-button-next mt-n5"><i class="fa-solid fa-angle-right"></i></div>
                <div class="swiper-button-prev mt-n5"><i class="fa-solid fa-angle-left"></i></div>
                <!-- Pagination (optional) -->
                <div class="swiper-pagination position-relative mt-4"></div>
            </div>

            <!-- View More Link -->
            <div class="fw-500 text-center mt-4 wow fadeInUp">
                View On <a href="#" class="fw-600 link-primary link-offset-2 link-underline-opacity-100 link-underline-opacity-0-hover">Tripadvisor</a>
            </div>
        </div>
    </section>
    <!-- Testimonial end -->


    <!-- Blog/News
			============================================= -->
    <section class="section bg-light-1">
        <div class="container">
            <!-- Heading -->
            <div class="mx-auto text-center mb-5">
                <p class="wow fadeInUp"><span class="text-3 text-uppercase fw-600 rounded-pill border border-dark border-opacity-10 px-3 py-1">News & Events</span></p>
                <h2 class="heading-font-family text-13 fw-600 lh-sm wow fadeInUp" data-wow-delay=".2s">Explore Our <span class="text-primary">Latest <br class="d-none d-md-block">News</span> and Events</h2>
            </div>
            <!-- Heading End -->

            <div class="row justify-content-center g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp">
                    <div class="blog-post card h-100 rounded-5 shadow-none border-0">
                        <a class="d-flex rounded-5 overflow-hidden" href="blog-single-post.html">
                            <img class="card-img-top rounded-5" src="images/blog/post-1.jpg" alt="">
                            <div class="position-absolute top-0 start-0 text-2 fw-600 bg-primary text-light rounded-pill px-2 py-0 mt-4 ms-4">Event</div>
                        </a>
                        <div class="card-body p-4">
                            <ul class="meta-blog text-2 mb-2">
                                <li><i class="fa-solid fa-calendar-alt"></i> 27 Nov 2025</li>
                                <li><a href="#"><i class="fa-solid fa-user"></i> Admin</a></li>
                            </ul>
                            <h3 class="title-blog text-6 lh-sm mb-2"><a class="text-6" href="blog-single-post.html">Recap of Recent Events Hosted at Our Hotel</a></h3>
                            <p class="text-3 text-body-secondary mb-1">Step inside the highlights of the unforgettable moments recently...</p>
                            <a href="blog-single-post.html" class="text-3 fw-600 link-primary link-offset-2 link-underline-opacity-100 link-underline-opacity-0-hover">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".2s">
                    <div class="blog-post card h-100 rounded-5 shadow-none border-0">
                        <a class="d-flex rounded-5 overflow-hidden" href="blog-single-post.html">
                            <img class="card-img-top rounded-5" src="images/blog/post-2.jpg" alt="">
                            <div class="position-absolute top-0 start-0 text-2 fw-600 bg-primary text-light rounded-pill px-2 py-0 mt-4 ms-4">Restaurant</div>
                        </a>
                        <div class="card-body p-4">
                            <ul class="meta-blog text-2 mb-2">
                                <li><i class="fa-solid fa-calendar-alt"></i> 14 Oct 2025</li>
                                <li><a href="#"><i class="fa-solid fa-user"></i> Admin</a></li>
                            </ul>
                            <h3 class="title-blog text-6 lh-sm mb-2"><a class="text-6" href="blog-single-post.html">Meet Our Chef: Culinary Inspiration Stories</a></h3>
                            <p class="text-3 text-body-secondary mb-1">Discover the passion, creativity, and flavors behind our kitchen...</p>
                            <a href="blog-single-post.html" class="text-3 fw-600 link-primary link-offset-2 link-underline-opacity-100 link-underline-opacity-0-hover">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".4s">
                    <div class="blog-post card h-100 rounded-5 shadow-none border-0">
                        <a class="d-flex rounded-5 overflow-hidden" href="blog-single-post.html">
                            <img class="card-img-top rounded-5" src="images/blog/post-3.jpg" alt="">
                            <div class="position-absolute top-0 start-0 text-2 fw-600 bg-primary text-light rounded-pill px-2 py-0 mt-4 ms-4">Travel</div>
                        </a>
                        <div class="card-body p-4">
                            <ul class="meta-blog text-2 mb-2">
                                <li><i class="fa-solid fa-calendar-alt"></i> 15 Jul 2025</li>
                                <li><a href="#"><i class="fa-solid fa-user"></i> Admin</a></li>
                            </ul>
                            <h3 class="title-blog text-6 lh-sm mb-2"><a class="text-6" href="blog-single-post.html">Business Travel Tips for a Productive Stay</a></h3>
                            <p class="text-3 text-body-secondary mb-1">Make the most of every work trip with our expert tips designed..</p>
                            <a href="blog-single-post.html" class="text-3 fw-600 link-primary link-offset-2 link-underline-opacity-100 link-underline-opacity-0-hover">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5 wow fadeInUp">
                <a class="btn btn-new btn-primary rounded-pill" href="blog.html">
                    <span class="btn-text"><span>View all News</span></span>
                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                </a>
            </div>
        </div>
    </section>
    <!-- Blog/News end -->


    <!-- Check Availability
============================================= -->
    <section class="section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 align-content-center wow fadeInLeft">
                    <!-- Heading -->
                    <p>
                        <span class="text-3 text-uppercase fw-600 rounded-pill border border-dark border-opacity-10 px-3 py-1">
                            Plan Your Stay
                        </span>
                    </p>
                    <h2 class="heading-font-family text-13 fw-600 lh-sm mb-4">
                        Book your <span class="text-primary">comfortable stay</span> in Gurugram
                    </h2>
                    <!-- Heading End -->

                    <p class="text-body-secondary mb-4">
                        Reserve your stay at Keshav Residency Hotel in Sector 46, Gurugram and enjoy comfortable rooms, hygienic hospitality, and a convenient location for both business and family travel.
                    </p>

                    <div class="d-inline-flex align-items-center gap-4">
                        <!-- Call us -->
                        <div class="d-flex align-items-center gap-3 ms-sm-2 h-100">
                            <div class="text-primary text-7 d-inline-flex">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <div class="vr my-1 opacity-1"></div>
                            <div class="text-start">
                                <div class="text-2 fw-600 text-body-tertiary mb-1">Call us for Inquiry:</div>
                                <h3 class="text-4 fw-700 mb-0">+91 9818433468</h3>
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
                                        <select id="searchAdults" class="form-select rounded-pill h-100" required>
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
                                        <select id="searchChild" class="form-select rounded-pill h-100" required>
                                            <option value="">Children</option>
                                            <option>0 Child</option>
                                            <option>1 Child</option>
                                            <option>2 Children</option>
                                            <option>3 Children</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label text-3 fw-600" for="searchRoom">Select Room:</label>
                                    <div>
                                        <select id="searchRoom" class="form-select rounded-pill h-100" required>
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