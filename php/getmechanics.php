<?php

    require_once "connect.php";

    $db = $conn;

    // Fetch data from mechanics table
    function FetchData(){
        global $db;
        $sql = "SELECT * FROM `lgcd-mechanics` ORDER BY mechanic_id DESC";
        
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
                        <td>".$data['mechanic_name']."</td>
                        <td>".$data['employee_number']."</td>
                    </tr>";
            }
        } else {
            echo "<tr>
                    <td colspan='2'>No Data Found</td>
                </tr>"; 
        }
    }
?>