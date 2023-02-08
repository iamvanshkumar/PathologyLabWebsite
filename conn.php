<?php
$sname = "localhost";
$unmae = "root";
$password = "";
$db_name = "lab";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  
?>
