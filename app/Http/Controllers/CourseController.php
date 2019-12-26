<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index($slug)
    {
        return view('courses.index', [
            'courses' => $this->getCourse($slug)
        ]);
    }

    public function getCategoryId($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        return $category->id;
    }

    public function getCourse($slug)
    {
        return Course::with('Category')
            ->where('category_id', $this->getCategoryId($slug))
            ->get();
    }
}
