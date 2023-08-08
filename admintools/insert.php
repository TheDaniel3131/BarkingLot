<?php
session_start();

$connection = mysqli_connect("localhost","root","", "sdp_petadoptionsys");
// $db = mysqli_select_db($connection, 'sdp_petadoptionsys');

if(isset($_POST['insert']))
{
    // $id = $_POST['user_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // $query = "INSERT INTO users_information(`id`,`username`,`email`,`password`) VALUES ('$id',$username','$email','$password')";
    // $query_run = mysqli_query($connection, $query);


    $query = "INSERT INTO users_information(username, email, password) VALUES ('$username', '$email', '$password')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Saved Successfully";
        // echo '<script> alert("Your Data is Saved"); </script>';
        header("Location: insertnewuser.php"); 
    }
    else
    {
        $_SESSION['status'] = "Data Not Saved Successfully";
        // echo '<script> alert("Your Data is Saved"); </script>';
        header("Location: insertnewuser.php"); 
    }
}

?>