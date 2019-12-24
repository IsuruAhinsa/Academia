<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

    <div class="container">

        <div class="d-flex align-items-center">

            <div class="site-logo">
                <a href="#" class="d-block">
                    <img src="{{ Voyager::image(setting('site.logo')) }}" alt="Image" class="img-fluid">
                </a>
            </div>

            <div class="mr-auto">

                <nav class="site-navigation position-relative text-right" role="navigation">

                    {{ menu('main', 'partials.menu.main') }}

                </nav>

            </div>

            <div class="ml-auto">

                <div class="social-wrap">

                    {{ menu('social', 'partials.menu.social') }}

                    <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                            class="icon-menu h3"></span></a>
                </div>

            </div>

        </div>

    </div>

</header>
