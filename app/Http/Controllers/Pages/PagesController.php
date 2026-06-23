<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

/**
 * PagesController
 * 
 * Handles all public page routes and rendering.
 * Each method corresponds to a page and passes SEO data to the layout.
 */
class PagesController extends Controller
{
    /**
     * Display the home page
     * 
     * @return View
     */
    public function home(): View
    {
        $seo = config('seo.pages.home', []);
        
        return view('pages.home');
    }

    /**
     * Display the about page
     * 
     * @return View
     */
    public function about(): View
    {
        $seo = config('seo.pages.about', []);
        return view('pages.about', ['seo' => $seo]);
    }

    /**
     * Display the services page
     * 
     * @return View
     */
    public function services(): View
    {
        $seo = config('seo.pages.services', []);
        return view('pages.services', ['seo' => $seo]);
    }

    /**
     * Display the contact page
     * 
     * @return View
     */
    public function contact(): View
    {
        $seo = config('seo.pages.contact', []);
        return view('pages.contact', ['seo' => $seo]);
    }

    /**
     * Display the gallery page
     * 
     * @return View
     */
    public function gallery(): View
    {
        $seo = config('seo.pages.gallery', []);
        return view('pages.gallery', ['seo' => $seo]);
    }


    /**
     * Display the gallery page
     * 
     * @return View
     */
    public function room(): View
    {
        
        return view('pages.room-detail');
    }


    /**
     * Display the gallery page
     * 
     * @return View
     */
    public function rooms(): View
    {
        
        return view('pages.rooms');
    }



}