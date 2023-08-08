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
$allergy = $_POST['allergy'];
$petshous = $_POST['petshous'];
$dropdown = $_POST['dropdown'];
$comments = $_POST['comments'];



//Database connection
$con = new mysqli('localhost','root','','sdp_petadoptionsys', '3306');
if($con->connect_error){
	echo "$conn->connect_error";
	die('Connection Failed : '.$con->connect_error);
}

else{
	$stmt = $con->prepare("insert into petadoption(day, month, year, dogName, firstName, lastName, gender, address, town, postcode, phone, email, age, reason, allergy, petshous, dropdown, comments) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("sssssssssssssssiss",$day, $month, $year, $dogName, $firstName, $lastName, $gender, $address, $town, $postcode, $phone, $email, $age, $reason, $allergy, $petshous, $dropdown, $comments);
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