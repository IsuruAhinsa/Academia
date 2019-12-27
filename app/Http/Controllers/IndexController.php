<?php

namespace App\Http\Controllers;

use App\Course;
use App\News;
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

    public function getCourses()
    {
        return Course::with('Category')
            ->orderBy('id', 'desc')
            ->get();
    }

    public function getLastNews()
    {
        return News::all()->last();
    }

    public function getNews()
    {
        return News::orderBy('id', 'desc')->first();
    }

    public function index()
    {
        return view('index', [
            'testimonials' => $this->getTestimonials(),
            'slides' => $this->getSlides(),
            'courses' => $this->getCourses(),
            'last_news' => $this->getLastNews(),
            'news' => $this->getNews()
        ]);
    }
}
