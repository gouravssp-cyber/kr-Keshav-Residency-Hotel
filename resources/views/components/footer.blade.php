<!-- 
    Footer Component
    
    This is a reusable footer component that appears on all pages.
    Currently serves as a placeholder for future implementation.
    
    Planned features:
    - Contact information
    - Quick links
    - Social media links
    - Copyright information
    - Newsletter subscription
    - Sitemap links
-->
<!-- Footer
============================================= -->
<footer id="footer" class="footer-dark">
    <div class="hero-wrap section pb-0">
        <div class="hero-mask opacity-9 bg-black"></div>
        <div class="hero-bg hero-bg-scroll" style="background-image:url('{{ asset("img/hero-section-bg.jpeg") }}');"></div>

        <div class="hero-content">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-sm-7 col-md-6 col-lg-4">
                        <div class="mb-4">
                            <a href="index.html">
                                <img src="{{ asset('img/logo.png') }}" alt="Keshav Residency Hotel Logo" class="" style="height: 80px;">
                            </a>
                        </div>
                        <p class="text-3">
                            Keshav Residency Hotel is a comfortable hospitality destination in Sector 46, Gurugram, offering well-maintained rooms, pure vegetarian dining, and venue facilities for family, business, and social stays.
                        </p>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-3 ms-auto">
                        <ul class="nav flex-column fw-500">
                            <li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="rooms.html">Rooms</a></li>
                            <li class="nav-item"><a class="nav-link" href="banquets.html">Banquets</a></li>
                            <li class="nav-item"><a class="nav-link" href="location.html">Location</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="d-flex gap-4 mb-3">
                            <span class="text-7 me-1"><i class="fa-solid fa-location-dot"></i></span>
                            <div class="text-3 lh-lg">
                                1105P, Huda Colony, Sector 46, Gurugram, Haryana 122002
                            </div>
                        </div>

                        <a href="tel:+919818433468" class="d-flex align-items-center gap-4 mb-1 link-primary link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">
                            <span class="text-6"><i class="fa-solid fa-phone-volume"></i></span>
                            <div class="text-5 fw-700 lh-lg">+91 9818433468</div>
                        </a>

                        <a href="mailto:keshavresidency1@gmail.com" class="d-flex align-items-center gap-4 link-light link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">
                            <span class="text-6"><i class="fa-solid fa-envelope"></i></span>
                            <div class="text-5 fw-600 lh-lg">keshavresidency1@gmail.com</div>
                        </a>

                        <div class="mt-3">
                            <ul class="social-icons social-icons-light">
                                <li>
                                    <a data-bs-toggle="tooltip" href="https://www.facebook.com/KeshavResidency/" target="_blank" title="Facebook">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" href="https://www.instagram.com/" target="_blank" title="Instagram">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" href="https://wa.me/919818433468" target="_blank" title="WhatsApp">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-copyright">
                <div class="container">
                    <div class="row gy-3">
                        <div class="col-lg">
                            <p class="text-3 text-center mb-2">
                                Copyright &copy; 2026
                                <a class="fw-500 link-primary link-offset-2 link-underline link-underline-opacity-0 link-underline-opacity-100-hover" href="index.html">Keshav Residency Hotel</a>.
                                All Rights Reserved.
                            </p>
                            <p class="text-3 text-center mb-0">
                                Designed for Keshav Residency Hotel, Gurugram.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>