<?php
    
    // Set form values to blank
    $receipt = $car_model = $serial_number = $price = $customer_name = $agent_name = $contact_number = $customer_address = '';
    if(isset($_POST['btnConfirmInvoice'])){

        // Form value does not refresh
        $receipt = $_POST['receiptNumber'];
        $car_model = $_POST['carModel'];
        $serial_number = $_POST['serialNumber'];
        $price = $_POST['unitPrice'];
        $agent_name = $_POST['agentName'];
        $customer_name = $_POST['customerName'];
        $contact_number = $_POST['contactNumber'];
        $customer_address = $_POST['customerAddress'];


        // Form submit redirect
        $path = "/lougeh-cardealership";
        header("location: $path/sales.php" );

    }

?>

<!DOCTYPE html>
<html lang="en">

<!--Call Header Template-->
<?php include('templates/header.php'); ?>

<!--Main Section of Sales Page-->
<main>
    <section class="container grey-text">
        <div class="center">
            <div class="left"><a href="sales.php" class="material-icons">arrow_back</a></div>
            <h3>Sales Transaction</h3>
        </div>
        <form action="" method="POST" class="z-depth-2" id="invoiceForm">
            <h4 class="custom-text">Invoice Details</h4>
            <div class="input-field">
                <label for="receiptNumber">Receipt Number</label>
                <input type="text" id="receiptNumber" name="receiptNumber" class="validate"
                    value="<?php echo htmlspecialchars($receipt) ?>" required>
            </div>
            <div class="input-field">
                <label for="carModel">Car Model</label>
                <input type="text" id="carModel" name="carModel" class="validate"
                    value="<?php echo htmlspecialchars($car_model) ?>" required>
            </div>
            <div class="input-field">
                <label for="serialNumber">Serial Number</label>
                <input type="text" id="serialNumber" name="serialNumber" class="validate"
                    value="<?php echo htmlspecialchars($serial_number) ?>" required>
            </div>
            <div class="input-field">
                <label for="unitPrice">Unit Price</label>
                <input type="text" id="unitPrice" name="unitPrice" class="validate"
                    value="<?php echo htmlspecialchars($price) ?>" required>
            </div>
            <div class="input-field">
                <label for="agentName">Agent Name</label>
                <input type="text" id="agentName" name="agentName" class="validate"
                    value="<?php echo htmlspecialchars($agent_name) ?>" required>
            </div>

            <h4 class="custom-text">Customer Details</h4>
            <div class="input-field">
                <label for="customerName">Customer Name</label>
                <input type="text" id="customerName" name="customerName" class="validate"
                    value="<?php echo htmlspecialchars($customer_name) ?>" required>
            </div>
            <div class="input-field">
                <label for="contactNumber">Contact Number</label>
                <input type="text" id="contactNumber" name="contactNumber" class="validate"
                    value="<?php echo htmlspecialchars($contact_number) ?>" required>
            </div>
            <div class="input-field">
                <label for="customerAddress">Address</label>
                <input type="text" id="customerAddress" name="customerAddress" class="validate"
                    value="<?php echo htmlspecialchars($customer_address) ?>" required>
            </div>

            <div class="center">
                <input type="submit" id="btnConfirmInvoice" name="btnConfirmInvoice" value="Confirm Invoice"
                    class="btn-large z-depth-2 hoverable">
            </div>
        </form>
    </section>
</main>
<script src="js/invoice.js"></script>

<!--Call Footer Template-->
<?php include('templates/footer.php'); ?>

</html>