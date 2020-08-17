function sendMessage(root)
{
    let val = (field) => {return $(root + ' #' + field).val()};

    $.ajax({
        type: "POST",
        url: '/api/form/feedback',
        data: {
            'author_full_name': val('feedback-authorName'),
            'author_email': val('feedback-authorEmail'),
            'subject': val('feedback-subject'),
            'message': val('feedback-message'),
        },
        success: function () {
            $('#feedback-modal-success').modal();
        },
        error: function (response) {
            if (response.status === 422) {
                let errors = '';
                for (const key in response.responseJSON.errors) {
                    errors += '<div class="alert alert-danger" role="alert" style="">\n' +
                        getErrorText(key) +
                        '</div>';
                }

                $('<div id="feedback-modal-error-validation" class="modal">\n' +
                    '<h6>Вы указали не корректные данные</h6> <br/>' +
                    errors +
                    '</div>').appendTo('body').modal();
            } else {
                $('#feedback-modal-error-undefined').modal();
            }
        },
    });
}

function getErrorText(key)
{
    switch (key) {
        case "author_full_name":
            return 'Укажите Ваше имя';
        case "author_email":
            return 'Вы не правильно указали адрес электронной почты';
        case "subject":
            return 'Вы не правильно указали тему обращения';
        case "message":
            return 'Вы отправили некорректное сообщение';
        default:
            return 'Неизвестная ошибка';
    }
}
