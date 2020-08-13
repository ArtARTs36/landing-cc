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
</head>

<body>

<div class="loading">
    <div class="text-center middle">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>

<nav class="navbar change navbar-expand-lg">
    <div class="container">

        <!-- Logo -->
        <a class="logo" href="#">
            <img src="{{ asset('img/logo-light.png') }}" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>

        <!-- navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-scroll-nav="0">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="1">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="2">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="3">Price</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="4">Testimonials</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="true" aria-expanded="false">Pages</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="about us.html">About Us</a>
                        <a class="dropdown-item" href="features.html">Features</a>
                        <a class="dropdown-item" href="faq.html">FAQ</a>
                        <a class="dropdown-item" href="blogs.html">Blogs</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link butn butn-bg" href="contact.html"><span>Contact</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="header" data-scroll-index="0">
    <div class="background valign bg-img parallaxie" data-overlay-dark="9" data-background="{{ asset('img/bg1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8 offset-md-1 col-md-10 text-center caption mt-80">
                    <h1>Everything you need to increase your Business</h1>
                    <p>We design and develop mobile apps that delight your users and grow your business.<br>
                        Enterprise grade development combined with outstanding design.</p>
                    <a href="#0" class="butn light mt-30">
                        <span>Contact Us<i class="pe-7s-paper-plane"></i></span>
                    </a>
                    <a href="#0" class="butn butn-rgba mt-30">
                        <span>Watch Demo <i class="pe-7s-play"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="about section-padding pt-0" data-scroll-index="1">
    <div class="container top">
        <div class="row">

            <div class="col-lg-4 item">
                <div class="text-center">
                    <span class="icon pe-7s-diamond"></span>
                    <h6>Awesome Design</h6>
                    <p>It has survived not only five centuries, but also the leap into remaining.</p>
                </div>
            </div>

            <div class="col-lg-4 item">
                <div class="text-center">
                    <span class="icon pe-7s-box2"></span>
                    <h6>Unlimited Features</h6>
                    <p>It has survived not only five centuries, but also the leap into remaining.</p>
                </div>
            </div>

            <div class="col-lg-4 item">
                <div class="text-center">
                    <span class="icon pe-7s-light"></span>
                    <h6>Powerful & Simple</h6>
                    <p>It has survived not only five centuries, but also the leap into remaining.</p>
                </div>
            </div>

        </div>
    </div>

    <div class="clients text-center">
        <div class="container">
            <span>Trusted By</span>
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="brand">
                        <a href="#0">
                            <img src="{{ asset('/img/clients-logo/1.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="brand">
                        <a href="#0">
                            <img src="{{ asset('/img/clients-logo/2.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="brand">
                        <a href="#0">
                            <img src="{{ asset('/img/clients-logo/3.png') }}'" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="brand">
                        <a href="#0">
                            <img src="{{ asset('/img/clients-logo/4.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="brand">
                        <a href="#0">
                            <img src="{{ asset('/img/clients-logo/5.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="brand">
                        <a href="#0">
                            <img src="{{ asset('/img/clients-logo/6.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="banner section-padding bg-gray" data-scroll-index="2">
    <div class="container">
        <div class="row">

            <div class="col-md-5">
                <div class="img mb-sm50">
                    <img src="{{ asset('/img/v1.svg') }}" alt="">
                </div>
            </div>

            <div class="offset-md-1 col-md-6 valign">
                <div class="content">
                    <span class="sm-title">Awesome Tools</span>
                    <h3>We Provide Almost Every Kind Of Business Solution.</h3>
                    <p>Fusce imperdiet justo vitae dui eleifend imperdiet sed ac massa. Eu scelerisque felis
                        imperdiet proin fermentum. Odio pellentesque diam volutpat commodo sed.</p>
                    <a href="#0" class="butn butn-bg">
                        <span>View More <i class="pe-7s-angle-right"></i></span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="banner section-padding" data-scroll-index="2">
    <div class="container">
        <div class="row">

            <div class="col-md-6 valign">
                <div class="content mb-sm50">
                    <span class="sm-title">Awesome Tools</span>
                    <h3>We Provide Almost Every Kind Of Business Solution.</h3>
                    <p>Fusce imperdiet justo vitae dui eleifend imperdiet sed ac massa. Eu scelerisque felis
                        imperdiet proin fermentum. Odio pellentesque diam volutpat commodo sed.</p>
                    <a href="#0" class="butn butn-bg">
                        <span>View More <i class="pe-7s-angle-right"></i></span>
                    </a>
                </div>
            </div>

            <div class="offset-md-1 col-md-5">
                <div class="img">
                    <img src="{{ asset('img/v3.svg') }}" alt="">
                </div>
            </div>

        </div>
    </div>
