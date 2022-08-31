<?php

    require_once "connect.php";

    $db = $conn;

    // Fetch data from tickets table
    function FetchData(){
        global $db;
        $sql = "SELECT * FROM `lgcd-tickets` ORDER BY transaction_id DESC";
        
        $result = mysqli_query($db, $sql);
        
        if(mysqli_num_rows($result) > 0){
            $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $row;  
        } else {
            return $row=[];
        }
    }

    $fetchData = FetchData();
    ShowData($fetchData);

    // Show data to HTML table
    function ShowData($fetchData){
        if(count($fetchData)>0){
            foreach($fetchData as $data){ 
                echo "<tr>
                        <td>".$data['receipt_number']."</td>
                        <td>".$data['service_date']."</td>
                        <td>".$data['serial_number']."</td>
                        <td>".$data['customer_name']."</td>
                        <td>".$data['mechanic_name']."</td>
                        <td>".$data['parts_needed']."</td>
                    </tr>";
            }
        } else {
            echo "<tr>
                    <td colspan='6'>No Data Found</td>
                </tr>"; 
        }
    }
?>