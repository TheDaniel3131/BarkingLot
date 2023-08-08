<?php

	$fullName = $_POST['fullName'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$comments = $_POST['comments'];


//Database connection
	$con = new mysqli('localhost','root','','sdp_petadoptionsys', '3306');
	if($con->connect_error){
		die('Connection Failed : '.$con->connect_error);
	}
	else{
		$stmt = $con->prepare("insert into appointment_bookform(fullName, phone, email, date, time, comments)values(?,?,?,?,?,?)");
		$stmt->bind_param("ssssss",$fullName, $phone, $email, $date, $time, $comments);
		$stmt->execute();
		echo "registration Successfully...";
		header('location: formsuccess.html');
		$stmt->close();
		$con->close();
	}
?>