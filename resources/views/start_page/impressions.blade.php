@if ($impressions->isNotEmpty())
<section class="testimonials section-padding" data-scroll-index="4">
    <div class="container">
        <div class="row">

            <div class="section-head text-center col-sm-12">
                <h6 class="sm-title">Еще сомневаетесь в нас? Прочтите</h6>
                <h4>Отзывы</h4>
            </div>

            <div class="col-lg-12">
                <div class="owl-carousel owl-theme text-center">
                    @foreach($impressions as $impression)

                        <div class="item">
                            <div class="client-area">
                                <p>{{ $impression->cut(50) }}</p>
                                <div class="img">
                                    <span class="icon"><img src="{{ asset('img/left-quote.svg') }}" alt=""></span>
                                    <span class="icon"><img src="{{ asset('img/right-quote.svg') }}" alt=""></span>
                                    <div class="author">
                                        <img src="{{ asset('img/clients/1.jpg') }}" alt="">
                                    </div>
                                </div>
                                <h6>{{ $impression->getAuthorName() }}</h6>
                                <span>{{ $impression->getAuthorPosition() }}</span>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif
