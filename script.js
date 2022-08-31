// Materialize Auto Initialization
M.AutoInit();

$(document).ready(function () {
  $.ajax({
    type: "GET",
    url: "php/gettickets.php",
    dataType: "html",
    success: function (data) {
      $("#tickets").html(data);
    },
  });

  $.ajax({
    type: "GET",
    url: "php/getmechanics.php",
    dataType: "html",
    success: function (data) {
      $("#mechanics").html(data);
    },
  });

  $.ajax({
    type: "GET",
    url: "php/getinvoice.php",
    dataType: "html",
    success: function (data) {
      $("#sales").html(data);
    },
  });

  $.ajax({
    type: "GET",
    url: "php/getcustomers.php",
    dataType: "html",
    success: function (data) {
      $("#customers").html(data);
    },
  });
});
