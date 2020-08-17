<section class="price section-padding bg-gray" data-scroll-index="3">
    <div class="container">
        <div class="row">

            <div class="section-head text-center col-sm-12">
                <a href="/products">
                    <h6 class="sm-title">Посмотреть всю</h6>
                </a>
                <h4>Наша продукция</h4>
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
                                </ul>
                            </div>
                        </div>
                        <div class="order">
                            <a href="{{ $product->order_link }}" class="butn butn-light">
                                <span>Заказать <i class="pe-7s-angle-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
</section>
