<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getNews()
    {
        return News::orderBy('id', 'desc')->get();
    }

    public function index()
    {
        return view('news.index', [
            'news' => $this->getNews()
        ]);
    }
}
