<div class="news-updates">

    <div class="container">

        <div class="row">

            <div class="col-lg-9">

                <div class="section-heading">
                    <h2 class="text-black">News &amp; Updates</h2>
                    <a href="{{ route('news.index') }}">Read All News</a>
                </div>

                <div class="row">

                    <div class="col-lg-6">

                        <div class="post-entry-big">

                            <a href="#" class="img-link">
                                <img src="{{ Voyager::image($last_news->image) }}" alt="Image" class="img-fluid">
                            </a>

                            <div class="post-content">

                                <div class="post-meta">
                                    <a href="#">{{ $last_news->created_at->toFormattedDateString() }}</a>
                                    <span class="mx-1">/</span>
                                    <a href="#">Admission</a>, <a href="#">Updates</a>
                                </div>

                                <h3 class="post-heading">
                                    <a href="#">{{ $last_news->title }}</a>
                                </h3>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6">

                        @foreach($news as $item)

                            <div class="post-entry-big horizontal d-flex mb-4">

                                <a href="#" class="img-link mr-4">
                                    <img src="{{ Voyager::image($item->image) }}" alt="Image" class="img-fluid">
                                </a>

                                <div class="post-content">

                                    <div class="post-meta">
                                        <a href="#">{{ $item->created_at->toFormattedDateString() }}</a>
                                        <span class="mx-1">/</span>
                                        <a href="#">Admission</a>, <a href="#">Updates</a>
                                    </div>

                                    <h3 class="post-heading">
                                        <a href="#">{{ $item->title }}</a>
                                    </h3>

                                </div>

                            </div>

                        @endforeach

                    </div>

                </div>

            </div>

            <div class="col-lg-3">

                <div class="section-heading">
                    <h2 class="text-black">Campus Videos</h2>
                    <a href="#">View All Videos</a>
                </div>

                <a href="https://vimeo.com/45830194" class="video-1 mb-4" data-fancybox="" data-ratio="2">

              <span class="play">
                <span class="icon-play"></span>
              </span>

                    <img src="images/course_5.jpg" alt="Image" class="img-fluid">

                </a>

                <a href="https://vimeo.com/45830194" class="video-1 mb-4" data-fancybox="" data-ratio="2">

                <span class="play">

                  <span class="icon-play"></span>

                </span>

                    <img src="images/course_5.jpg" alt="Image" class="img-fluid">
                </a>

            </div>

        </div>

    </div>

</div>
