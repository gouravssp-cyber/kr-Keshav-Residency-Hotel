@extends('layouts.app')

{{--
    Contact Page
    
    Contact form and information for guest inquiries.
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
                <h1 class="text-17 mb-4 wow fadeInUp">Contact Us</h1>
                <ul class="breadcrumb justify-content-center mb-0 wow fadeInUp" data-wow-delay=".2s">
                    <li><a href="/home">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Page Header end -->

<!-- Content
		============================================= -->
<div id="content" role="main">

    <div class="section">
        <div class="container">

            <div class="row g-4">

                <div class="col-md-6 col-lg-4">
                    <div class="d-flex gap-3 wow fadeInUp">
                        <div class="text-primary text-7">
                            <i class="fa-solid fa-phone-volume"></i>
                        </div>

                        <div class="vr my-1 opacity-1"></div>

                        <div>
                            <div class="text-2 fw-600 text-body-tertiary mb-1">
                                Call us for Inquiry:
                            </div>

                            <div class="text-4 fw-700 text-dark mb-0">
                                +91 9818433468 <br>
                                +91 9911772543
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4">
                    <div class="d-flex gap-3 wow fadeInUp" data-wow-delay=".2s">

                        <div class="text-primary text-7">
                            <i class="fa-solid fa-envelope"></i>
                        </div>

                        <div class="vr my-1 opacity-1"></div>

                        <div>
                            <div class="text-2 fw-600 text-body-tertiary mb-1">
                                Email Address:
                            </div>

                            <div class="text-4 fw-700 text-dark mb-0">
                                keshavresidency1@gmail.com
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="d-flex gap-3 wow fadeInUp" data-wow-delay=".4s">

                        <div class="text-primary text-7">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>

                        <div class="vr my-1 opacity-1"></div>

                        <div>

                            <div class="text-2 fw-600 text-body-tertiary mb-1">
                                Address:
                            </div>

                            <div class="text-4 fw-600 text-dark lh-base mb-0">
                                1105P, Huda Colony,<br>
                                Sector 46, Gurugram,<br>
                                Haryana 122002
                            </div>

                        </div>

                    </div>
                </div>

            </div>



            <!-- Get in Touch -->

            <div class="row g-5 mt-4">


                <div class="col-lg-6 text-center wow fadeInLeft">

                    <div class="position-relative d-inline-flex">

                        <img class="img-fluid rounded-5"
                            src="images/contact-us.jpg"
                            alt="Keshav Residency Hotel">


                        <div class="position-absolute top-0 end-0">


                            <div class="circle-text bg-white border border-2 border-primary mt-5 me-5 wow bounceIn" data-wow-delay="0.5s">

                                <svg viewBox="0 0 500 500">

                                    <defs>
                                        <path id="circlePath"
                                            d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250">
                                        </path>
                                    </defs>


                                    <text class="text-uppercase fw-700 ls-4">

                                        <textPath xlink:href="#circlePath">
                                            Comfortable Stay ✦ Premium Venue ✦
                                        </textPath>

                                    </text>

                                </svg>


                                <div class="circle-icon text-bg-primary translate-middle">
                                    <i class="fa-solid fa-hotel"></i>
                                </div>


                            </div>


                        </div>

                    </div>


                </div>




                <div class="col-lg-6 wow fadeInRight">


                    <h2 class="text-8 fw-600 mb-4">
                        Get in <span class="text-primary">Touch</span>
                    </h2>



                    <form id="contact-form"
                        class="form-border"
                        action="php/mail.php"
                        method="post">


                        <div class="mb-4">

                            <label class="form-label text-3 fw-600" for="name">
                                Full Name*
                            </label>

                            <input id="name"
                                name="name"
                                type="text"
                                class="form-control rounded-pill"
                                required
                                placeholder="Your Full Name">

                        </div>



                        <div class="mb-4">

                            <label class="form-label text-3 fw-600" for="phone">
                                Phone*
                            </label>


                            <input id="phone"
                                name="phone"
                                type="text"
                                class="form-control rounded-pill"
                                required
                                placeholder="Your Phone Number">

                        </div>




                        <div class="mb-4">

                            <label class="form-label text-3 fw-600" for="email">
                                Email*
                            </label>


                            <input id="email"
                                name="email"
                                type="email"
                                class="form-control rounded-pill"
                                required
                                placeholder="Your Email">

                        </div>




                        <div class="mb-4">

                            <label class="form-label text-3 fw-600" for="form-message">
                                Message*
                            </label>


                            <textarea id="form-message"
                                name="form-message"
                                class="form-control rounded-5"
                                rows="5"
                                required
                                placeholder="Your Message"></textarea>


                        </div>



                        <div class="d-grid">

                            <button id="submit-btn"
                                class="btn btn-new btn-primary text-nowrap rounded-pill"
                                type="submit">


                                <span class="btn-text">
                                    <span>Send Message</span>
                                </span>


                                <span class="btn-icon">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>


                            </button>

                        </div>


                    </form>


                </div>


            </div>


        </div>
    </div>





    <!-- Map -->

    <div class="map-wrap d-flex border-top border-bottom wow fadeInUp">


        <iframe
            src="https://www.google.com/maps?q=Keshav+Residency+Hotel+Sector+46+Gurugram+Haryana&output=embed"
            class="w-100"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">
        </iframe>


    </div>


</div>
<!-- Content end -->
@endsection