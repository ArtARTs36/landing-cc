<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template FULA onepage themeforest" />
    <meta name="description" content="FULA - Onepage Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <title>Цветы Черноземья</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:100,300,400,500,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style-blue.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}" />
</head>

<body>

@include('layouts/loader')
@include('layouts/navbar')

<header class="header" data-scroll-index="0">
    <div class="background valign bg-img parallaxie" data-overlay-dark="9">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8 offset-md-1 col-md-10 text-center caption mt-80">
                    <h1>Мы - идеальные поставщики меда</h1>
                    <p>Богатый опыт, наилучшее качество - наш залог успеха!</p>
                    <a href="/contacts" class="butn light mt-30">
                        <span>Контакты<i class="pe-7s-paper-plane"></i></span>
                    </a>
                    <a href="#0" class="butn butn-rgba mt-30">
                        <span>Watch Demo <i class="pe-7s-play"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

@include('start_page.features')
@include('start_page.equipment')
@include('start_page.trademark')

<section class="process">
    <div class="section-padding background bg-img parallaxie" data-overlay-dark="9" data-background="img/bg1.jpg">
        <div class="container">
            <div class="row">

                <div class="section-head text-center col-sm-12">
                    <h6 class="sm-title">Взгляните на наш</h6>
                    <h4>Процесс производства</h4>
                </div>

                <div class="col-lg-3 col-md-6 padding mb-md50">
                    <div class="item text-center">
                        <img src="{{ asset('img/arrow1.png') }}" class="tobotm" alt="">
                        <span class="icon pe-7s-scissors"></span>
                        <h6><span>01.</span>Отбор меда</h6>
                        <p>Описание</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padding mb-md50">
                    <div class="item text-center">
                        <img src="{{ asset('img/arrow1.png') }}" alt="">
                        <span class="icon pe-7s-diamond"></span>
                        <h6><span>02.</span>Откачка</h6>
                        <p>Описание</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padding mb-sm50">
                    <div class="item text-center">
                        <img src="{{ asset('img/arrow1.png') }}" class="tobotm" alt="">
                        <span class="icon pe-7s-rocket"></span>
                        <h6><span>03.</span>Фасовка</h6>
                        <p>Описание</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padding">
                    <div class="item text-center">
                        <span class="icon pe-7s-check"></span>
                        <h6><span>04.</span>Результат</h6>
                        <p>Описание</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="price section-padding bg-gray" data-scroll-index="3">
    <div class="container">
        <div class="row">

            <div class="section-head text-center col-sm-12">
                <a href="/products">
                    <h6 class="sm-title">Открыть все</h6>
                </a>
                <h4>Наши продукты</h4>
            </div>

            @foreach($products as $product)

            <div class="col-lg-4 col-md-6">
                <div class="item mb-md50">
                    <div class="cont">
                        <div class="type">
                            <h6>{{ $product->name }}</h6>
                        </div>
                        <div class="value">
                            <img src="" width="250" height="250">
                            <p><span>₽</span>{{ $product->price }}</p>
                        </div>
                        <div class="feat">
                            <ul>
                                <li><span>{{ $product->size }} {{ $product->size_unit }}</span></li>
                                <li><span>{{ $product->quantity }} {{ $product->quantity_unit }}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="order">
                        <a href="#0" class="butn butn-light">
                            <span>Купить <i class="pe-7s-angle-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>

@include('start_page.impressions')

<div class="call-action text-center">
    <div class="background bg-img  parallaxie pt-80 pb-80" data-background="{{ asset('img/bg2.jpg') }}" data-overlay-dark="8">
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-6 offset-md-2 col-md-8">
                    <div>
                        <h3>Остались вопросы? Свяжитесь с нами</h3>
                        <a href="/contacts" class="butn light mt-30">
                            <span>Задать вопрос<i class="pe-7s-paper-plane"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="blog section-padding" data-scroll-index="7">
    <div class="container">
        <div class="row">

            <div class="section-head text-center col-sm-12">
                <h6 class="sm-title">Latest News</h6>
                <h4>О нас говорят</h4>
            </div>

            @foreach($externalPosts as $post)
            <div class="col-lg-4 col-md-6">
                <div class="item mb-sm50">
                    <div class="cont">
                        <div class="info">
                            <a href="#0"><i class="pe-7s-date"></i> {{ $post->published_at->format('Y-m-d') }}</a>
                        </div>

                        <h5><a href="#0">{{ $post->title }}</a></h5>

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

@include('layouts.footer')

<script src="{{ asset('/js/jquery-3.0.0.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/scrollIt.min.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/parallaxie.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/YouTubePopUp.jquery.js') }}"></script>
<script src="{{ asset('js/map.js') }}"></script>
<script src="{{ asset('js/validator.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

</body>

</html>
