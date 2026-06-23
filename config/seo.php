<?php

/**
 * SEO Configuration
 * 
 * This file contains SEO metadata configuration for all pages.
 * Each page can override these defaults by passing data to the layout.
 */

return [
    /**
     * Default SEO metadata
     * These values are used as fallbacks if a page doesn't specify its own
     */
    'defaults' => [
        'title' => env('APP_NAME', 'Keshav Residency Hotel'),
        'description' => 'Welcome to Keshav Residency Hotel - Your premium hospitality destination.',
        'keywords' => 'hotel, residency, hospitality, accommodation',
        'author' => env('APP_NAME', 'Keshav Residency Hotel'),
    ],

    /**
     * Page-specific SEO metadata
     * Can be used for predefined pages or as reference
     */
    'pages' => [
        'home' => [
            'title' => 'Home - Keshav Residency Hotel',
            'description' => 'Discover luxury accommodation and world-class hospitality at Keshav Residency Hotel.',
            'keywords' => 'hotel, luxury, accommodation, hospitality',
        ],
        'about' => [
            'title' => 'About Us - Keshav Residency Hotel',
            'description' => 'Learn about Keshav Residency Hotel\'s history, mission, and commitment to excellence.',
            'keywords' => 'about, hotel, history, mission',
        ],
        'services' => [
            'title' => 'Our Services - Keshav Residency Hotel',
            'description' => 'Explore our comprehensive range of hospitality services and amenities.',
            'keywords' => 'services, amenities, hospitality, facilities',
        ],
        'contact' => [
            'title' => 'Contact Us - Keshav Residency Hotel',
            'description' => 'Get in touch with Keshav Residency Hotel. We\'re here to help!',
            'keywords' => 'contact, phone, email, location',
        ],
    ],

    /**
     * Open Graph metadata
     * Used for social media sharing optimization
     */
    'og' => [
        'type' => 'website',
        'image' => env('APP_URL', 'http://localhost:8000') . '/images/og-image.jpg',
        'image_width' => '1200',
        'image_height' => '630',
    ],

    /**
     * Twitter Card metadata
     * Used for Twitter sharing optimization
     */
    'twitter' => [
        'card' => 'summary_large_image',
        'creator' => '@' . env('TWITTER_HANDLE', 'yourhandle'),
    ],
];
