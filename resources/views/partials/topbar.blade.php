<div class="row align-items-center">

    <div class="col-lg-9 d-none d-lg-block">

        <a class="small mr-3 text-primary"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a>

        <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> {{ setting('site.site_telephone') }}</a>

        <a href="mailto:{{ setting('site.site_email') }}" class="small mr-3"><span class="icon-envelope-o mr-2"></span> {{ setting('site.site_email') }}</a>

    </div>

    <div class="col-lg-3 text-right">

        @guest
            <a href="{{ route('login') }}" class="small mr-3">
                <span class="icon-unlock-alt"></span>
                {{ __('Log In') }}
            </a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="small btn btn-primary px-4 py-2 rounded-0">
                    <span class="icon-users"></span>
                    {{ __('Register') }}
                </a>
            @endif

        @else

            <li class="nav-item dropdown" style="list-style: none">

                <a
                    id="navbarDropdown"
                    class="nav-link dropdown-toggle"
                    href="#"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    v-pre
                >
                    {{ Auth::user()->name }}
                    <span class="caret"></span>
                </a>

                <div
                    class="dropdown-menu dropdown-menu-right"
                    aria-labelledby="navbarDropdown"
                    style="border-radius:unset; border: none; border-top: 2px solid #51be78"
                >
                    <a
                        class="dropdown-item"
                        href="#">
                        {{ __('My Courses') }}
                    </a>

                    <a
                        class="dropdown-item"
                        href="#">
                        {{ __('My Profile') }}
                    </a>

                    <a
                        class="dropdown-item"
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>

            </li>

        @endguest

    </div>

</div>
