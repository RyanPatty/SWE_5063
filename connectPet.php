<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','swe_database');

// get the post records
$petName = $_POST['petName'];
$petType = $_POST['petType'];
$breed = $_POST['breed'];
$weight = $_POST['weight'];
$age = $_POST['age'];

// database insert SQL code
$sql = "INSERT INTO `pet` (`Id`, `petName`, `petType`, `breed`, 'weight', 'age') VALUES ('', '$petName', '$petType', '$breed', '$weight', '$age')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
    echo "error";
?>