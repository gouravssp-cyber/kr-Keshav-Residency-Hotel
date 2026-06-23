# Frontend Architecture Documentation

## Overview

This document describes the foundational frontend structure for the application. It provides a reusable, scalable architecture for building pages with consistent layouts, components, and SEO metadata management.

---

## Directory Structure

```
resources/
├── views/
│   ├── layouts/
│   │   └── app.blade.php           # Main layout template
│   ├── components/
│   │   ├── header.blade.php        # Reusable header component
│   │   └── footer.blade.php        # Reusable footer component
│   └── pages/
│       ├── home.blade.php          # Home page
│       ├── about.blade.php         # About page
│       ├── services.blade.php      # Services page
│       └── contact.blade.php       # Contact page
│
app/
├── Http/
│   └── Controllers/
│       └── Pages/
│           └── PagesController.php # Pages controller
│
config/
└── seo.php                         # SEO configuration
│
routes/
└── web.php                         # Web routes (updated)
```

---

## Key Components

### 1. Main Layout (`resources/views/layouts/app.blade.php`)

The main layout file that all pages extend. It includes:

- **HTML document structure** with proper DOCTYPE and meta tags
- **SEO metadata rendering**:
  - Page title
  - Meta description, keywords, author
  - Open Graph tags for social media sharing
  - Twitter Card tags
  - Canonical URL
- **Header component** at the top
- **Content area** where page-specific content is rendered via `@yield('content')`
- **Footer component** at the bottom
- **Script and stylesheet loading**

**Usage in pages:**
```blade
@extends('layouts.app')

@section('content')
    <!-- Page content here -->
@endsection
```

---

### 2. Header Component (`resources/views/components/header.blade.php`)

A reusable navigation header that appears on all pages.

**Features:**
- Responsive Bootstrap navbar
- Sticky positioning at the top
- Navigation links to all main pages
- Active link detection (highlights current page)
- Mobile-friendly toggle button
- Custom styling with hover effects

**Usage:**
```blade
@component('components.header')
@endcomponent
```

---

### 3. Footer Component (`resources/views/components/footer.blade.php`)

A reusable footer component for all pages.

**Features:**
- Multi-column layout
- Quick links section
- Contact information placeholders
- Social media section (placeholder)
- Copyright information
- Legal links (Privacy Policy, Terms & Conditions)

**Current State:** Placeholder structure ready for future implementation

**Usage:**
```blade
@component('components.footer')
@endcomponent
```

---

### 4. Pages Controller (`app/Http/Controllers/Pages/PagesController.php`)

Centralized controller for all public pages.

**Methods:**
- `home()` - Renders home page
- `about()` - Renders about page
- `services()` - Renders services page
- `contact()` - Renders contact page

Each method:
1. Retrieves SEO metadata from `config/seo.php`
2. Passes data to the corresponding view
3. Returns the rendered view

**Example:**
```php
public function home(): View
{
    $seo = config('seo.pages.home', []);
    return view('pages.home', ['seo' => $seo]);
}
```

---

### 5. SEO Configuration (`config/seo.php`)

Centralized configuration for all SEO metadata.

**Structure:**

```php
return [
    'defaults' => [
        'title' => 'Default Page Title',
        'description' => 'Default meta description',
        'keywords' => 'default, keywords',
        'author' => 'Author name',
    ],
    
    'pages' => [
        'home' => [
            'title' => 'Home - Keshav Residency Hotel',
            'description' => '...',
            'keywords' => '...',
        ],
        // ... other pages
    ],
    
    'og' => [
        'type' => 'website',
        'image' => '/images/og-image.jpg',
        'image_width' => '1200',
        'image_height' => '630',
    ],
    
    'twitter' => [
        'card' => 'summary_large_image',
        'creator' => '@yourhandle',
    ],
];
```

---

### 6. Routes (`routes/web.php`)

Updated routes file with grouped page routes.

**Routes:**
- `GET /` - Home page (route name: `home`)
- `GET /about` - About page (route name: `about`)
- `GET /services` - Services page (route name: `services`)
- `GET /contact` - Contact page (route name: `contact`)

**Usage in views:**
```blade
<a href="{{ route('home') }}">Home</a>
<a href="{{ route('about') }}">About</a>
```

---

## SEO Metadata Implementation

### Global Metadata

The layout file renders all SEO metadata in the `<head>` section:

```blade
<!-- SEO Metadata -->
<title>{{ $seo['title'] ?? config('seo.defaults.title') }}</title>
<meta name="description" content="{{ $seo['description'] ?? config('seo.defaults.description') }}">
<meta name="keywords" content="{{ $seo['keywords'] ?? config('seo.defaults.keywords') }}">

<!-- Open Graph Tags -->
<meta property="og:title" content="{{ $seo['title'] ?? config('seo.defaults.title') }}">
<meta property="og:description" content="{{ $seo['description'] ?? config('seo.defaults.description') }}">
<meta property="og:image" content="{{ $seo['og_image'] ?? config('seo.og.image') }}">

<!-- Twitter Card Tags -->
<meta name="twitter:title" content="{{ $seo['title'] ?? config('seo.defaults.title') }}">
<meta name="twitter:description" content="{{ $seo['description'] ?? config('seo.defaults.description') }}">
```

### Per-Page Metadata

Each page can override default metadata using the `@push('seo')` directive:

```blade
@extends('layouts.app')

@section('content')
    <!-- Page content -->
@endsection

@push('seo')
    @php
        $this->seo = array_merge($this->seo ?? [], [
            'title' => 'Custom Page Title',
            'description' => 'Custom meta description',
            'keywords' => 'custom, keywords',
        ]);
    @endphp
@endpush
```

---

## How It Works: Step by Step

### 1. User Requests a Page

