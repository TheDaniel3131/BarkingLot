<?php 
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'sdp_petadoptionsys');


$query = "SELECT id, username, email, password, phonenumber, homeaddress, twitter, instagram, facebook FROM users_information WHERE username = '".$_SESSION['username']."'	";


 // OR id = '".$_SESSION['id']."'

// $query = "SELECT id, username, email, password, phonenumber, homeaddress, twitter, instagram, facebook FROM users_information WHERE username = '.$_SESSION['username'].' OR id = '$_SESSION['id']'";

$query_run = mysqli_query($connection, $query);
// $fetchquery = mysqli_fetch_array($query_run);
// $lecture = $fetchquery["username"] ?? null;

    // $_SESSION['id'] = $row['id'];

?>



                                     

