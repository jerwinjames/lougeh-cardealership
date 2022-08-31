$(document).ready(function () {
  $(document).on("submit", "#ticketForm", function () {
    // Add ticket
    $.ajax({
      method: "POST",
      url: "php/addticket.php",
      data: $(this).serialize(),
      success: function (data) {
        alert("Transaction Added");
      },
    });
  });
});
