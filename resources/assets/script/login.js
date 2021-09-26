const frmlogin = {
  save: function () {
    var data = {
      email: $('input[name="txtEmail"]').val(),
      password: $('input[name="txtPassword"]').val(),
    }

    $.ajax({
      type: "POST",
      url: '/login',
      data: data,
      dataType: 'json',

      complete: function (data) {
        var response = JSON.parse(data.responseText);

        if(response.success) {
            window.location.href = '/dashboard';
        }

        else if (response.error) {
          alertShowandHide('error', response.message);
        }
      },
    });
  }
};

$( document ).ready(function() {
  if ($('body').data('page') === 'Login Page') {
    ajaxLoadingAnimation();
    $('button[data-role="submit"]').on('click', function () {
      clearError('#frmLogin');

      if (validate('#frmLogin')) {
        frmlogin.save();
      }
    });
  }
});