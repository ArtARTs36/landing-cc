<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template FULA onepage themeforest" />
    <meta name="description" content="FULA - Onepage Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <title>Страница не найдена - Цветы Черноземья</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:100,300,400,500,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style-blue.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}" />
</head>

<body>

<section class="error valign bg-img pb-100" data-background="img/404.png">
    <div class="container text-center">

        <div class="row">
            <div class="img col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <img src="{{ asset('img/404.svg') }}" alt="">
                <p>Страница не найдена!</p>
                <a href="/" class="butn butn-bg">
                    <span>
                        <i class="fas fa-chevron-left"></i> Перейти на главную
                    </span>
                </a>
            </div>
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
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/parallaxie.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/map.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

</body>
</html>
