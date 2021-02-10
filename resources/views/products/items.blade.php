@php
    $counter = 0;
@endphp

@foreach($products as $product)

    @if (++$counter === 1)
        <div class="row">
            @endif

            <div class="col-lg-4 col-md-6">
                <div class="item mb-sm50">
                    <div class="post-img">
                        <div class="img">
                            <img src="{{ $product->image ? $product->image->webUrl() : asset('img/plug.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="cont">
                        <div class="info">
                            <i class="pe-7s-wallet"></i> {{ $product->price }} <span>₽</span>
                            <i class="pe-7s-filter"></i> {{ $product->size }} {{ $product->size_unit }}
                        </div>

                        <h5>{{ $product->name }}</h5>

                        <a href="" class="more">
                            <span>Заказать <i class="pe-7s-angle-right-circle"></i></span>
                        </a>
                    </div>
                </div>
            </div>

            @if (++$counter % 3 === 0)
        </div>
        <br/>
        <div class="row">
    @endif
@endforeach
