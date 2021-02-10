@extends('layouts.main')

@section('page_title', 'Наша продукция')

@section('content')

    @include('layouts.parallax')

    <section class="blog section-padding">
        <div class="container">
            <div class="row">

                <div class="section-head text-center col-sm-12">
                    <h4>Наша продукция</h4>
                </div>

                @include('products.items')

            </div>
        </div>
    </section>

@endsection
