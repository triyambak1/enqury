<?php
include "db.php";

$query = "SELECT name,email,mobile  FROM enqury_form ";

if ($result = $conn->query($query)) {

        while($row = $result->fetch_assoc())
        {
            echo $row['name'];
            echo $row['email'];
            echo $row['mobile'];

        }
    } 
?>