<?php
 

session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="tabicon/icon.webp">	
	<title>Make Responses | Barking Lot</title>
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

	<link rel="stylesheet" href="profilecss.css">
	<link rel="stylesheet" href="footer.css">
	



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
								<h4 style="text-align:center; font-family: Poppins; font-size: 30px;">Feedback Response Based on Username</h4>
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