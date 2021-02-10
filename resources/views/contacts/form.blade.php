 <form class="form" id="contact-form" method="post" onsubmit="return false;">
    <div class="messages">

    </div>

    <div class="controls" id="form-feedback">

        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <input id="feedback-authorName"
                           type="text"
                           name="name"
                           placeholder="Как к Вам обращаться? *"
                           required="required"
                           data-error="Обязательное поле"
                    >
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <input id="feedback-authorEmail"
                           type="email"
                           name="email"
                           placeholder="Адрес электронной почты"
                    >
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <input id="feedback-subject" type="text" name="subject" placeholder="Тема">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <input id="feedback-authorPhone" type="text" name="phone" placeholder="Номер телефона *">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                        <textarea id="feedback-message"
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
                <button type="submit" class="butn butn-bg" onclick="sendMessage('#form-feedback')">
                    <span>Отправить</span>
                </button>
            </div>

            @include('contacts.modals')
        </div>
    </div>
</form>

@section('scripts')
    <script src="{{ asset('/js/form/feedback.js') }}"></script>
@endsection
