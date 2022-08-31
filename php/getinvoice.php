<?php

    require_once "connect.php";

    $db = $conn;

    // Fetch data from invoice table
    function FetchData(){
        global $db;
        $sql = "SELECT * FROM `lgcd-invoice` ORDER BY transaction_id DESC";
        
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
                        <td>".$data['car_model']."</td>
                        <td>".$data['serial_number']."</td>
                        <td>".$data['unit_price']."</td>
                        <td>".$data['customer_name']."</td>
                        <td>".$data['agent_name']."</td>
                    </tr>";
            }
        } else {
            echo "<tr>
                    <td colspan='6'>No Data Found</td>
                </tr>"; 
        }
    }
?>