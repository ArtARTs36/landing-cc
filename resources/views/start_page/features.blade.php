<section class="about section-padding pt-0" data-scroll-index="0">
    <div class="container top">
        <div class="row">

            <div class="col-lg-4 item">
                <div class="text-center">
                    <span class="icon pe-7s-rocket"></span>
                    <h6>Современное оборудование</h6>
                    <p>Имеем современное оборудование, способствующее высокой производительности.</p>
                </div>
            </div>

            <div class="col-lg-4 item">
                <div class="text-center">
                    <span class="icon pe-7s-box2"></span>
                    <h6>Свой Торговый Знак</h6>
                    <p>Имеем собственный торговый знак "Цветы Черноземья".</p>
                </div>
            </div>

            <div class="col-lg-4 item">
                <div class="text-center">
                    <span class="icon pe-7s-gift"></span>
                    <h6>Онлайн-Магазин</h6>
                    <p>
                        @if (! empty(setting('site.link_ozon')))
                            Приобрести нашу продукцию можно в онлайн-магазине на платформе
                            <a href="{{ setting('site.link_ozon') }}" style="color:#007bff">OZON</a>
                        @else
                            Нашу продукцию совсем скоро можно будет приобрести онлайн
                        @endif
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
