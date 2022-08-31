$(document).ready(function () {
  $(document).on("submit", "#invoiceForm", function () {
    // Add invoice
    $.ajax({
      method: "POST",
      url: "php/addinvoice.php",
      data: $(this).serialize(),
      success: function (data) {
        alert("Invoice Created");
      },
    });
  });
});
