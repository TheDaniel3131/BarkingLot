<?php 
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'sdp_petadoptionsys');
    
$query = "SELECT id, username, email, password, phonenumber, homeaddress, twitter, instagram, facebook FROM users_information WHERE id = '".$_SESSION['id']."' ";

// $query = "SELECT id, username, email, phonenumber, homeaddress, password FROM users_information WHERE username = '".$_SESSION['username']."' AND ";

$query_run = mysqli_query($connection, $query);

if (!$query) {
	echo "Connection failed!";
}
?>