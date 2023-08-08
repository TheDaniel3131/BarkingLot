<?php
 	$server = "localhost";
	$user = "root";
	$pass = "";
	$database = "sdp_petadoptionsys";

	$con = mysqli_connect($server, $user, $pass, $database);

	if (!$con) {
		die ("<script>alert('Connection Failed')</script>");
	}


?>





<!-- 	// Starting the session, necessary
// for using session variables
session_start();
  
// Declaring and hoisting the variables
$username = "";
$email    = "";
$errors = array();
$_SESSION['success'] = "";
  
// DBMS connection code -> hostname,
// username, password, database name
$db = mysqli_connect('localhost', 'root', '', 'pet_adoption_system');
  
// Registration code
if (isset($_POST['reg_user'])) {
    // $username = $_POST['username'];
    // $email = $_POST['email'];
    // $phonenumber = $_POST['phonenumber'];
    // $country = $_POST['country'];
    // $homeaddress = $_POST['homeaddress'];
    // $password = md5($_POST['password']);
    // $cpassword = md5($_POST['cpassword']);
    // $dob = $_POST['dob'];
    // Receiving the values entered and storing
    // in the variables
    // Data sanitization is done to prevent
    // SQL injections
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phonenumber = mysqli_real_escape_string($db, $_POST['phonenumber']);
    $country = mysqli_real_escape_string($db, $_POST['country']);
    $homeaddress = mysqli_real_escape_string($db, $_POST['homeaddress']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $cpassword = mysqli_real_escape_string($db, $_POST['cpassword']);
    $dob = mysqli_real_escape_string($db, $_POST['dob']);
  
    // Ensuring that the user has not left any input field blank
    // error messages will be displayed for every blank input
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($phonenumber)) { array_push($errors, "Phone Number is required"); }
    if (empty($country)) { array_push($errors, "Select a country is required"); }
    if (empty($homeaddress)) { array_push($errors, "Home address is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }
    if (empty($dob)) { array_push($errors, "Date of Birth is required"); }
  
    if ($password != $cpassword) {
        array_push($errors, "The two passwords do not match");
        // Checking if the passwords match
    }
  
    // If the form is error free, then register the user
    if (count($errors) == 0) {
         
        // Password encryption to increase data security
        $password_s = md5($password);
         
        // Inserting data into table
        $query = "INSERT INTO users (username, email, phonenumber, country, homeaddress, password_s, dob)
                  VALUES('$username', '$email', '$phonenumber', '$country', '$homeaddress', '$password_s', '$dob')";
         
        mysqli_query($db, $query);
  
        // Storing username of the logged in user,
        // in the session variable
        $_SESSION['username'] = $username;
         
        // Welcome message
        $_SESSION['success'] = "You have logged in";
         
        // Page on which the user will be
        // redirected after logging in
        header('location: index.html');
    }
} -->