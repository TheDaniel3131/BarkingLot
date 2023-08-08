<?php
if(isset($_POST["Username"])){
	$Name = $_POST['Username'];
	$Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
	$Subject = $_POST['Subject'];
    $Message = $_POST['Message'];
}
	//Database connection

	$con = new mysqli('localhost','root','','sdp_petadoptionsys');
	if($con->connect_error){
		die('Connection Failed : '.$con->connect_error);
	}
	else{
		$stmt = $con->prepare("insert into feedback_nonmember(Username, Email, Phone, Subject, Message) values(?,?,?,?,?)");
		$stmt->bind_param('sssss',$Name, $Email, $Phone, $Subject, $Message);
		$stmt->execute();
        header('location: success_nm.html');
		$stmt->close();
		$con->close();
	}
?>

