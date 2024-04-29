$(document).ready(function () {




  // Initialize Datepicker
  $(".datepicker").datepicker({
    // Specify date format
    dateFormat: "yy-mm-dd",

    // Define enabled and disabled dates
    beforeShowDay: function (date) {
      // Define enabled dates (e.g., all Fridays)
      if (date.getDay() === 5) {
        // 5 represents Friday (0=Sunday, 1=Monday, ..., 6=Saturday)
        return [true];
      }
      
      // Define disabled dates (e.g., specific dates)
      var disabledDates = []; // Array of disabled dates ["2024-04-29", "2024-05-01", "2024-05-10"]
      var stringDate = $.datepicker.formatDate("yy-mm-dd", date);
      return [disabledDates.indexOf(stringDate) === -1];
    },
  });

})