<?php
include "db.php";

$query = "SELECT *  FROM enqury_form ";
if ($result = $conn->query($query)) {

    while($row = $result->fetch_assoc())
    {
       echo "<pre>";
        print_r ($row);
        echo "</pre>";
    }

} 
?>