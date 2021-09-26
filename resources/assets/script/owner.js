const frmPropertiedRegistration = {
  save: function () {
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
  }
};

$( document ).ready(function() {
  if ($('body').data('page') === 'Owner-dashboard') {
    ajaxLoadingAnimation();

    $('#modalAddProperty').on('hidden.bs.modal', function () {
      $('#frmRegisterProperty').trigger('reset');
    })

    $('button[data-role="submit"]').on('click', function () {
      clearError('#frmRegisterProperty');
      if (validate('#frmRegisterProperty') && validatePassword(['txtPassword', 'txtConfirmPassword']) && validateSelect('#frmRegisterProperty')) {
        frmPropertiedRegistration.save();
      }
    });
  }
});