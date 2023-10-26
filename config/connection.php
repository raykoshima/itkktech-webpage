<?php
$database_name = "localhost";
$database_username = "root";
$database_password = "123456789";
$database_table = "it_kkt2";


$con= mysqli_connect($database_name,$database_username,$database_password,$database_table) or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
?>
