<?php

    require "connect.php";
 
    $db = $conn;

    $receipt_number = mysqli_real_escape_string($conn, $_POST['receiptNumber']);
    $car_model = mysqli_real_escape_string($conn, $_POST['carModel']);
    $serial_number = mysqli_real_escape_string($conn, $_POST['serialNumber']);
    $unit_price = mysqli_real_escape_string($conn, $_POST['unitPrice']);
    $agent_name = mysqli_real_escape_string($conn, $_POST['agentName']);
    $customer_name = mysqli_real_escape_string($conn, $_POST['customerName']);
    $contact_number = mysqli_real_escape_string($conn, $_POST['contactNumber']);
    $customer_address = mysqli_real_escape_string($conn, $_POST['customerAddress']);
 
    if (!empty($receipt_number) && !empty($car_model) && !empty($serial_number) && !empty($agent_name) && !empty($unit_price) && !empty($customer_name) && !empty($contact_number) && !empty($customer_address)) {
        InsertSalesData($receipt_number, $car_model, $serial_number, $unit_price, $agent_name, $customer_name);
        InsertCustomerData($customer_name, $contact_number, $customer_address);
    } else {
        echo 'All fields are required';
    }

    // Insert to sales table
    function InsertSalesData($rnumber, $cmodel, $snumber, $uprice, $cname,  $aname){

        global $db;

        $sql = "INSERT INTO `lgcd-invoice`(receipt_number, car_model, serial_number, unit_price, customer_name, agent_name) VALUES ('$rnumber', '$cmodel', '$snumber', '$uprice', '$cname', '$aname')";

        if(mysqli_query($db, $sql)) {
            echo 'Succesful';
        } else {
            echo "Error: " . $sql . "" . mysqli_error($db);
        }
    }

    // Insert to customers table
    function InsertCustomerData($cname, $cnumber, $caddress){

        global $db;

        $sql = "INSERT INTO `lgcd-customers`(customer_name, contact_number, customer_address) VALUES ('$cname', '$cnumber', '$caddress')";

        if(mysqli_query($db, $sql)) {
            echo 'Succesful';
        } else {
            echo "Error: " . $sql . "" . mysqli_error($db);
        }
    }

    mysqli_close($conn);
?>