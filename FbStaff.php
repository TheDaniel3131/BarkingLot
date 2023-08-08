<?php
session_start();
if (isset($_POST["make response"]))
{
  $Name = $_POST["Username"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Our Mission | Barking Lot</title>
	<!-- Local CSS -->
	<!-- <link rel="stylesheet" href="ourmission.css"> -->
	<!-- Bootstrap | CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- Font Awesome | CSS -->
<!-- 	<link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->

	<script src="https://kit.fontawesome.com/5a3777daa8.js" crossorigin="anonymous"></script>

	<!--External CSS-->
	<link rel="stylesheet" href="profilecss.css">	

	<!-- Local Internal CSS -->

	<style>
	</style>
</head>

<body> 
	<!-- Navigation Top Bar In Header-->
	<header class="header" id="header">
		<!-- Navigation Bar Content -->
		<nav class="navbar navbar-expand-lg header-nav fixed-top navbar-dark bg-dark">
			<div class="container-fluid">
			  <a class="navbar-brand navbar-nav ml-auto" href="#">Barking Lot</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			    <span></span>
			    <span></span>
			    <span></span>
			  </button>

			  <div class="collapse navbar-collapse justify-content-between navbar-links" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
			      <li class="nav-item active">
			        <a class="nav-link" href="./index.html">Home <span class="sr-only"></span></a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href="adopt.html">Adopt</a>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="aboutus.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="./aboutus/slm.html">Saving Lifes Matter</a>
			          <a class="dropdown-item" href="./aboutus/mission.html">Our Mission</a>
			          <a class="dropdown-item" href="./aboutus/ourteam.html">Our Team</a>
			          <a class="dropdown-item" href="./aboutus/refund.html">Refund Policy</a>
			          <a class="dropdown-item" href="./aboutus/ToS.html">Terms of Services</a>
			          <a class="dropdown-item" href="./aboutus/privacy.html">Privacy</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">Coming Soon!</a>
			        </div>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="services.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="./services/marketplace.html">Marketplace</a>
			          <a class="dropdown-item" href="./aboutus/mission.html">Our Mission</a>
			          <a class="dropdown-item" href="./aboutus/ourteam.html">Our Team</a>
			          <a class="dropdown-item" href="./aboutus/refund.html">Refund Policy</a>
			          <a class="dropdown-item" href="./aboutus/ToS.html">Terms of Services</a>
			          <a class="dropdown-item" href="./aboutus/privacy.html">Privacy</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">Coming Soon!</a>
			        </div>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="others.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Others</a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item disabled" href="#"><u>Coming Soon!</u></a>
			          <a class="dropdown-item disabled" href="./funds.html">Funds</a>
			          <a class="dropdown-item disabled" href="./funds.html">Volunteer</a>
			          <a class="dropdown-item disabled" href="./funds.html">Surrender</a>
			        </div>		
			      <li class="nav-item">
			        <a class="nav-link" href="login.html">Login</a>
			      </li>
			    </ul>
				 <ul class="navbar-nav nav-item ml-auto mb-2 mb-lg-0">
				   <button class="btn" style="text-align: center;">Donate Now!</button>
				 </ul>
			  </div>
			</div>
		</nav>
	</header>
  

	<section class="bk">
		<div class="wtbl">
			<h1 class="h1" color="black">Staff Dashboard</h1>
		</div>
            <!-- update and delete registration database-->
    <section class="p-3 mb-0 bg-dark text-white">
        <br>
        <div class="container">
            <div class="row justify-content-center">
        <div class="container">
            <div class="jumbotron">
                <div class="row">
                    <div>
                        <br><br>
                        <h4 style="color:white; text-align:center;">Customer Feedback<a href="response.php" target="_blank" class="btn btn-success" style="margin-left: 80%; font-family:Poppins;"> Make Response</a>  
                </div>
    
                <?php
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection, 'sdp_petadoptionsys');
    
                    $query = "SELECT * FROM feedback";
                    $query_run = mysqli_query($connection, $query);
                ?>
    
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered" style="background-color: white; table-layout:auto; width:100%; word-wrap:break-word;">
                            <thead class="table-dark">
                                <tr>
                                    <th> Username </th>
                                    <th> Email </th>
                                    <th> Phone</th>
                                    <th> Subject </th>
                                    <th> Message </th>
                                    <th> Make Response </th>
                                </tr>
                            </thead>
                            <tbody>
                                            
                            <?php
                            if($query_run)
                            {
                                while($row = mysqli_fetch_array($query_run))
                                {
                                    ?> &nbsp;
                                        <tr>
                                            <th> <?php echo $row['Username']; ?> </th>
                                            <th> <?php echo $row['Email']; ?> </th>
                                            <th> <?php echo $row['Phone']; ?> </th>
                                            <th> <?php echo $row['Subject']; ?> </th>
                                            <th> <?php echo $row['Message']; ?> </th> 
                                            <th> <?php echo $row['Response']; ?> </th> 
                                        </tr>
                                    <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                        <tr>    
                                            <th colspan="6"> No Record Found </th>
                                        </th>
                                    <?php
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br>
      </section>
        
    
        <!-- CONFIRMATION MESSAGE()-->
    
        <script>
            function myConfirm() {
            let confirmAction = confirm("Are you sure to execute this action?");
            // console.log(confirmAction); // OK = true, Cancel = false
    
            if (confirmAction == true) {
              confirm("Action successfully executed");
            } else if (confirmAction == false) {
              alert("Your Action is Cancelled");
              event.preventDefault();
    
            }
    
      //       if (confirm('Are you sure you want to save this thing into the database?')) {
            //   // Save it!
            //   console.log('Thing was saved to the database.');
            // } else {
            //   // Do nothing!
            //   console.log('Thing was not saved to the database.');
            // }
          }
        </script>


		<!--Section X: Footer -->
	<footer>
    	<div class="footer-dark" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Pet Adoption</a></li>
                            <li><a href="#">Funds</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="login.html">Login</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About Us</h3>
                        <ul>
                            <li><a href="#">Mission</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Saving Lives Matter</a></li>
                        </ul>
                    </div>

                    <br>
                    <div class="col-md-6 item text" id="upspacing_footeritems">
                        <h3>Barking Lot</h3>
                        <p>The reason of our company creation is to create an easy, simple, and effective pet adoption website where everyone can use our website because it is user-friendly.</p>
                    </div>
                    <br/>

                    <br><br/>
         			<br>
                    <div class="col item social" id="upspacing_footeritems">
                    	<a href="https://www.facebook.com/Barking-Lot-104626392346342"><i class="fa fa-facebook whiteico" aria-hidden="true"></i></a>
                    	<a href="https://www.reddit.com/user/BarkingLotOfficial"><i class="fa fa-reddit" id="whiteico" aria-hidden="true"></i></a>
                    	<a href="https://twitter.com/lot_barking"><i class="fa fa-twitter whiteico" aria-hidden="true"></i></a>
                    	<a href="https://www.youtube.com/channel/UCkPsTuZBu7MXRgnNWq5EEyA"><i class="fa fa-youtube whiteico" aria-hidden="true"></i></a>
                    	<a href="https://www.linkedin.com/in/barking-lot-a78213247/"><i class="fa fa-linkedin whiteico" aria-hidden="true"></i></a>
                    </div>
                   <br/>
                </div>
                <p class="copyright">Barking Lot © 2022</p>
            </div>
        </div>
    </footer>
	
</body>
</html>