$( document ).ready(function() {
  $('form .input-group-addon.pass').each(function () {
    $(this).on('click', function () {
      $(this).toggleClass('fa-eye-slash fa-eye');
      let password = $(this).siblings('input');

      if (password.attr('type') === 'text')
        password.attr('type', 'password');
      else
        password.attr('type', 'text');
    });
  });
});

const  ajaxLoadingAnimation = function () {
  $(document).bind("ajaxSend", function(){
    $('.loading-overlay').css('visibility','visible');
    $('.loading').removeClass('loading-stop');
  }).bind("ajaxComplete", function(){
    $('.loading-overlay').css('visibility','hidden');
    $('.loading').addClass('loading-stop');
  });
}

const validatePassword = function (passwordField) {
  var i;
  var checkPassword = $(`[name="${passwordField[0]}"`).val();
  var success = true;

  for(i = 1; i<passwordField.length; i++) {
    if (checkPassword !== $(`[name="${passwordField[i]}"]`).val()) {
      success = false;
    }
  }
  if(!success) {
    for(i = 0; i<passwordField.length; i++) {
      var inputGroup = $(`[name="${passwordField[i]}"]`).closest('.input-group');
      inputGroup.find('.error-box').text('Password not matching');
      inputGroup.addClass('error');
    }
  }

  return success;
}

const validateSelect = function (selector) {
  var success = true;

  $(selector + ' .select.required:visible').each(function () {
    var inputGroup = $(this).closest('.input-group');
    var field = $(this).find('.form-control');

    if (field.val() === null) {
      inputGroup.find('.error-box').text(inputGroup.attr('data-message'));
      inputGroup.addClass('error');
      success = false;
    }
  });
  return success;
};

const validate = function (selector) {
  var success = true;

  $(selector + ' .required:visible').each(function () {
    var inputGroup = $(this).closest('.input-group');
    var field = $(this).find('.form-control');

    if (field.val() === '' || null) {
      inputGroup.find('.error-box').text(inputGroup.attr('data-message'));
      inputGroup.addClass('error');
      success = false;
    }
  });
  return success;
};

const clearError = function (selector) {
  $(selector + ' .required:visible').each(function () {
    var inputGroup = $(this).closest('.input-group');
    inputGroup.find('.error-box').text('');
    inputGroup.removeClass('error');
  });
};