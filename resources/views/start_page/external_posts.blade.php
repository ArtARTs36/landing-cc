<section class="blog section-padding" data-scroll-index="7">
    <div class="container">
        <div class="row">

            <div class="section-head text-center col-sm-12">
                <h4>О нас говорят</h4>
            </div>

            @foreach($externalPosts as $post)
                <div class="col-lg-4 col-md-6">
                    <div class="item mb-sm50">
                        <div class="post-img">
                            <div class="img">
                                <img src="{{ $post->hasImage() ? $post->image_url : asset('img/plug.jpg') }}" alt="">
                            </div>
                        </div>

                        <div class="cont">
                            <div class="info">
                                <a><i class="pe-7s-date"></i> {{ $post->published_at->format('Y-m-d') }}</a>
                            </div>

                            <h5><a href="{{ $post->link }}">{{ $post->title }}</a></h5>

                            <a href="{{ $post->link }}" class="more">
                                <span>Подробнее <i class="pe-7s-angle-right-circle"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
