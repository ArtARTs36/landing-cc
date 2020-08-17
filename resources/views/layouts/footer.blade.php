
<footer class="footer section-padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="item">
                    <a class="logo" href="#">
                        <img src="{{ asset('/img/logo-dark.png') }}" alt="logo">
                    </a>
                    <p>{{ setting('site.footer_text') }}</p>
                    <div class="social">
                        <a href="{{ setting('site.link_linkedin') }}" class="icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="{{ setting('site.link_instagram') }}" class="icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="{{ setting('site.link_youtube') }}" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="offset-lg-1 col-lg-3 col-md-3">
                <div class="item">
                    <h6>Ссылки</h6>
                    <ul>
                        <li><a href="/contacts"><i class="pe-7s-angle-right-circle"></i> Обратная связь</a></li>
                        <li><a href="{{ setting('site.link_ozon') }}"><i class="pe-7s-angle-right-circle"></i> Мы на OZON</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="item">
                    <h6>Обновления продукции</h6>
                    <form onsubmit="subscribeOnProductUpdateViaForm();return false;">
                        <input id="product_update_subscribe_email" type="email" name="email" placeholder="Электронная почта">
                        <button class="butn butn-bg">
                            <span>Подписаться <i class="pe-7s-paper-plane"></i></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>&copy; Цветы Черноземья - 2020</p>
                </div>
            </div>
        </div>
    </div>
</footer>
