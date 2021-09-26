$( document ).ready(function() {
  $(document).on('click','.sidebar-menu-icon', function () {
    $('.sidebar').toggleClass('open');
    $('body').toggleClass('side-bar-overlay');
  })

  $(document).on('click','.nav-list .list a', function () {
    $('.sidebar').removeClass('open');
    $('body').removeClass('side-bar-overlay');
  })
});