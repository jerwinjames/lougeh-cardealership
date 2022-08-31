<?php

    require "connect.php";
 
    $db = $conn;

    $receipt_number = mysqli_real_escape_string($conn, $_POST['receiptNumber']);
    $service_date = mysqli_real_escape_string($conn, $_POST['serviceDate']);
    $serial_number = mysqli_real_escape_string($conn, $_POST['serialNumber']);
    $customer_name = mysqli_real_escape_string($conn, $_POST['customerName']);
    $mechanic_name = mysqli_real_escape_string($conn, $_POST['mechanicName']);
    $parts_needed = mysqli_real_escape_string($conn, $_POST['partsNeeded']);
    $employee_number = mysqli_real_escape_string($conn, $_POST['employeeNumber']);
 
    if (!empty($receipt_number) && !empty($service_date) && !empty($serial_number) && !empty($customer_name) && !empty($mechanic_name) && !empty($parts_needed) && !empty($employee_number)) {
        InsertTicketData($receipt_number, $service_date, $serial_number, $customer_name, $mechanic_name, $parts_needed);
        InsertMechanicData($mechanic_name, $employee_number);
    } else {
        echo 'All fields are required';
    }

    // Insert to tickets table
    function InsertTicketData($rnumber, $sdate, $snumber, $cname, $mname, $pneeded){

        global $db;

        $sql = "INSERT INTO `lgcd-tickets`(receipt_number, service_date, serial_number, customer_name, mechanic_name, parts_needed) VALUES ('$rnumber', '$sdate', '$snumber', '$cname', '$mname', '$pneeded')";

        if(mysqli_query($db, $sql)) {
            echo 'Succesful';
        } else {
            echo "Error: " . $sql . "" . mysqli_error($db);
        }
    }

    // Insert to mechanics table
    function InsertMechanicData($mname, $enumber){

        global $db;

        $sql = "INSERT INTO `lgcd-mechanics`(mechanic_name, employee_number) VALUES ('$mname', '$enumber')";

        if(mysqli_query($db, $sql)) {
            echo 'Succesful';
        } else {
            echo "Error: " . $sql . "" . mysqli_error($db);
        }
    }

    mysqli_close($conn);
?>