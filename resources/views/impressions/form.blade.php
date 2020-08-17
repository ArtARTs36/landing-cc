<form class="form" id="contact-form" method="post" onsubmit="return false;">
    <div class="controls" id="form-impression">

        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <input id="impression-authorName"
                           type="text"
                           name="authorName"
                           placeholder="Ваше имя *"
                           required="required"
                           data-error="Обязательное поле"
                    >
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <input id="impression-authorEmail"
                           type="email"
                           name="email"
                           placeholder="Адрес электронной почты"
                           required="required"
                           data-error="Обязательное поле"
                    >
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <input id="impression-authorPosition" type="text" name="author_position"
                           placeholder="Степень сотрудничества: Потребитель/Сотрудник/Партнер/и т.д."
                    >
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                        <textarea id="impression-message"
                                  name="message"
                                  placeholder="Сообщение *"
                                  rows="4"
                                  required="required"
                                  data-error="Обязательное поле"
                        ></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <button type="submit" class="butn butn-bg" onclick="sendImpression('#form-impression')">
                    <span>Отправить</span>
                </button>
            </div>

            @include('impressions.modals')
        </div>
    </div>
</form>

@section('scripts')
    <script src="{{ asset('/js/form/impression.js') }}"></script>
@endsection
