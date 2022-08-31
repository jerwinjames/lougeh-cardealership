<!DOCTYPE html>
<html lang="en">

<!--Call Header Template-->
<?php include('templates/header.php'); ?>

<!--Main Section of Services Page-->
<main class="center">
    <h1 class="grey-text">Service History</h1>
    <section class="container">
        <div class="left">
            <a href="index.php" class="material-icons">arrow_back</a>
        </div>
        <div class="container">
            <a href="tickets.php" class="waves-effect waves-light btn-large hoverable">Create Ticket</a>
        </div>
    </section>
    <section>
        <div class="container">
            <h4 class="left-align custom-text">Tickets</h4>
            <div class="home">
                <table class="highlight grey-text">
                    <thead>
                        <th>Receipt Number</th>
                        <th>Service Date</th>
                        <th>Serial Number</th>
                        <th>Customer Name</th>
                        <th>Mechanic Name</th>
                        <th>Parts Needed</th>
                    </thead>
                    <tbody id="tickets">

                    </tbody>
                </table>
            </div>

            <h4 class="left-align custom-text">Mechanics</h4>
            <div class="home">
                <table class="highlight grey-text">
                    <thead>
                        <th>Mechanic Name</th>
                        <th>Employee Number</th>
                    </thead>
                    <tbody id="mechanics">

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>

<!--Call Footer Template-->
<?php include('templates/footer.php'); ?>

</html>