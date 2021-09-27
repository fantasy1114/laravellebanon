/*=========================================================================================
  File Name: form-validation.js
  Description: jquery bootstrap validation js
  ----------------------------------------------------------------------------------------
  Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
  Author: PIXINVENT
  Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

$(function() {
    'use strict';

    var pageLoginForm = $('.auth-login-form');

    // jQuery Validation
    // --------------------------------------------------------------------
    if (pageLoginForm.length) {
        pageLoginForm.validate({
            /*
            * ? To enable validation onkeyup
            onkeyup: function (element) {
              $(element).valid();
            },*/
            /*
            * ? To enable validation on focusout
            onfocusout: function (element) {
              $(element).valid();
            }, */
            rules: {
                'email': {
                    required: true,
                    email: true
                },
                'password': {
                    required: true
                }
            }
        });
        $(".auth-login-form").on('submit', function(e) {
            var isValid = $(".auth-login-form").valid();
            e.preventDefault();
            if (isValid) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'post',
                    url: 'login',
                    data: $('form').serialize(),
                    success: function() {
                        // location.reload();
                    }
                });
            }
        });
    }
});