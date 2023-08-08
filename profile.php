<?php
session_start();



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="icon" href="tabicon/icon.webp">	
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	

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
			          <a class="dropdown-item" href="lmsPHP/login.php">Check Pet Application Status</a>
			          <a class="dropdown-item" href="services/membercontactus.php">Contact Us</a>

			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">Coming Soon!</a>
			        </div>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Others</a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="eventmanagementsystem/index.php?page=membervenue" target="_blank">Events & Promotions</a>
			          <a class="dropdown-item" href="ViewFbMember.php" target="_blank">Inbox</a>
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
				 <ul class="navbar-nav nav-item ml-auto mb-2 mb-lg-0">
				   <a href="donation/Donation%20Page.html" class="btn" style="text-align: center;">Donate Now!</button></a>
				 </ul>
			  </div>
			</div>
		</nav>
	</header>

	<section class="bk">
		<div class="wtbl">
			<h1 class="h1" color="black">User Profile</h1>
		</div>
		<div class="container">
	    <div class="main-body">

		<?php

			//Also you have to add your connection file before your query
			require('db_conn.php');

			// $id = id;
			// $_SESSION['id'] = $id;
			// Loop the recordset $rs
			// Each row will be made into an array ($row) using mysqli_fetch_array
			while($row = mysqli_fetch_array($query_run)) {?>

			<!-- // Write the value of the column FirstName (which is now in the array $row)
			echo $row['username'] . "<br />";
			echo $row['email'] . "<br />";
			echo $row['phonenumber'] . "<br />"; -->
	    
			<!-- Breadcrumb -->
	          <nav aria-label="breadcrumb" class="main-breadcrumb">
	            <ol class="breadcrumb">
	            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
	            <li class="breadcrumb-item active" aria-current="page"><font color="black">User Profile</font></li>
	            </ol>
	          </nav>
	          <!-- /Breadcrumb -->
	    
	          <div class="row gutters-sm">
	            <div class="col-md-4 mb-3">
	              <div class="card">
	                <div class="card-body">
	                  <div class="d-flex flex-column align-items-center text-center">
	                    <img src="img/profilepic.png" alt="Admin" class="rounded-circle" width="150">
	                    <div class="mt-3" style="font-size:20px;">
							<?php echo $row['username'];?>
	                    </div>
	                  </div>
	                </div>
	              </div>
				  
	              <div class="card mt-3">
	                <ul class="list-group list-group-flush">
	                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
	                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
	                    <span class="text-secondary"><?php echo $row['twitter'];?></span>
	                  </li>
	                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
	                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
	                    <span class="text-secondary"><?php echo $row['instagram'];?></span>
	                  </li>
	                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
	                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
	                    <span class="text-secondary"><?php echo $row['facebook'];?></span>
	                  </li>
	                </ul>
	              </div>
	            </div>					
				
	            <div class="col-md-8">
	              <div class="card mb-3">
	                <div class="card-body">
	                  <div class="row">
	                    <div class="col-sm-3">
	                      <h6 class="mb-0">Username</h6>
	                    </div>
	                    <div class="col-sm-9 text-secondary">
	                      <?php echo $row['username'];?>
	                    </div>
	                  </div>
	                  <hr>
	                  <div class="row">
	                    <div class="col-sm-3">
	                      <h6 class="mb-0">Email</h6>
	                    </div>
	                    <div class="col-sm-9 text-secondary">
	                      <?php echo $row['email'];?>
	                    </div>
	                  </div>
	                  <hr>
	                  <div class="row">
	                    <div class="col-sm-3">
	                      <h6 class="mb-0">Phone</h6>
	                    </div>
	                    <div class="col-sm-9 text-secondary">
							<?php echo $row['phonenumber'];?>
	                    </div>
	                  </div>
	                  <hr>
	                  <div class="row">
	                    <div class="col-sm-3">
	                      <h6 class="mb-0">Address</h6>
	                    </div>
	                    <div class="col-sm-9 text-secondary">
						<?php echo $row['homeaddress'];?>
	                    </div>
	                  </div>
	                  <hr>
	                  <div class="row">
	                    <div class="col-sm-12">
	                      <a class="btn btn-info " target="__blank" href="editprofile.php">Edit Profile</a>
						  <a class="btn btn-info " target="__blank" href="change-password.php">Change Password</a>
	                    </div>
	                  </div>
	                </div>
	              </div>
				  <br>

				<?php
				}
				?>

				  <div class="col-md-12">
	                <div class="card h-100">
	                    <div class="card-body">
							<div class="row">
								<div class="column1"><h5><i class="material-icons text-info mr-2">Pet Advertisement</i></h5></div>
							<div class="row">
								<div class="column">
									<img src="img/pa1.jpg" style="width: 207px; height: 150px; object-fit:cover;" onclick="myFunction(this);">
								</div>
								<div class="column">
									<img src="img/pa2.jpg" style="width: 207px; height: 150px; object-fit:cover;" onclick="myFunction(this);">
								</div>
								<div class="column">
									<img src="img/pa3.jpg" style="width: 207px; height: 150px; object-fit:cover;" onclick="myFunction(this);">
								</div>
								<div class="column">
									<img src="img/pa4.jpg" style="width: 207px; height: 150px; object-fit:cover;" onclick="myFunction(this);">
								</div>
							</div>
								<div class="container">
								<span id="button" onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
								<img id="expandedImg" style="max-width:100%">	
								<div id="imgtext"></div>
								</div>
	                    	</div>
	                  </div>
	                </div>
	              </div>
	            </div>
			</div>	
		</div>
		<br>
	</section>


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


	<!-- jQuery | JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!-- Bootstrap | JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- Lonicons | Icons | JS -->
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<!-- Popper | Dropdowns, Popovers, or Tooltips | JS -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mP	X5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script>	
	function myFunction(imgs) 
	{
	var expandImg = document.getElementById("expandedImg");
	var imgText = document.getElementById("imgtext");
	expandImg.src = imgs.src;
	imgText.innerHTML = imgs.alt;
	expandImg.parentElement.style.display = "block";
	}
	</script>
	
</body>
</html>