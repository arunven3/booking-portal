const alertShowandHide = function (type, message) {
  $('.alert.' + type).css("visibility", "visible");
  $('.alert.' + type + ' .content .body span').text(message);

  setTimeout(function() {
    $('.alert.' + type).css("visibility", "hidden")
  },15000);
}

const alertShow = function (type, message) {
  $('.alert.' + type).css("visibility", "visible");
  $('.alert.' + type + ' .content .body span').text(message);
}

$( document ).ready(function() {
  $('.alert').each(function () {
    $(this).find('.close').on('click', function () {
      $(this).closest('.alert').css('visibility','hidden');
    });
  });
});