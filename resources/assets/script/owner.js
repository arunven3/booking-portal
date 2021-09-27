const owenerDashboard = {
  propertySave: function () {
    var data = {
      name: $('input[name="txtPropertyName"]').val(),
      size: $('input[name="txtPropertySize"]').val(),
      type: $('select[name="txtPropertyType"]').val(),
      description: $('input[name="txtPropertyDescription"]').val(),
      address: $('input[name="txtPropertyAddress"]').val(),
      longitude: $('input[name="txtPropertyLongitude"]').val(),
      latitude: $('input[name="txtPropertyLatitude"]').val()
    }

    $.ajax({
      type: "POST",
      url: '/register/property',
      data: data,
      dataType: 'json',
      complete: function (data) {
        var response = JSON.parse(data.responseText);

        if (response.success) {
          $('#modalAddProperty').modal('hide');
          alertShowandHide('success', 'Property added successful');
        } else {
          alertShowandHide('error', response.message);
        }
      },
    });
  },

  userDetailsSave: function () {
    var data = {
      name: $('input[name="txFullName"]').val(),
      email: $('input[name="txtEmail"]').val(),
      phone: $('input[name="txtPhone"]').val(),
      password: $('input[name="txtPassword"]').val()
    }

    $.ajax({
      type: "POST",
      url: '/update/userDetails',
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
  if ($('body').data('page') === 'Owner-dashboard') {
    ajaxLoadingAnimation();

    $('#modalAddProperty').on('hidden.bs.modal', function () {
      $('#frmRegisterProperty').trigger('reset');
    });

    $('button[data-role="user-details-submit"]').on('click', function () {
      clearError('#frmUserDetailsEdit');
      $('.loading-overlay .loading').attr('data-loading-text', 'EditingDetails...')

      if (validate('#frmUserDetailsEdit')) {
        owenerDashboard.userDetailsSave();
      }
    });

    $('button[data-role="submit"]').on('click', function () {
      clearError('#frmRegisterProperty');
      $('.loading-overlay .loading').attr('data-loading-text', 'Registering...')

      if (validate('#frmRegisterProperty') && validateSelect('#frmRegisterProperty')) {
        owenerDashboard.propertySave();
      }
    });
  }
});