</section>

<section class="process">
    <div class="section-padding background bg-img parallaxie" data-overlay-dark="9" data-background="img/bg1.jpg">
        <div class="container">
            <div class="row">

                <div class="section-head text-center col-sm-12">
                    <h6 class="sm-title">How It's Work</h6>
                    <h4>Our Process</h4>
                </div>

                <div class="col-lg-3 col-md-6 padding mb-md50">
                    <div class="item text-center">
                        <img src="{{ asset('img/arrow1.png') }}" class="tobotm" alt="">
                        <span class="icon pe-7s-scissors"></span>
                        <h6><span>01.</span>Analyze</h6>
                        <p>Fusce imperdiet justo vitae ac massa scelerisque.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padding mb-md50">
                    <div class="item text-center">
                        <img src="{{ asset('img/arrow1.png') }}" alt="">
                        <span class="icon pe-7s-diamond"></span>
                        <h6><span>02.</span>Strategy</h6>
                        <p>Fusce imperdiet justo vitae ac massa scelerisque.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padding mb-sm50">
                    <div class="item text-center">
                        <img src="{{ asset('img/arrow1.png') }}" class="tobotm" alt="">
                        <span class="icon pe-7s-rocket"></span>
                        <h6><span>03.</span>lounch</h6>
                        <p>Fusce imperdiet justo vitae ac massa scelerisque.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padding">
                    <div class="item text-center">
                        <span class="icon pe-7s-check"></span>
                        <h6><span>03.</span>Result</h6>
                        <p>Fusce imperdiet justo vitae ac massa scelerisque.</p>
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

<section class="testimonials section-padding" data-scroll-index="4">
    <div class="container">
        <div class="row">

            <div class="section-head text-center col-sm-12">
                <h6 class="sm-title">What Peapole Says?</h6>
                <h4>Testimonials</h4>
            </div>

            <div class="col-lg-12">
                <div class="owl-carousel owl-theme text-center">
                    <div class="item">
                        <div class="client-area">
                            <p>Nulla metus metus sed euismod volutpat velit class aptent taciti sociosqu ad litora
                                torquent per conubia
                                nostra.</p>
                            <div class="img">
                                <span class="icon"><img src="img/left-quote.svg" alt=""></span>
                                <span class="icon"><img src="img/right-quote.svg" alt=""></span>
                                <div class="author">
                                    <img src="img/clients/1.jpg" alt="">
                                </div>
                            </div>
                            <h6>Alex Smith</h6>
                            <span>Envato Customer</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-area">
                            <p>Nulla metus metus sed euismod volutpat velit class aptent taciti sociosqu ad litora
                                torquent per conubia
                                nostra.</p>
                            <div class="img">
                                <span class="icon"><img src="img/left-quote.svg" alt=""></span>
                                <span class="icon"><img src="img/right-quote.svg" alt=""></span>
                                <div class="author">
                                    <img src="img/clients/2.jpg" alt="">
                                </div>
                            </div>
                            <h6>Sam Smith</h6>
                            <span>Envato Customer</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-area">
                            <p>Nulla metus metus sed euismod volutpat velit class aptent taciti sociosqu ad litora
                                torquent per conubia
                                nostra.</p>
                            <div class="img">
                                <span class="icon"><img src="img/left-quote.svg" alt=""></span>
                                <span class="icon"><img src="img/right-quote.svg" alt=""></span>
                                <div class="author">
                                    <img src="img/clients/3.jpg" alt="">
                                </div>
                            </div>
                            <h6>Alex Martin</h6>
                            <span>Envato Customer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Testimonials ====
    ======================================= -->



<!-- =====================================
    ==== Start Call Action -->

