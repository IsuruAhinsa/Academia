<div class="site-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-4">
                <h2 class="section-title-underline">
                    <span>Testimonials</span>
                </h2>
            </div>
        </div>


        <div class="owl-slide owl-carousel">

            @foreach($testimonials as $testimonial)

                <div class="ftco-testimonial-1">
                    <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                        <img src="{{ Voyager::image($testimonial->avatar) }}" alt="Image" class="img-fluid mr-3">
                        <div>
                            <h3>{{ $testimonial->name }}</h3>
                            <span>{{ $testimonial->designation }}</span>
                        </div>
                    </div>
                    <div>
                        <p>&ldquo; {{ $testimonial->body }} &rdquo;</p>
                    </div>
                </div>

            @endforeach

        </div>

    </div>
</div>