```
GET /about
```

### 2. Route Resolution

The route is matched in `routes/web.php`:
```php
Route::get('/about', 'about')->name('about');
```

### 3. Controller Method Execution

`PagesController::about()` is called:
```php
public function about(): View
{
    $seo = config('seo.pages.about', []);
    return view('pages.about', ['seo' => $seo]);
}
```

### 4. View Rendering

The `pages/about.blade.php` view is rendered with SEO data:
```blade
@extends('layouts.app')
@section('content')
    <!-- About page content -->
@endsection
```

### 5. Layout Rendering

The layout (`layouts/app.blade.php`) wraps the page content:
- Renders all SEO metadata in the `<head>`
- Includes the header component
- Renders the `@yield('content')` with page content
- Includes the footer component

### 6. Response to Browser

Complete HTML document with proper SEO meta tags.

---

## Adding a New Page

Follow these steps to add a new page to the application:

### Step 1: Create the Page View

Create a new file: `resources/views/pages/your-page.blade.php`

```blade
@extends('layouts.app')

@section('content')
    <div class="your-page">
        <!-- Your page content here -->
    </div>
@endsection

@push('seo')
    @php
        $this->seo = array_merge($this->seo ?? [], [
            'title' => 'Your Page Title',
            'description' => 'Your page description',
            'keywords' => 'your, keywords',
        ]);
    @endphp
@endpush
```

### Step 2: Add Controller Method

Add a method to `PagesController`:

```php
public function yourPage(): View
{
    $seo = config('seo.pages.your-page', []);
    return view('pages.your-page', ['seo' => $seo]);
}
```

### Step 3: Add Route

Add to `routes/web.php`:

```php
Route::get('/your-page', 'yourPage')->name('your-page');
```

### Step 4: (Optional) Add SEO Configuration

Add to `config/seo.php` under `pages`:

```php
'your-page' => [
    'title' => 'Your Page Title',
    'description' => 'Your page description',
    'keywords' => 'your, keywords',
],
```

### Step 5: Update Navigation

Add link to header in `resources/views/components/header.blade.php`:

```blade
<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('your-page') ? 'active' : '' }}" 
       href="{{ route('your-page') }}">
        Your Page
    </a>
</li>
```

---

## Customization Guide

### Changing Page Layout

To use a different layout for a specific page:

```blade
@extends('layouts.your-custom-layout')
```

### Adding Custom CSS

Use the `@stack('styles')` in the layout:

In your page:
```blade
@push('styles')
    <style>
        .my-custom-style { color: blue; }
    </style>
@endpush
```

### Adding Custom JavaScript

Use the `@stack('scripts')` in the layout:

In your page:
```blade
@push('scripts')
    <script>
        console.log('Page specific script');
    </script>
@endpush
```

### Modifying Header/Footer

Edit the component files directly:
- `resources/views/components/header.blade.php`
- `resources/views/components/footer.blade.php`

Changes will automatically apply to all pages.

---

## SEO Best Practices

### Title Tags
- Keep between 50-60 characters
- Include primary keyword
- Be descriptive and compelling

### Meta Descriptions
- Keep between 120-160 characters
- Include primary keyword
- Include call-to-action if relevant

### Keywords
- Include 3-5 primary and secondary keywords
- Separate with commas
- Use natural language

### Open Graph Tags
- Ensure `og:image` is at least 1200x630 pixels
- Use high-quality images
- Update `og:url` if different from request URL

### Canonical URLs
- Automatically set to `request()->url()`
- Override in page SEO data if needed
- Helps with duplicate content issues

---

## Troubleshooting

### Pages Not Showing Metadata

1. Verify controller returns `['seo' => $seo]`
2. Check `config/seo.php` has correct entries
3. Ensure layout file includes SEO rendering code

### Active Navigation Not Working

1. Verify route names match exactly: `request()->routeIs('route-name')`
2. Check route definition in `routes/web.php`
3. Ensure route name is set: `->name('route-name')`

### Components Not Rendering

1. Verify component file path is correct
2. Check for syntax errors in component files
3. Ensure `@component()` directive is used correctly

### Styling Not Applied

1. Verify CSS files are referenced correctly
2. Check Bootstrap and custom CSS are loaded
3. Use browser developer tools to inspect elements

---

## Future Enhancements

Potential improvements to this architecture:

- [ ] Create Blade components for reusable sections
- [ ] Implement caching for SEO config
- [ ] Add breadcrumb schema markup
- [ ] Implement structured data (JSON-LD)
- [ ] Add sitemap generation
- [ ] Create page templates for different layouts
- [ ] Implement page versioning/drafts
- [ ] Add multilingual support

---

## File References

- **Layout:** [resources/views/layouts/app.blade.php](../../resources/views/layouts/app.blade.php)
- **Header Component:** [resources/views/components/header.blade.php](../../resources/views/components/header.blade.php)
- **Footer Component:** [resources/views/components/footer.blade.php](../../resources/views/components/footer.blade.php)
- **Pages Controller:** [app/Http/Controllers/Pages/PagesController.php](../../app/Http/Controllers/Pages/PagesController.php)
- **SEO Config:** [config/seo.php](../../config/seo.php)
- **Routes:** [routes/web.php](../../routes/web.php)

---

## Summary

This foundational frontend structure provides:

✅ **Reusable Layout** - Common layout for all pages
✅ **Reusable Components** - Header and Footer  
✅ **Dynamic SEO Support** - Per-page metadata configuration
✅ **Clean Architecture** - Organized directory structure
✅ **Best Practices** - Follows Laravel conventions
✅ **Scalability** - Easy to add new pages
✅ **Maintainability** - Clear code organization and documentation

All pages benefit from consistent styling, navigation, and SEO optimization.
