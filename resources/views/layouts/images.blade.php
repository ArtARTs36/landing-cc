@php
    $counter = 0;
@endphp

@foreach($images as $image)

    @if (++$counter === 1)
        <div class="row">
    @endif

    <div class="col-lg-4 col-md-6">
        <div class="item mb-sm50">
            <div class="post-img">
                <div class="img">
                    <img src="{{ $image->webUrl() }}" alt="">
                </div>
            </div>
            <div class="cont">
                <h5><a href="#0">{{ $image->name }}</a></h5>

                <a href="{{ $image->webUrl()  }}" class="more">
                    <span>Открыть полностью <i class="pe-7s-angle-right-circle"></i></span>
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
