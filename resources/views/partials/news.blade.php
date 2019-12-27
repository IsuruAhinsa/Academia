@foreach($news as $item)

    <div class="col-lg-4 col-md-6 mb-4">

        <div class="course-1-item">

            <figure class="thumnail">

                <a href="#">
                    <img src="{{ Voyager::image($item->image) }}" alt="Image" class="img-fluid">
                </a>

                <div class="category">
                    <h3>{{ $item->title }}</h3>
                </div>

            </figure>

            <div class="course-1-content pb-4">

                <p class="desc mb-4">
                    {{ Str::limit(strip_tags($item->body), 200) }}
                </p>

                <p><a href="#" class="btn btn-primary rounded-0 px-4">Read More</a></p>

            </div>

        </div>

    </div>

@endforeach