<div class="call-action text-center">
    <div class="background bg-img  parallaxie pt-80 pb-80" data-background="img/bg2.jpg" data-overlay-dark="8">
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-6 offset-md-2 col-md-8">
                    <div>
                        <h3>Do You Have Any Project? Contact Us</h3>
                        <a href="#0" class="butn light mt-30">
                            <span>Contact Us<i class="pe-7s-paper-plane"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Call Action ====
    ======================================= -->



<!-- =====================================
    ==== Start Blog -->

<section class="blog section-padding" data-scroll-index="7">
    <div class="container">
        <div class="row">

            <div class="section-head text-center col-sm-12">
                <h6 class="sm-title">Latest News</h6>
                <h4>Our Blog</h4>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="item mb-sm50">
                    <div class="post-img">
                        <div class="img">
                            <a href="#0"><span>6 Aug</span> 2019</a>
                            <img src="img/blog/1.jpg" alt="">
                        </div>
                    </div>
                    <div class="cont">
                        <div class="info">
                            <a href="#0"><i class="pe-7s-user"></i> <span>By</span> Admin</a>
                            <a href="#0"><i class="pe-7s-ticket"></i> WordPress</a>
                        </div>

                        <h5><a href="#0">Master These Awesome New Skills in May 2019</a></h5>

                        <a href="#0" class="more">
                            <span>Read More <i class="pe-7s-angle-right-circle"></i></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="item">
                    <div class="post-img">
                        <div class="img">
                            <a href="#0"><span>6 Aug</span> 2019</a>
                            <img src="img/blog/2.jpg" alt="">
                        </div>
                    </div>
                    <div class="cont">
                        <div class="info">
                            <a href="#0"><i class="pe-7s-user"></i> <span>By</span> Admin</a>
                            <a href="#0"><i class="pe-7s-ticket"></i> WordPress</a>
                        </div>

                        <h5><a href="#0">48 Best WordPress Themes On Envato</a></h5>

                        <a href="#0" class="more">
                            <span>Read More <i class="pe-7s-angle-right-circle"></i></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="item">
                    <div class="post-img">
                        <div class="img">
                            <a href="#0"><span>6 Aug</span> 2019</a>
                            <img src="img/blog/3.jpg" alt="">
                        </div>
                    </div>
                    <div class="cont">
                        <div class="info">
                            <a href="#0"><i class="pe-7s-user"></i> <span>By</span> Admin</a>
                            <a href="#0"><i class="pe-7s-ticket"></i> WordPress</a>
                        </div>

                        <h5><a href="#0">Why Good Designers Are Like Crocodiles</a></h5>

                        <a href="#0" class="more">
                            <span>Read More <i class="pe-7s-angle-right-circle"></i></span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- End Blog ====
    ======================================= -->



<!-- =====================================
    ==== Start Footer -->

<footer class="footer section-padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="item">
                    <a class="logo" href="#">
                        <img src="img/logo-dark.png" alt="logo">
                    </a>
                    <p>Nulla metus metus sed euismod volutpat velit class aptent taciti ad litora torquent per
                        conubia nostra.</p>
                    <div class="social">
                        <a href="#0" class="icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#0" class="icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#0" class="icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#0" class="icon">
                            <i class="fab fa-behance"></i>
                        </a>
                        <a href="#0" class="icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="offset-lg-1 col-lg-3 col-md-3">
                <div class="item">
                    <h6>Useful Links</h6>
                    <ul>
                        <li><a href="#0"><i class="pe-7s-angle-right-circle"></i> About Us</a></li>
                        <li><a href="#0"><i class="pe-7s-angle-right-circle"></i> Features</a></li>
                        <li><a href="#0"><i class="pe-7s-angle-right-circle"></i> Help</a></li>
                        <li><a href="#0"><i class="pe-7s-angle-right-circle"></i> How It Works?</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="item">
                    <h6>Subscribe to Our Newsletter</h6>
                    <form>
                        <input id="subscribe_email" type="email" name="email" placeholder="Your Email">
                        <button class="butn butn-bg"><span>Subscribe <i
                                        class="pe-7s-paper-plane"></i></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; All Right Reserved By UI-ThemeZ - 2019</p>
                </div>
            </div>
        </div>
    </div>
</footer>

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

</body>

</html>
