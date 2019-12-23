<div class="hero-slide owl-carousel site-blocks-cover">

    @foreach($slides as $slide)

        <div class="intro-section" style="background-image: url({{ Voyager::image($slide->image) }});">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                        <h1>{{ $slide->title }}</h1>
                    </div>
                </div>
            </div>
        </div>

    @endforeach

</div>
