$(document).ready(function () {
    $('button.feedback_button').on('click', function (event) {
        event.preventDefault();
        var name = $('input.feedback_name').val();
        var phone = $('input.feedback_number').val();

        $.ajax({
            method: "POST",
            url: "mail.php",
            data: { feedback_name: name, feedback_number: phone }
        })
            .done(function () {
                $('input.feedback_name').val('');
                $('input.feedback_number').val('');
            });


    })
})