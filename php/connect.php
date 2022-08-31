<?php

    $conn = mysqli_connect('localhost', 'root', '', 'lg-cardealership');

    if(!$conn){
        die('Connection error: ' . mysqli_connect_error());
    }
    
?>