<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'sdp_petadoptionsys');

if(isset($_POST['delete']))
{
    $id = $_POST['id'];

    $query = "DELETE FROM users_information WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("location:admindatabase.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>
