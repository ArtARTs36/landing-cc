@extends('layouts.main')

@section('page_title', $page->title)

@section('content')

    @include('layouts.parallax')

    <section class="blogs section-padding main-content">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="posts blog mb-md50 page-{{ $page->slug }}">

                        <div class="item">
                            <div class="cont">
                                <div class="info">
                                    <i class="pe-7s-date"></i> {{ $page->updated_at }}
                                </div>

                                <h5>{{ $page->title }}</h5>
                                <p>{!! $page->body !!}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
