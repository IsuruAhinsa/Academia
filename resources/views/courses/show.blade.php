@extends('layouts.app')

@section('content')

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url({{ asset('images/bg_1.jpg') }})">

        <div class="container">

            <div class="row align-items-end">

                <div class="col-lg-7">
                    <h2 class="mb-0">{{ $course->name }}</h2>
                    <p>{{ $course->category->name }}</p>
                </div>

            </div>

        </div>

    </div>

    <div class="custom-breadcrumns border-bottom">
        <div class="container">
            <a href="{{ route('index') }}">Home</a>
            <span class="mx-3 icon-keyboard_arrow_right"></span>
            <a href="{{ URL::previous() }}">Courses</a>
            <span class="mx-3 icon-keyboard_arrow_right"></span>
            <span class="current">{{ $course->name }}</span>
        </div>
    </div>

    <div class="site-section">

        <div class="container">

            <div class="row">

                <div class="col-md-8 mb-4">

                    <p>
                        <img src="{{ Voyager::image($course->image) }}" alt="Image" class="img-fluid">
                    </p>

                    <br>

                    <div class="card shadow-sm p-3 text-dark mb-4" style="border: none; border-left: 5px solid #51be78;">
                        <span style="font-size: 22px; font-weight: bold">Course Overview</span>
                    </div>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad aliquam architecto assumenda blanditiis commodi consequuntur eum fuga inventore nesciunt nostrum odio optio quam quas, quasi sunt tempore veritatis voluptas. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium earum laborum recusandae? Alias aut culpa debitis dignissimos dolor ducimus eveniet excepturi facilis inventore itaque laudantium libero, molestias nam nihil nulla obcaecati officiis optio perferendis perspiciatis porro possimus quam quidem quisquam rem repellat reprehenderit sed tempora tempore totam vero. Aperiam corporis cupiditate distinctio dolores facere id possimus quo similique tempore unde. Adipisci beatae consectetur dicta dignissimos distinctio dolorem ducimus eius eum facilis fuga itaque iure laboriosam mollitia nesciunt nostrum officiis, provident quam quasi quo quos sapiente tenetur vel veritatis. Architecto beatae dolores harum inventore molestias quae rem repellendus rerum soluta voluptates?
                    </p>

                    <div class="card shadow-sm p-3 text-dark mb-4" style="border: none; border-left: 5px solid #51be78;">
                        <span style="font-size: 22px; font-weight: bold">Course Description</span>
                    </div>

                    <p>
                        {!! $course->description !!}
                    </p>

                    <ul class="ul-check primary list-unstyled mb-5">
                        <li>Lorem ipsum dolor sit amet consectetur</li>
                        <li>consectetur adipisicing  </li>
                        <li>Sit dolor repellat esse</li>
                        <li>Necessitatibus</li>
                        <li>Sed necessitatibus itaque </li>
                    </ul>

                    <div class="card shadow-sm p-3 text-dark mb-4" style="border: none; border-left: 5px solid #51be78;">
                        <span style="font-size: 22px; font-weight: bold">Course Content</span>
                    </div>

                    @include('partials.course.content')

                </div>

                <div class="col-lg-4 ml-auto">

                    <h2 class="section-title-underline mb-1">
                        <span>Course Details</span>
                    </h2>

                    <p>
                        <img src="{{ Voyager::image($course->icon) }}" alt="Image" class="img-fluid" width="64">
                    </p>

                    <p>
                        <strong class="text-black d-block">Teacher:</strong>
                        Unknown
                    </p>

                    <p>
                        <strong class="text-black d-block">Language:</strong>
                        {{ $course->language }}
                    </p>

                    <p class="mb-5">
                        <strong class="text-black d-block">Hours:</strong>
                        8:00 am &mdash; 9:30am
                    </p>

                    <p>
                        <a href="#" class="btn btn-primary rounded-0 btn-lg px-5">Enroll</a>
                    </p>

                </div>

            </div>

        </div>

    </div>

    @include('partials.detail')

@endsection

