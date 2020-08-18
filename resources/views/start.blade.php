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
                    <a href="{{ page_url('map') }}" class="butn butn-rgba mt-30">
                        <span>Мы на карте <i class="pe-7s-map-marker"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

@include('start_page.features')
<hr>
@include('start_page.about')
@include('start_page.equipment')
@include('start_page.trademark')

@if ($products->isNotEmpty())
@include('start_page.products')
@endif

@include('start_page.impressions')
@include('start_page.contacts')

@if ($externalPosts->isNotEmpty())
@include('start_page.external_posts')
@endif

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
