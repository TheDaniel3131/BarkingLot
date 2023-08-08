<?php
session_start();
$con = mysqli_connect("localhost","root","","sdp_petadoptionsys");

if(isset($_POST['update_user_details']))
{
    $Name = $_POST['Username'];
    $Response = $_POST['Response'];

    $query = "UPDATE feedback SET Response='$Response' WHERE Username='$Name' ";

    if ($con->query($query) == TRUE)
    {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: response.php"); //data updated 
    }
    
    else
    { 
        $_SESSION['status'] = "Your Data Is Not Updated Because There Is No Such User ID!!";
        header("Location: response.php"); //data not updated
    }
    }

?>