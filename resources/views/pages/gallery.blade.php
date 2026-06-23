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
                <h1 class="text-17 mb-4 wow fadeInUp">Gallery</h1>
                <ul class="breadcrumb justify-content-center mb-0 wow fadeInUp" data-wow-delay=".2s">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Gallery</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Page Header end -->

<!-- Content
		============================================= -->
<div id="content" role="main">

    <!-- Image Gallery
			============================================= -->
    <section class="section">
        <div class="container">
            <!-- Heading -->
            <div class="mx-auto text-center mb-5">
                <p class="wow fadeInUp"><span class="text-3 text-uppercase fw-600 rounded-pill border border-dark border-opacity-10 px-3 py-1">Images</span></p>
                <h2 class="heading-font-family text-13 fw-600 lh-sm wow fadeInUp" data-wow-delay=".2s">Image <span class="text-primary">Gallery</span></h2>
            </div>
            <!-- Heading End -->

            <div class="gallery">
                <div class="row g-4">

                    <!-- 4 column -->
                    <div class="col-md-3">
                        <div class="gallery-item rounded-5">
                            <a class="glightbox" href="images/rooms/room-1.jpg">
                                <img class="img-fluid d-block" src="images/rooms/room-1.jpg" alt="">
                                <div class="overlay-details">
                                    <span class="text-6"><i class="fa-solid fa-plus"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="gallery-item rounded-5">
                            <a class="glightbox" href="images/rooms/room-2.jpg">
                                <img class="img-fluid d-block" src="images/rooms/room-2.jpg" alt="">
                                <div class="overlay-details">
                                    <span class="text-6"><i class="fa-solid fa-plus"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="gallery-item rounded-5">
                            <a class="glightbox" href="images/rooms/room-3.jpg">
                                <img class="img-fluid d-block" src="images/rooms/room-3.jpg" alt="">
                                <div class="overlay-details">
                                    <span class="text-6"><i class="fa-solid fa-plus"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="gallery-item rounded-5">
                            <a class="glightbox" href="images/rooms/room-4.jpg">
                                <img class="img-fluid d-block" src="images/rooms/room-4.jpg" alt="">
                                <div class="overlay-details">
                                    <span class="text-6"><i class="fa-solid fa-plus"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- 3 column -->
                    <div class="col-md-4">
                        <div class="gallery-item rounded-5">
                            <a class="glightbox" href="images/rooms/room-3-v.jpg">
                                <img class="img-fluid d-block" src="images/rooms/room-3-v.jpg" alt="">
                                <div class="overlay-details">
                                    <span class="text-6"><i class="fa-solid fa-plus"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-item rounded-5">
                            <a class="glightbox" href="images/rooms/room-4-v.jpg">
                                <img class="img-fluid d-block" src="images/rooms/room-4-v.jpg" alt="">
                                <div class="overlay-details">
                                    <span class="text-6"><i class="fa-solid fa-plus"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-item rounded-5">
                            <a class="glightbox" href="images/rooms/room-5-v.jpg">
                                <img class="img-fluid d-block" src="images/rooms/room-5-v.jpg" alt="">
                                <div class="overlay-details">
                                    <span class="text-6"><i class="fa-solid fa-plus"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- 2 column -->
                    <div class="col-md-6">
                        <div class="gallery-item rounded-5">
                            <a class="glightbox" href="images/rooms/room-single-2.jpg">
                                <img class="img-fluid d-block" src="images/rooms/room-single-2.jpg" alt="">
                                <div class="overlay-details">
                                    <span class="text-6"><i class="fa-solid fa-plus"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="gallery-item rounded-5">
                            <a class="glightbox" href="images/rooms/room-single-4.jpg">
                                <img class="img-fluid d-block" src="images/rooms/room-single-4.jpg" alt="">
                                <div class="overlay-details">
                                    <span class="text-6"><i class="fa-solid fa-plus"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Image Gallery end -->


</div>
<!-- Content end -->
@endsection