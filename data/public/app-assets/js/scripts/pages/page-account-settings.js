/*=========================================================================================
	File Name: page-account-setting.js
	Description: Account setting.
	----------------------------------------------------------------------------------------
	Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
	Author: PIXINVENT
	Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

$(function () {
  'use strict';

  // variables
  var form = $('.validate-form'),
    flat_picker = $('.flatpickr'),
    accountUploadImg = $('#account-upload-img'),
    accountUploadBtn = $('#account-upload');

  // Update user photo on click of button
  if (accountUploadBtn) {
    accountUploadBtn.on('change', function (e) {
      var reader = new FileReader(),
        files = e.target.files;
      reader.onload = function () {
        if (accountUploadImg) {
          accountUploadImg.attr('src', reader.result);
        }
      };
      reader.readAsDataURL(files[0]);
    });
  }

  // variables
  var form = $('.validate-form'),
    flat_picker = $('.flatpickr'),
    uaccountUploadImg = $('#uaccount-upload-img'),
    uaccountUploadBtn = $('#uaccount-upload');

  // Update user photo on click of button
  if (uaccountUploadBtn) {
    uaccountUploadBtn.on('change', function (e) {
      var reader = new FileReader(),
        files = e.target.files;
      reader.onload = function () {
        if (uaccountUploadImg) {
          uaccountUploadImg.attr('src', reader.result);
        }
      };
      reader.readAsDataURL(files[0]);
    });
  }

  // flatpickr init
  if (flat_picker.length) {
    flat_picker.flatpickr({
      onReady: function (selectedDates, dateStr, instance) {
        if (instance.isMobile) {
          $(instance.mobileInput).attr('step', null);
        }
      }
    });
  }

  // jQuery Validation
  // --------------------------------------------------------------------
  if (form.length) {
    form.each(function () {
      var $this = $(this);

      $this.validate({
        rules: {
          username: {
            required: true
          },
          name: {
            required: true
          },
          email: {
            required: true,
            email: true
          },
          password: {
            required: true
          },
          company: {
            required: true
          },
          'new-password': {
            required: true,
            minlength: 6
          },
          'confirm-new-password': {
            required: true,
            minlength: 6,
            equalTo: '#account-new-password'
          },
          dob: {
            required: true
          },
          phone: {
            required: true
          },
          website: {
            required: true
          },
          'select-country': {
            required: true
          }
        }
      });
      $this.on('submit', function (e) {
        e.preventDefault();
      });
    });
  }


  // static Home
  var form = $('.validate-form'),
  flat_picker = $('.flatpickr'),
  homeimageimg = $('#home_image-img'),
  homeimageBtn = $('#home_image');

  // Update user photo on click of button
  if (homeimageBtn) {
    homeimageBtn.on('change', function (e) {
      var reader = new FileReader(),
        files = e.target.files;
      reader.onload = function () {
        if (homeimageimg) {
          homeimageimg.attr('src', reader.result);
        }
      };
      reader.readAsDataURL(files[0]);
    });
  }

  // static About
  var form = $('.validate-form'),
  flat_picker = $('.flatpickr'),
  aboutimageimg = $('#about_image_img'),
  aboutimage = $('#about_image');

  // Update user photo on click of button
  if (aboutimage) {
    aboutimage.on('change', function (e) {
      var reader = new FileReader(),
        files = e.target.files;
      reader.onload = function () {
        if (aboutimageimg) {
          aboutimageimg.attr('src', reader.result);
        }
      };
      reader.readAsDataURL(files[0]);
    });
  }


});
