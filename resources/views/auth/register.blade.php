@extends('layouts.app')

@section('content')

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url({{ asset('images/bg_1.jpg') }})">
        <div class="container">
            <div class="row align-items-end justify-content-center text-center">
                <div class="col-lg-7">
                    <h2 class="mb-0">{{ __('Register') }}</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="custom-breadcrumns border-bottom">
        <div class="container">
            <a href="index.html">Home</a>
            <span class="mx-3 icon-keyboard_arrow_right"></span>
            <span class="current">{{ __('Register') }}</span>
        </div>
    </div>

    <div class="site-section">
        <div class="container">


            <div class="row justify-content-center">

                <div class="col-md-5">

                    <form method="POST" action="{{ route('register') }}">

                        @csrf

                        <div class="row">

                            <div class="col-md-12 form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input
                                    id="name"
                                    type="text"
                                    class="form-control form-control-lg @error('name') is-invalid @enderror"
                                    name="name"
                                    value="{{ old('name') }}"
                                    required
                                    autocomplete="name"
                                    autofocus
                                >
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12 form-group">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input
                                    id="email"
                                    type="email"
                                    class="form-control form-control-lg @error('email') is-invalid @enderror"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    autocomplete="email"
                                >
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12 form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input
                                    id="password"
                                    type="password"
                                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                                    name="password"
                                    required
                                    autocomplete="new-password"
                                >

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12 form-group">
                                <label for="password-confirm">{{ __('Re-type Password') }}</label>
                                <input
                                    id="password-confirm"
                                    type="password"
                                    class="form-control form-control-lg"
                                    name="password_confirmation"
                                    required
                                    autocomplete="new-password"
                                >
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-12">
                                <input type="submit" value="Register" class="btn btn-primary btn-lg px-5">
                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
