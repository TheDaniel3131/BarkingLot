<?php
 
// Starting the session, to use and
// store data in session variable
session_start();
  
// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: registerlogin/login.php');
}

  
// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after logging out
if (isset($_GET['logout'])) {
	    session_destroy();
	    unset($_SESSION['username']);
    header("location: index.html");
}


if($_SESSION['username'] != 'staff'){
    header("location: goback.php");
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="tabicon/icon.webp">	
	<title>Home | Barking Lot</title>
	<!-- Local CSS -->
	<link rel="stylesheet" href="barkinglotcss.css">
	<!-- Bootstrap | CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<!-- Font Awesome V4.0 | CSS -->

	<!-- these two below no longer works-->
<!-- 	<link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
	<!--Font Awesome V5.0 | JS-->
	<script src="https://kit.fontawesome.com/5a3777daa8.js" crossorigin="anonymous"></script>

	<!--W3SCHOOLS button | CSS-->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<!-- Footer1 CSS-->
<!-- 	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet"> -->
	
<!-- 	<link rel="stylesheet" href="footer1/css/ionicons.min.css">
	<link rel="stylesheet" href="footer1/css/style.css"> -->

	<!-- External CSS-->

	<link rel="stylesheet" href="footer.css">
	<link rel="stylesheet" href="main.css">

	<!-- Local Internal CSS -->
	<style>
		/*preloader*/

		#preloader{
			background: #000000 url('load/loader.gif') no-repeat center center;
			background-size: 10%;

			height: 100%;
			width: 100%;

			top: 0;
			left: 0;

			position: fixed;
	       	display: -webkit-box;
	      	display: -ms-flexbox;
	     	display: flex;

/*
	      -webkit-box-pack: center;
	          -ms-flex-pack: center;
	              justify-content: center;
	      -webkit-box-align: center;
	          -ms-flex-align: center;
	              align-items: center;*/

			z-index: 999999;
			overflow: hidden;
			overflow-y: hidden /* Hide vertical scrollbar */
		}
	</style>
</head>
<body>
	<!-- Preloader -->
	<div id="preloader"></div>
	<!-- Blurred Background -->
	<div class="background-1"></div>
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
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tools</a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="eventmanagementsystem/admin/index.php?page=home" target="_blank">Events & Promotions</a>
			          <a class="dropdown-item" href="stafffeedback.php" target="_blank">Feedback Management</a>
			          <a class="dropdown-item" href="lmsPHP/login.php">Check Pet Adopt Application Status</a>
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
	</header>
		
	<!-- Section 1: Small Intro Of Barking Lot -->
	<!-- 	<button class="btn"><ion-icon name="home-outline"></ion-icon></button> -->
	<section>
		<div class="wtbl">
			<h2>Welcome To</h2>
			<h1>Barking Lot!</h1>
			<div class="btn-category1">
				<br>
				<a href="http://localhost/sdp_dev/adopt.php" class="btn2">Find Pets</a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="http://localhost/sdp_dev/aboutus_login/slm.html" class="btn2-1">Learn More</a>
			</div>
		</div>
	</section>
	<br><br><br><br>

	<!--preloader time duration adjustment-->
	<iframe width="0" height="0" src="https://www.youtube.com/embed/H8vh29F1Ozs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<iframe width="0" height="0" src="https://www.youtube.com/embed/H8vh29F1Ozs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

	<section class="bg-light p-1"><br></section>
	<!-- Section 2: WHAT ARE WE-->
	<section class="bg-light text-dark p-5 text-center text-sm-start p-lg-5 pt-lg-6 bg1">
		<section class="about" id="about">
			    <div class="image">
			        <img src="img/pet3.jpg" alt="What Are We?">
			    </div>
			    <div class="content">
			        <h3><u>WHO ARE <span><b>WE?</b></span></u></h3>
			        <p>We aims to facilitate the adoption of stray animals by improving the welfare of stray animals. Hence, we designed as a user-friendly online platform that assists users by evaluating the system in order to learn about various animals in need of adoption and reduce their pain.
			        <br><br>
			        So what are you waiting for? Sign up now and become a member to save these lives!</p>
			        <a href="registerlogin/registration.php" class="btn_whatarewe">Sign Up</a>
			    </div>
		</section>
	</section>
	<section class="bg-light p-1"><br></section>

	<!-- Section 3: VIDEO RUNNING BACKGROUND WITH TEXTS-->
	<section class="bg-dark">
	  <section class="showcase">
<!-- 		    <div class="vrbtext">

		    </div> -->
		    <video src="load/petrunning.mp4" muted loop autoplay></video>
		    <div class="overlay vrbtext">
		      <u style="color: yellow"><h2>OUR SERVICES</h2></u>
<!-- 		      <h3></h3> -->
			<br>
		    <div class="overlayText">
		        <p id="topText">We Also Provide Other Services Such As Marketplace, Pet Sponsors and plenty more! Click the below to find out more about it.</p>
		    </div>
<!-- 		      <p>We Also Provide Other Services Such As Marketplace, Pet Sponsors and plenty more! Click the below to find out more about it.</p> -->
			<br>
		      <center>
		      <div class="movew3button">
		      	<a href="http://localhost/sdp_dev/marketplace/marketplace.php" class="w3-button w3-black w3-round-xlarge" id="w3button1">View More</a>
		      </div>
		  	</center>
		    </div>

  		</section>
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
                            <li><a href="registerlogin/login.php">Login</a></li>
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



	<!--preloader javascript-->
	<script>
		//preloader javascript
		var loader = document.getElementById("preloader");

		window.addEventListener("load",function(){
			loader.style.display="none";

		})
	</script>	

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
  </body>
</body>
</html>