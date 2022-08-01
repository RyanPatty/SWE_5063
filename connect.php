<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','swe_database');

// get the post records
$ownerName = $_POST['ownerName'];
$number = $_POST['number'];
$address = $_POST['address'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `ownerName`, `number`, `address`) VALUES ('', '$ownerName', '$number', '$address')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
    echo "error";
?>