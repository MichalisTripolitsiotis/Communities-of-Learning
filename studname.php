<?php
include_once('connect.php');


 $searchTerm = $_GET['term'];
 
 
                
                // Get matched data from skills table
                $query = $con->query("SELECT * FROM student WHERE username LIKE '%".$searchTerm."%' ORDER BY username ASC");
                
                while ($row = $query->fetch_assoc()) {
        $data[] = $row['username'];
    }
    
    //return json data
    echo json_encode($data);     
?>