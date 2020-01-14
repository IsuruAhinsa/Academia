@extends('layouts.app')

@section('content')

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url({{ asset('images/bg_1.jpg') }})">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7">
                    <h2 class="mb-0">News</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="custom-breadcrumns border-bottom">
        <div class="container">
            <a href="#">Home</a>
            <span class="mx-3 icon-keyboard_arrow_right"></span>
            <span class="current">Courses</span>
        </div>
    </div>

    <div class="site-section">

        <div class="container">

            <div class="row">

                @include('partials.news.news-item')

            </div>

        </div>

    </div>

    @include('partials.detail')

@endsection

