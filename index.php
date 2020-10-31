<?php

    $firstName = $_GET['firstName'];
    $lastName = $_GET['lastName'];
    $schoolName = $_GET['schoolName'];
    $BOARD = $_GET['BOARD'];
    $CLASS = $_GET['CLASS'];
	$gender = $_GET['gender'];
	$email = $_GET['email'];
	$password = $_GET['password'];
	$number = $_GET['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','kandekar class');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName,schoolName,BOARD,CLASS, gender, email, password, number) values(?, ?, ?, ?, ?, ?,?,?,?)");
		$stmt->bind_param("ssssisssi", $firstName, $lastName, $schoolName,$BOARD , $CLASS, $gender, $email, $password, $number);
		$execval = $stmt->execute();
        echo $execval;
        echo "THANK YOU  FOR REGISTRATION...";
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
    }




?>
