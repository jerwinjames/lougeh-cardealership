<!DOCTYPE html>
<html lang="en">

<!--Call Header Template-->
<?php include('templates/header.php'); ?>

<!--Main Section of Sales Page-->
<main class="center">
    <h1 class="grey-text">Sales Records</h1>
    <section class="container">
        <div class="left">
            <a href="index.php" class="material-icons">arrow_back</a>
        </div>
        <div class="container">
            <a href="invoice.php" class="waves-effect waves-light btn-large hoverable">Create Invoice</a>
        </div>
    </section>
    <section>
        <div class="container">
            <h4 class="left-align custom-text">Sales</h4>
            <div class="home">
                <table class="highlight grey-text">
                    <thead>
                        <th>Receipt Number</th>
                        <th>Car Model</th>
                        <th>Serial Number</th>
                        <th>Unit Price</th>
                        <th>Customer Name</th>
                        <th>Agent Name</th>
                    </thead>
                    <tbody id="sales">

                    </tbody>
                </table>
            </div>

            <h4 class="left-align custom-text">Customers</h4>
            <div class="home">
                <table class="highlight grey-text">
                    <thead>
                        <th>Customer Name</th>
                        <th>Contact Number</th>
                        <th>Address</th>
                    </thead>
                    <tbody id="customers">

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>

<!--Call Footer Template-->
<?php include('templates/footer.php'); ?>

</html>