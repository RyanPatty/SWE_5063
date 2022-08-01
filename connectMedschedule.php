<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','swe_database');

// get the post records
$petName = $_POST['petName'];
$medType = $_POST['medType'];
$medAmount = $_POST['medAmount'];
$medRate = $_POST['medRate'];

// database insert SQL code
$sql = "INSERT INTO `medSchedule` (`Id`, `petName`, `medType`, `medAmount`, 'medRate') VALUES ('', '$petName', '$medType', '$medAmount', '$medRate')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
    echo "error";
?>