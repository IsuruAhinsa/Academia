<div class="owl-slide-3 owl-carousel">

    @foreach($courses as $course)

        <div class="course-1-item">

            <figure class="thumnail">

                <a href="#">
                    <img src="{{ Voyager::image($course->image) }}" alt="Image" class="img-fluid">
                </a>

                <div class="price font-weight-bold">
                    LKR {{ number_format($course->price, 2) }}
                </div>

                <div class="category">
                    <h3>{{ $course->category->name }}</h3>
                </div>

            </figure>

            <div class="course-1-content pb-4">

                <img src="{{ Voyager::image($course->icon) }}" alt="Image" class="d-flex mx-auto img-fluid" style="width: 64px">

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

    @endforeach

</div>
