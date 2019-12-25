<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index($slug)
    {
        return view('courses.index', [
            'category' => $this->getCategory($slug)
        ]);
    }

    public function getCategory($slug)
    {
        return Category::where('slug', $slug)->get();
    }
}
