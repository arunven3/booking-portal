const calender = {
  init: function (selector ) {
    let pastDates = true, availableDates = false, availableWeekDays = false

    let calendar = new VanillaCalendar({
      selector: selector,
      onSelect: (data) => {
        var date = new Date(data.date);
        console.log(date);
      }
    })

    calendar.set({
      pastDates: false,
      datesFilter: false
    });
  },

  range : function (rangeLastMonth, rangeLastYear) {
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var date = new Date();
    var currentDate =  months[date.getMonth()]  + ' ' + date.getFullYear();
    var currentMonthYear =   currentDate.split(' ');

    var rangeMonth = (date.getMonth() + parseInt(rangeLastMonth)) + 1;
    var rangeDate = date.getFullYear() + (parseInt(rangeLastYear) + parseInt(rangeMonth / 12));

    var lastMonthYear = months[rangeMonth % 12] + ' ' + rangeDate;
    console.log(lastMonthYear);

    $('.calender-section').on('click','button[data-calendar-toggle]',function() {
      currentDate === $('.vanilla-calendar-header__label').text() ? $('button[data-calendar-toggle="previous"]').prop('disabled', true): $('button[data-calendar-toggle="previous"]').prop('disabled', false);
      lastMonthYear === $('.vanilla-calendar-header__label').text() ? $('button[data-calendar-toggle="next"]').prop('disabled', true) : $('button[data-calendar-toggle="next"]').prop('disabled', false);
    });
  }
}

$( document ).ready(function() {
  if ($('body').data('page') === 'booking-availablity') {
    calender.init('#myCalendar');
    calender.range(0, 1);
    $('button[data-calendar-toggle="previous"]').prop('disabled', true);
  }
});