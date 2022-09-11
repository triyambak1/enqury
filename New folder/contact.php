<?php
include 'db.php';
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

$query = "INSERT INTO contact_us (name,email,subject,message) VALUE ('$name','$email','$subject','$message')";

if(mysqli_query($conn,$query))
{
    echo "Record save";
    header('Location: index.php');
}
else{
    echo "Error";
}
?>