<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Metadata -->
    <title>{{ $seo['title'] ?? config('seo.defaults.title') }}</title>
    <meta name="description" content="{{ $seo['description'] ?? config('seo.defaults.description') }}">
    <meta name="keywords" content="{{ $seo['keywords'] ?? config('seo.defaults.keywords') }}">
    <meta name="author" content="{{ $seo['author'] ?? config('seo.defaults.author') }}">

    <!-- Open Graph Meta Tags (Social Media) -->
    <meta property="og:type" content="{{ $seo['og_type'] ?? config('seo.og.type') }}">
    <meta property="og:title" content="{{ $seo['title'] ?? config('seo.defaults.title') }}">
    <meta property="og:description" content="{{ $seo['description'] ?? config('seo.defaults.description') }}">
    <meta property="og:url" content="{{ $seo['url'] ?? request()->url() }}">
    <meta property="og:image" content="{{ $seo['og_image'] ?? config('seo.og.image') }}">
    <meta property="og:image:width" content="{{ config('seo.og.image_width') }}">
    <meta property="og:image:height" content="{{ config('seo.og.image_height') }}">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="{{ config('seo.twitter.card') }}">
    <meta name="twitter:creator" content="{{ config('seo.twitter.creator') }}">
    <meta name="twitter:title" content="{{ $seo['title'] ?? config('seo.defaults.title') }}">
    <meta name="twitter:description" content="{{ $seo['description'] ?? config('seo.defaults.description') }}">
    <meta name="twitter:image" content="{{ $seo['og_image'] ?? config('seo.og.image') }}">

    <!-- Additional Meta Tags -->
    <meta name="theme-color" content="#000000">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- Canonical URL -->
    @if(isset($seo['canonical']))
    <link rel="canonical" href="{{ $seo['canonical'] }}">
    @else
    <link rel="canonical" href="{{ request()->url() }}">
    @endif

    <!-- Stylesheets -->

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/daterangepicker.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css')}}">

    @stack('styles')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- Header Component -->
    @component('components.header')
    @endcomponent

    <!-- Main Content Area -->
    <main role="main" class="main-content">
        @yield('content')
    </main>

    <!-- Footer Component -->
    @component('components.footer')
    @endcomponent

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/lenis.min.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/glightbox.min.js') }}"></script>
    <script src="{{ asset('js/jarallax.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('js/daterangepicker-custom.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    @stack('scripts')
</body>

</html>