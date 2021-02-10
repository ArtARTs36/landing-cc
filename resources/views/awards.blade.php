@extends('layouts.main')

@section('page_title', 'Наши награды')

@section('content')

    @include('layouts.parallax')

    <section class="blog section-padding">
        <div class="container">
            <div class="row">

                <div class="section-head text-center col-sm-12">
                    <h6 class="sm-title">Фото-Галерея</h6>
                    <h4>Наши награды</h4>
                </div>

                @include('layouts.images')
            </div>
        </div>
    </section>

@endsection
