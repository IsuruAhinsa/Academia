@php
    use App\Http\Controllers\Controller;
    $categories = Controller::getCategories();
@endphp

<ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">

    <li>
        <a href="@if(Route::has('index')) {{ route('index') }} @endif" class="nav-link text-left font-weight-bold">
            {{ __('Home') }}
        </a>
    </li>

    <li class="has-children">
        <a href="#" class="nav-link text-left font-weight-bold">
            {{ __('Courses') }}
        </a>

        <ul class="dropdown">
            @foreach($categories as $category)
                <li>
                    <a href="{{ route('course.index', [$category->slug]) }}" class="font-weight-bold">
                        {{ $category->name }}
                    </a>
                </li>
            @endforeach
        </ul>

    </li>

    <li>
        <a href="#" class="nav-link text-left font-weight-bold">
            {{ __('News') }}
        </a>
    </li>

    <li>
        <a href="#" class="nav-link text-left font-weight-bold">
            {{ __('About Us') }}
        </a>
    </li>

    <li>
        <a href="#" class="nav-link text-left font-weight-bold">
            {{ __('Contact') }}
        </a>
    </li>

</ul>
