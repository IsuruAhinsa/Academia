<?php

namespace App\Http\Controllers;

use App\Slide;
use App\Testimonial;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getTestimonials()
    {
        return Testimonial::all();
    }

    public function getSlides()
    {
        return Slide::where('published', 1)->get();
    }

    public function index()
    {
        return view('index', [
            'testimonials' => $this->getTestimonials(),
            'slides' => $this->getSlides()
        ]);
    }
}
