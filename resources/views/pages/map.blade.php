@extends('layouts.main')

@section('page_title', $page->title)

@section('content')

    @include('layouts.parallax')

    <section class="blogs section-padding main-content">
        <div class="container">
            <div class="row">
                <div class="map-frame">{!! $page->body !!}</div>

            </div>
        </div>
    </section>
@endsection
