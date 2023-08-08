<?php

$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$dogName = $_POST['dogName'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$town = $_POST['town'];
$postcode = $_POST['postcode'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$age = $_POST['age'];
$reason = $_POST['reason'];




//Database connection
$con = new mysqli('localhost','root','','sdp_petadoptionsys', '3306');
if($con->connect_error){
	echo "$conn->connect_error";
	die('Connection Failed : '.$con->connect_error);
}

else{
	$stmt = $con->prepare("insert into petjackin(day, month, year, dogName, firstName, lastName, gender, address, town, postcode, phone, email, age, reason) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("ssssssssssssss",$day, $month, $year, $dogName, $firstName, $lastName, $gender, $address, $town, $postcode, $phone, $email, $age, $reason);
	$stmt->execute();
    echo "<script>
    window.location.href='formsuccess.html';
    alert('Form Sucessfully!!');
    </script>";
	// header('location: formsuccess.html');
	$stmt->close();
	$con->close();
}
?>