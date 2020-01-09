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
            'courses' => $this->getCourses($slug)
        ]);
    }

    public function show($category, $slug)
    {
        return view('courses.show', [
            'course' => $this->getCourseDetails($slug)
        ]);
    }

    public function getCategoryId($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        return $category->id;
    }

    public function getCourses($slug)
    {
        return Course::with('Category')
            ->where('category_id', $this->getCategoryId($slug))
            ->get();
    }

    public function getCourseDetails($slug)
    {
        return Course::with('Category')
            ->where('slug', $slug)
            ->firstOrFail();
    }
}
