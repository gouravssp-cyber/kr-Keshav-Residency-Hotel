@extends('layouts.app')

{{--
    About Page
    
    Information about the hotel and company.
    Extends the main layout and provides custom SEO metadata.
--}}

@section('content')


<!-- Page Header
		============================================= -->
<section class="page-header page-header-text-light py-0 mb-0">
    <div class="hero-wrap py-5">
        <div class="hero-mask opacity-6 bg-black"></div>
        <div class="hero-bg hero-bg-scroll" style="background-image:url('images/slider/slide-2.jpg');"></div>
        <div class="hero-content py-2 py-lg-4 my-2 my-md-4">
            <div class="container text-center mt-5 pt-5 pb-2">
                <h1 class="text-17 mb-4 wow fadeInUp">About Us</h1>
                <ul class="breadcrumb justify-content-center mb-0 wow fadeInUp" data-wow-delay=".2s">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Page Header end -->

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
                    <img class="img-fluid rounded-5" src="images/about.jpg" alt="Keshav Residency Hotel">

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
                <img class=\"img-fluid rounded-5\" src=\"{{ asset('img/front-img.png') }}\" alt=\"Pure vegetarian dining at Keshav Residency\">
            </div>
        </div>

        <!-- Banquet Hall -->
        <div class="row gx-5 gy-4 gy-lg-5">
            <div class="col-lg-6 text-center wow fadeInLeft">
                <img class=\"img-fluid rounded-5\" src=\"{{ asset('img/enterence.png') }}\" alt=\"Banquet and event venue at Keshav Residency\">
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
    <div class="hero-bg jarallax" style="background-image:url('images/slider/slide-2.jpg');"></div>
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
@endsection