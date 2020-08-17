@extends('layouts.main')

@section('page_title', 'Контакты')

@section('content')

    @include('layouts.parallax')

    <section class="page-contact section-padding">
        <div class="container">
            <div class="row">

                <div class="section-head text-center col-sm-12">
                    <h6 class="sm-title">Ответ будет мгновенным</h6>
                    <h4>Отправить нам сообщение</h4>
                </div>

                <div class="offset-lg-1 col-lg-10">
                    @include('contacts.form')
                </div>
            </div>
        </div>
    </section>

    @include('contacts.methods')

@endsection
