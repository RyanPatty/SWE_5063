<?php
    //Owner
	$ownerName = $_POST['ownerName'];
	$number = $_POST['number'];
	$address = $_POST['address'];

    //Pet
	$petName = $_POST['petName'];
	$petType = $_POST['petType'];
	$breed = $_POST['breed'];
    $weight = $_POST['weight'];
    $age = $_POST['age'];


	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(ownerName, number, address) values(?, ?, ?");
		$stmt->bind_param("sss", $ownerName, $number, $address);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>