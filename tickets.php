<?php
    
    // Set form values to blank
    $receipt = $date = $serial_number = $customer_name = $mechanic_name = $parts_needed = $employee_number = '';
    if(isset($_POST['btnConfirmTicket'])){

        // Form value does not refresh
        $receipt = $_POST['receiptNumber'];
        $date = $_POST['serviceDate'];
        $serial_number = $_POST['serialNumber'];
        $customer_name = $_POST['customerName'];
        $mechanic_name = $_POST['mechanicName'];
        $parts_needed = $_POST['partsNeeded'];
        $employee_number = $_POST['employeeNumber'];

        // Form submit redirect
        $path = "/lougeh-cardealership";
        header("location: $path/services.php" );
    }

?>

<!DOCTYPE html>
<html lang="en">

<!--Call Header Template-->
<?php include('templates/header.php'); ?>

<!--Main Section of Tickets Page-->
<main>
    <section class="container grey-text">
        <div class="center">
            <div class="left"><a href="services.php" class="material-icons">arrow_back</a></div>
            <h3>Delivery Transaction</h3>
        </div>
        <form action="" method="POST" class="z-depth-2" id="ticketForm">
            <h4 class="custom-text">Ticket Details</h4>
            <div class="input-field">
                <label for="receiptNumber">Receipt Number</label>
                <input type="text" id="receiptNumber" name="receiptNumber" class="validate"
                    value="<?php echo htmlspecialchars($receipt) ?>" required>
            </div>
            <div class="input-field">
                <label for="serviceDate">Service Date</label>
                <input type="text" id="serviceDate" name="serviceDate" class="validate"
                    value="<?php echo htmlspecialchars($date) ?>" required>
            </div>
            <div class="input-field">
                <label for="serialNumber">Serial Number</label>
                <input type="text" id="serialNumber" name="serialNumber" class="validate"
                    value="<?php echo htmlspecialchars($serial_number) ?>" required>
            </div>
            <div class="input-field">
                <label for="customerName">Customer Name</label>
                <textarea id="customerName" name="customerName" class="materialize-textarea"
                    value="<?php echo htmlspecialchars($customer_name) ?>" required></textarea>
            </div>
            <div class="input-field">
                <label for="partsNeeded">Parts Needed</label>
                <textarea id="partsNeeded" name="partsNeeded" class="materialize-textarea"
                    value="<?php echo htmlspecialchars($parts_needed) ?>" required></textarea>
            </div>

            <h4 class="custom-text">Mechanic Details</h4>
            <div class="input-field">
                <label for="mechanicName">Mechanic Name</label>
                <input type="text" id="mechanicName" name="mechanicName" class="validate"
                    value="<?php echo htmlspecialchars($mechanic_name) ?>" required>
            </div>
            <div class="input-field">
                <label for="employeeNumber">Employee Number</label>
                <input type="text" id="employeeNumber" name="employeeNumber" class="validate"
                    value="<?php echo htmlspecialchars($employee_number) ?>" required>
            </div>

            <div class="center">
                <input type="submit" name="btnConfirmTicket" value="Confirm Ticket"
                    class="btn-large z-depth-2 hoverable">
            </div>
        </form>
    </section>
</main>
<script src="js/tickets.js"></script>

<!--Call Footer Template-->
<?php include('templates/footer.php'); ?>

</html>