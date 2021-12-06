/*=========================================================================================
  File Name: form-validation.js
  Description: jquery bootstrap validation js
  ----------------------------------------------------------------------------------------
  - Vuejs, HTML & Laravel Admin Dashboard Template
  
  
==========================================================================================*/

$(function() {
  "use strict";

  var pageResetForm = $(".auth-register-form");

  // jQuery Validation
  // --------------------------------------------------------------------
  if (pageResetForm.length) {
    pageResetForm.validate({
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
        "register-username": {
          required: true,
        },
        "register-email": {
          required: true,
          email: true,
        },
        "register-password": {
          required: true,
        },
      },
    });
  }
});
