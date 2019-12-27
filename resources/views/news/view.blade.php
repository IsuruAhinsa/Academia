@extends('layouts.app')

@section('content')

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url({{ asset('images/bg_1.jpg') }})">

        <div class="container">

            <div class="row align-items-end">
                <div class="col-lg-7">
                    <h2 class="mb-0">{{ $news->title }}</h2>
                    <p>{{ $news->created_at->toDayDateTimeString() }}</p>
                </div>
            </div>

        </div>

    </div>

    <div class="custom-breadcrumns border-bottom">
        <div class="container">
            <a href="{{ route('index') }}">Home</a>
            <span class="mx-3 icon-keyboard_arrow_right"></span>
            <a href="{{ route('news.index') }}">News</a>
            <span class="mx-3 icon-keyboard_arrow_right"></span>
            <span class="current">{{ $news->title }}</span>
        </div>
    </div>

    <div class="site-section">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-md-9 mb-4">

                    <p class="mb-5">
                        <img src="{{ Voyager::image($news->image) }}" alt="Image" class="d-flex mx-auto img-fluid">
                    </p>

                    {!! $news->body !!}

                </div>

            </div>

        </div>

    </div>

    @include('partials.detail')

@endsection

