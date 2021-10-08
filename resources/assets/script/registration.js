const frmRegistration = {
  save: function () {
    var data = {
      name: $('input[name="txFullName"]').val(),
      email: $('input[name="txtEmail"]').val(),
      phone: $('input[name="txtPhone"]').val(),
      password: $('input[name="txtConfirmPassword"]').val(),
      role: $('input[name="txtPageRole"]').val()
    }

    $.ajax({
      type: "POST",
      url: '/register',
      data: data,
      dataType: 'json',
      complete: function (data) {
        var response = JSON.parse(data.responseText);

        if (response.success) {
          $('#modalEmailConfirmation').modal('show')
          $('#modalEmailConfirmation span.email').text(response.email);

        } else {
          alertShowandHide('error', response.message);
        }
      },
    });
  }
};

$( document ).ready(function() {
  if ($('body').data('page') === 'Registraion Page') {
    ajaxLoadingAnimation();
    $('#register').on('click', function () {
      clearError('frmRegistration');
      if (validate('#frmRegistration') && validatePassword(['txtPassword', 'txtConfirmPassword'])) {
        frmRegistration.save();
      }
    });

    $('button[data-role="closeSuccessMessage"]').on('click', function () {
      window.location.href = '/login';
    })
  }
});