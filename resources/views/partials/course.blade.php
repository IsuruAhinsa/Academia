@foreach($courses as $course)

    <div class="col-lg-4 col-md-6 mb-4">

        <div class="course-1-item">

            <figure class="thumnail">

                <a href="#">
                    <img src="{{ Voyager::image($course->image) }}" alt="Image" class="img-fluid">
                </a>

                <div class="price bg-warning font-weight-bold">
                    LKR {{ number_format($course->price, 2) }}
                </div>

                <div class="category">
                    <h3>{{ $course->category->name }}</h3>
                </div>

            </figure>

            <div class="course-1-content pb-4">

                <img src="{{ Voyager::image($course->icon) }}" alt="Image" class="img-fluid" width="64">

                <h2 class="font-weight-bold">{{ $course->name }}</h2>

                <div class="rating text-center mb-3">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                </div>

                <p class="desc mb-4">
                    {{ $course->description }}
                </p>

                <p><a href="#" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>

            </div>

        </div>

    </div>

@endforeach
