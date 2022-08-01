<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','swe_database');

// get the post records
$petName = $_POST['petName'];
$foodType = $_POST['foodType'];
$foodAmount = $_POST['foodAmount'];
$foodRate = $_POST['foodRate'];

// database insert SQL code
$sql = "INSERT INTO `feedSchedule` (`Id`, `petName`, `foodType`, `foodAmount`, 'foodRate') VALUES ('', '$petName', '$foodType', '$foodAmount', '$foodRate')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
    echo "error";
?>