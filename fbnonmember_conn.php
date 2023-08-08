<?php 
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'sdp_petadoptionsys');

$query = "SELECT Username FROM feedback_nonmember WHERE Username = '".$_SESSION['Username']."'";
$query_run = mysqli_query($connection, $query);
?>