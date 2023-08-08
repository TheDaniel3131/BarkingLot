<?php 
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'sdp_petadoptionsys');


$query = "SELECT id, username, email, phonenumber, homeaddress, twitter, instagram, facebook FROM users_information WHERE username = '".$_SESSION['username']."'";
$query_run = mysqli_query($connection, $query);
// $fetchquery = mysqli_fetch_array($query_run);
// $lecture = $fetchquery["username"] ?? null;

?>

<!-- $strSQL = "SELECT username, email, phonenumber, homeadrress FROM users_information WHERE username = '".$_SESSION['username']."'"; -->