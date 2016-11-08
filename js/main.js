

$(document).ready(function () {

    $.validator.setDefaults({
        errorClass: 'help-block',
        highlight: function(element) {
            $(element)
                .closest('.form-group')
                .addClass('has-error');
        },
        unhighlight: function(element) {
            $(element)
                .closest('.form-group')
                .removeClass('has-error');
        }
    });
});


$("#userForm").validate({
    rules: {
        email: {
            required: true,
            email: true
        },
        password: "required",
        password_again: {
            required: true,
            equalTo: "#password"
        },
        firstName: {
            required: true
        },
        fullname: {
            required: true
        },
        lastName: {
            required: true
        },
        message: {
            required: true
        }
    },
    messages: {
        email: {
            required: 'Please Enter a Email Address.',
            email: 'Please Enter a <em>valid</em> Email Address'
        },
        firstName: {
            required: 'Please Enter your First Name'
        },
        lastName: {
            required: 'Please Enter your Last Name'
        },
        fullname: {
            required: 'Please Enter your Full Name'
        },
        password: {
            required: 'Please Enter your passowrd'
        },
        password_again: {
            required: 'Please Enter your passowrd Again'
        },
        message: {
            required: 'Please provide your message'
        }
    }
});