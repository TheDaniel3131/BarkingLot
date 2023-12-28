<?php 
session_start();
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
			  <a class="navbar-brand navbar-nav ml-auto" href="index.php">Barking Lot</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			    <span></span>
			    <span></span>
			    <span></span>
			  </button>

			  <div class="collapse navbar-collapse justify-content-between navbar-links" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
			      <li class="nav-item active">
			        <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href="adopt.php">Adopt</a>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="aboutus.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="./aboutus_login/slm.html">Saving Lifes Matter</a>
			          <a class="dropdown-item" href="./aboutus_login/mission.html">Our Mission</a>
			          <a class="dropdown-item" href="./aboutus_login/ourteam.html">Our Team</a>
			          <a class="dropdown-item" href="./aboutus_login/refund.html">Refund Policy</a>
			          <a class="dropdown-item" href="./aboutus_login//ToS.html">Terms of Services</a>
			          <a class="dropdown-item" href="./aboutus_login/privacy.html">Privacy</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">Coming Soon!</a>
			        </div>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="services.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="marketplace/marketplace.php">Marketplace</a>
			          <a class="dropdown-item" href="services/membercontactus.php">Contact Us</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">Coming Soon!</a>
			        </div>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Others</a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="eventmanagementsystem/index.php?page=membervenue" target="_blank">Events & Promotions</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item disabled" href="#"><u>Coming Soon!</u></a>
			          <a class="dropdown-item disabled" href="./funds.html">Funds</a>
			          <a class="dropdown-item disabled" href="./funds.html">Volunteer</a>
			          <a class="dropdown-item disabled" href="./funds.html">Surrender</a>
			        </div>			
			      <li class="nav-item">
			        <a class="nav-link" href="profile.php">Settings</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="index.html">Logout</a>
			      </li>
			    </ul>
			    <h4 style="color:aqua; font-size:160%; margin-right: 100px;">
		          Welcome,
		          <strong style="color:yellow; ;">
		              <?php echo $_SESSION['username']; ?>
		          </strong>
				</h4>
<!-- 				 <ul class="navbar-nav nav-item ml-auto mb-2 mb-lg-0">
				   <a href="donation/Donation%20Page.html" class="btn" style="text-align: center;">Donate Now!</button></a>
				 </ul> -->
			  </div>
			</div>
		</nav>
	</header>

		<!-- update and delete registration database-->
		<section class="bg-dark p-4">
			<br>
			<div class="container-2">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<?php 
							if(isset($_SESSION['status']))
							{
								?>
									<div class="alert alert-warning alert-dismissible fade show" role="alert">
										<strong>
											<?php echo $_SESSION['status']; ?>
											<button type="button" class="btn-close btn-close-pos" data-bs-dismiss="alert" aria-label="Close"></button>
										</strong>
									</div>
								<?php
								unset($_SESSION['status']);
							}
						?>
						<div class="card mt-5">
							<br><hr>
							<div class="card-header">
								<h4 style="text-align:center">Feedback Response Based on Username</h4>
							</div>
							<br><br>
							<div class="card-body">
								<form action="responsestatus.php" method="POST">
									<div class="form-group mb-3">
										<label for="">Username</label>
										<input type="text" name="Username" class="form-control" required>
									</div>
									<div class="form-group mb-3">
										<label for="">Response</label>
										<textarea id="Response" style="background-color: white;" name="Response" required="" rows="4"></textarea>
									</div>
									<div class="form-group mb-3">
										<button onclick="myConfirm()" type="submit" name="update_user_details" class="btn btn-primary" style="top:-50px;">Make Response</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br><br><br><br>


	

    <!-- CONFIRMATION MESSAGE()-->

    <script>
        function myConfirm() {
        let confirmAction = confirm("Are you sure you want to proceed?");
        // console.log(confirmAction); // OK = true, Cancel = false

        if (confirmAction == true) {
          alert("Your Data is Saved");
        } else if (confirmAction == false) {
          alert("Your Data is Not Saved")
          event.preventDefault();
        }
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