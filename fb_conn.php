<?php 
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'sdp_petadoptionsys');



$query = "SELECT username, Response FROM feedback WHERE username = '".$_SESSION['username']."'";
$query_run = mysqli_query($connection, $query);
?>