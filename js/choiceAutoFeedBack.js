$(document).ready(function () {
    $('button.choice-send').on('click', function (event) {
        event.preventDefault();
        var name = $('input.feedbackName').val();
        var email = $('input.feedbackEmail').val();
        var phone = $('input.feedbackNumber').val();
        

        $.ajax({
            method: "POST",
            url: "choiceAutoFeedBack.php",
            data: { feedbackName: name, feedbackEmail: email, feedbackNumber: phone}
        })
            .done(function () {
                $('input.feedbackName').val('');
                $('input.feedbackNumber').val('');
                $('input.feedbackEmail').val('');
            });


    })
})