// js Document

(function($) {
    "use strict";


// ----------------------------- E-Mail Address Assembly
    document.addEventListener('DOMContentLoaded', function () {
        var mailAddresses = document.querySelectorAll('.mailaddress');
        mailAddresses.forEach(function(mailAddress) {
            var name = mailAddress.dataset.name;
            var domain = mailAddress.dataset.domain;
            var tld = mailAddress.dataset.tld;
            var emailAddress = name + '@' + domain + '.' + tld;
            mailAddress.setAttribute('href', 'mailto:' + emailAddress);
            mailAddress.textContent = emailAddress;
        });
    });


// -------------------- Remove Placeholder When Focus Or Click
        $("input,textarea").each( function(){
            $(this).data('holder',$(this).attr('placeholder'));
            $(this).on('focusin', function() {
                $(this).attr('placeholder','');
            });
            $(this).on('focusout', function() {
                $(this).attr('placeholder',$(this).data('holder'));
            });     
        });


// ----------------------------- Select Function
        if($(".nice-select").length) {
            $('.nice-select').niceSelect();
        }

        
// --------------------------------- Contact Form
// init the validator
// validator files are included in the download package
// otherwise download from http://1000hz.github.io/bootstrap-validator

        if($("#contact-form").length) {
            $('#contact-form').validator();
            // when the form is submitted
            $('#contact-form').on('submit', function (e) {

                // if the validator does not prevent form submit
                if (!e.isDefaultPrevented()) {
                    var url = "contact.php";

                    // POST values in the background the the script URL
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: $(this).serialize(),
                        success: function (data)
                        {
                            // data = JSON object that contact.php returns

                            // we recieve the type of the message: success x danger and apply it to the
                            var messageAlert = 'alert-' + data.type;
                            var messageText = data.message;

                            // let's compose Bootstrap alert box HTML
                            var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable">' + messageText + '</div>';

                            // If we have messageAlert and messageText
                            if (messageAlert && messageText) {
                                // inject the alert to .messages div in our form
                                $('#contact-form').find('.messages').html(alertBox);
                                // empty the form
                                $('#contact-form')[0].reset();
                                // Blenden Sie nur das Formularelemente aus, ohne .messages-Div
                                $('#contact-form .form-group, #contact-form button').fadeOut('slow', function() {});
                            }
                        }
                    });
                    return false;
                }
            });
          }

// --------------------------------- Registration Form

        if($("#registration-form").length) {
            $('#registration-form').validator();
            // when the form is submitted
            $('#registration-form').on('submit', function (e) {

                // if the validator does not prevent form submit
                if (!e.isDefaultPrevented()) {
                    var url = "register.php";

                    // POST values in the background the the script URL
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: $(this).serialize(),
                        success: function (data)
                        {
                            // data = JSON object that contact.php returns

                            // we recieve the type of the message: success x danger and apply it to the
                            var messageAlert = 'alert-' + data.type;
                            var messageText = data.message;

                            // let's compose Bootstrap alert box HTML
                            var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable">' + messageText + '</div>';

                            // If we have messageAlert and messageText
                            if (messageAlert && messageText) {
                                // inject the alert to .messages div in our form
                                $('#registration-form').find('.messages').html(alertBox);
                                // empty the form
                                $('#registration-form')[0].reset();
                                // Blenden Sie nur das Formularelemente aus, ohne .messages-Div
                                $('#registration-form .form-group, #registration-form button').fadeOut('slow', function() {});
                            }
                        }
                    });
                    return false;
                }
            });
          }


    
})(jQuery);