<?php
include 'db.php';
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$mobile = $_REQUEST['mobile'];
$collage = $_REQUEST['collage'];
$course = $_REQUEST['course'];
$perc = $_REQUEST['perc'];
$perc_inter = $_REQUEST['perc_inter'];
$perc_graduation = $_REQUEST['perc_graduation'];
$father_name = $_REQUEST['father_name'];
$addres = $_REQUEST['addres'];
$select_cource = $_REQUEST['select_cource'];
$descriptions = $_REQUEST['descriptions'];

$sql = "INSERT INTO enqury_form (name,email,mobile,collage,course,perc,perc_inter,perc_graduation,father_name,addres,select_cource,descriptions,created) 
VALUE ('$name','$email','$mobile','$collage','$course','$perc','$perc_inter','$perc_graduation','$father_name','$addres','$select_cource','$descriptions',NOW())";

if(mysqli_query($conn,$sql))
{
    echo "Record save";
}
else{
    echo "Error";
}
?>