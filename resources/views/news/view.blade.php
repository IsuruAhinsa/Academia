@extends('layouts.app')

@section('content')

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url({{ asset('images/bg_1.jpg') }})">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7">
                    <h2 class="mb-0">Campus Camping and Learning Session</h2>
                    <p>June 6, 2019 by Admin</p>
                </div>
            </div>
        </div>
    </div>


    <div class="custom-breadcrumns border-bottom">
        <div class="container">
            <a href="index.html">Home</a>
            <span class="mx-3 icon-keyboard_arrow_right"></span>
            <span class="current">News</span>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 mb-4">
                    <p class="mb-5">
                        <img src="images/course_5.jpg" alt="Image" class="img-fluid">
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim, facere inventore suscipit, et nemo possimus reiciendis dignissimos assumenda, cupiditate at consequatur minima natus deserunt optio ducimus deleniti. Voluptatum, aliquid aspernatur.</p>
                    <p>Neque officia error quam suscipit necessitatibus placeat impedit, esse, quod voluptates eius facilis dolorum dolores at accusantium totam, quis minima voluptatem quisquam saepe hic. Ipsum cupiditate harum quae earum dolore?</p>
                    <p>Ea similique vel eligendi ipsam, aspernatur odit itaque inventore. Alias veritatis, mollitia laudantium dignissimos, harum repellendus in tempora at autem velit laboriosam dolorum expedita dolorem commodi quia ipsam, earum et!</p>
                    <p>Beatae sunt temporibus, at officiis repudiandae quasi dolore, deserunt nemo expedita illum dolor voluptatem reiciendis sit, iure odit harum nihil illo unde repellendus magni. Iusto perferendis quis officiis assumenda consectetur.</p>
                    <p>Quisquam assumenda eum labore non in eligendi doloremque dicta sequi culpa corrupti reiciendis cupiditate libero accusantium quod, modi ipsa sed debitis deserunt sunt voluptatem sint maxime. Iure maxime consequatur ex.</p>
                </div>

            </div>
        </div>
    </div>

    @include('partials.detail')

@endsection
