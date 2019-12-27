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
        // get final news record
        return News::all()->last();
    }

    public function getNews()
    {
        // get last 3 news records except a final news record
        return News::orderBy('id', 'desc')
            ->skip(1)
            ->take(3)
            ->get();
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
