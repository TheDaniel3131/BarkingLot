<?php 
session_start();

if (isset($_SESSION['username'])) {

    include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['phonenumber'])
    && isset($_POST['homeaddress']) && isset($_POST['twitter']) && isset($_POST['instagram'])
	&& isset($_POST['facebook'])) {

	function validate($data){
     $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$Name = validate($_POST['username']);
	$Email = validate($_POST['email']);
	$Phone = validate($_POST['phonenumber']);
	$Address = validate($_POST['homeaddress']);
	$Twitter = validate($_POST['twitter']);
	$Instagram = validate($_POST['instagram']);
	$Facebook = validate($_POST['facebook']);
    
    if(empty($Name)){
      header("Location: editprofile.php?error=Username is required");
	  exit();
    }else if(empty($Email)){
      header("Location: editprofile.php?error=Email is required");
	  exit();
    }else if(empty($Phone)){
      header("Location: editprofile.php?error=Phonenumber is required");
	  exit();
	}else if(empty($Address)){
	  header("Location: editprofile.php?error=Address is required");
	  exit();
    }else {

        $id = $_SESSION['id'];

        $sql = "SELECT id
                FROM users_information WHERE 
                id='$id'";
        $result = mysqli_query($connection, $sql);

        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE users_information
        	          SET username='$Name',  email='$Email', phonenumber='$Phone', homeaddress='$Address', twitter='$Twitter', instagram='$Instagram', facebook='$Facebook' 
        	          WHERE id='$id'";

          // unset($_SESSION['username']);
          // $_SESSION['username'] == 'username';
        	mysqli_query($connection, $sql_2);
          sleep(2);
          echo "<script>location.reload()</script>";
          session_destroy();
          session_unset();
        	// header("Location: editprofile.php?success=Details Changed Successfully! Auto-Logout In Few Seconds..");  
          header("Location: success_changedetail.html");  

          exit();

          // function one() {
          //      return "location: editprofile.php?success=Details Changed Successfully! Auto-Logout In Few Seconds..";
          //      $
          //      exit();
          // }
          // function two() {
          //      return "location: index.html";
          //      exit();
          // }

          // header(one(), two());

          // sleep(3);
          // header("Location: editprofile.php?success=Details Changed Successfully! Auto-Logout In Few Seconds..");  
          // sleep(3);
          // header("Location: index.html", false);
        

        }else {
        	header("location: editprofile.php?error=Please Try Again");
	        exit();
        }

    }

    
}else{
	header("Location: change-password.php");
	exit();
}

}else{
     header("Location: profile.php");
     exit();
}