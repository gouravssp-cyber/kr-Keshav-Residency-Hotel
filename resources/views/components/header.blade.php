<!-- 
    Header Component
    
    This is a reusable header component that appears on all pages.
    It includes navigation, branding, and primary interaction elements.
    
    Features:
    - Responsive navigation
    - Brand/logo display
    - Navigation links to main pages
    - User authentication links (if applicable)
-->


<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Document Wrapper
	=============================== -->
    <div id="main-wrapper">
        <!-- Header
		============================ -->
        <header id="header" class="sticky-top-slide">
            <nav class="primary-menu navbar navbar-expand-lg bg-transparent border-bottom-0 text-3 fw-600 mt-3">
                <div class="container">
                    <!-- Logo -->
                    <a class="logo" href="{{ route('home') }}">
                        <img src="{{ asset('img/logo.png') }}" alt="Keshav Residency Hotel Logo" class="" style="height: 100px;">
                    </a>
                    <!-- Logo End -->

                    <div id="header-nav" class="collapse navbar-collapse justify-content-center">
                        <ul class="navbar-nav">

                            <li class="nav-item">
                                <a class="nav-link @if(Request::is('/')) active @endif" href="/">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link @if(Request::is('about')) active @endif" href="/about">About US</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="roomsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Rooms & Suites
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="roomsDropdown">
                                    @forelse($rooms ?? [] as $room)
                                        <li><a class="dropdown-item" href="{{ route('room-detail', $room->slug) }}">{{ $room->name }}</a></li>
                                    @empty
                                        <li><a class="dropdown-item disabled" href="#">No rooms available</a></li>
                                    @endforelse
                                </ul>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link @if(Request::is('contact')) active @endif" href="/contact">Contact Us</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link @if(Request::is('gallery')) active @endif" href="/gallery">Gallery</a>
                            </li>

                        </ul>
                    </div>

                    <!-- Button -->
                    <a href="contact" class="btn btn-new btn-primary text-capitalize rounded-pill text-nowrap ms-auto">
                        <span class="btn-text"><span>Book Now</span></span>
                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                    <!-- Button End -->

                    <!-- Hamburger Menu Button -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header-nav" aria-controls="header-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span><span></span><span></span>
                    </button>
                    <!-- Hamburger Menu Button End -->
                </div>
            </nav>
        </header>
        <!-- Header End -->
