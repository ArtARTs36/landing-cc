@extends('layouts.main')

@section('page_title', 'Отзывы')

@section('content')

    @include('layouts.parallax')

    <section class="testimonials section-padding">
        <div class="container">
            <div class="row">

                <div class="section-head text-center col-sm-12">
                    <h4>Отзывы о нас</h4>
                </div>

                <div class="col-lg-12">
                    @if ($impressions->isEmpty())
                        <div class="alert alert-warning" role="alert">
                            На данный момент отзывы отсутствуют ;(
                        </div>
                    @endif
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

    <section class="page-contact section-padding" style="background: #eee">
        <div class="container">
            <div class="row">

                <div class="section-head text-center col-sm-12">
                    <h4>Вы можете оставить свой отзыв</h4>
                </div>

                <div class="offset-lg-1 col-lg-10">
                    @include('impressions.form')
                </div>
            </div>
        </div>
    </section>

@endsection
