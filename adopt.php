<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="tabicon/icon.webp">	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Adopt Pet(s) | Barking Lot</title>
	<!-- Local CSS -->
	<link rel="stylesheet" href="barkinglotcss.css">

	<!-- Bootstrap | CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<!-- Font Awesome | CSS -->
<!-- 	<link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->

	<!--Font Awesome V5.0 | JS-->
	<script src="https://kit.fontawesome.com/5a3777daa8.js" crossorigin="anonymous"></script>

	<!-- Unicons CSS-->
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

	<!-- External CSS -->
	<link rel="stylesheet" href="adopt/adopt.css">
	<link rel="stylesheet" href="footer.css">
<!-- 	<link rel="stylesheet" href="main.css"> -->


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
			overflow-y: hidden; /* Hide vertical scrollbar */
		}

    html::-webkit-scrollbar {
      width: 1rem;
      z-index: 1000;
    }

    html::-webkit-scrollbar-track {
      background: transparent;
      z-index: 1000;
    }

    html::-webkit-scrollbar-thumb {
      background: #262F3D;
      z-index: 1000;
     /* border-radius: 5rem;*/
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
			    <h4 style="color:aqua; font-size:160%; margin-right: 50px;">
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



<main>
	<!--Album-->
	<section class="py-5 text-center container">
	<br><br>
		<div class="row p-5">
		  <h2 class="fw-bold">Finding Pets</h2>

		  <div class="col-lg-6 col-md-8 mx-auto">
			<br>
		  	 <div class="input-box">
		  	 	<input type="text" id="Search" onkeyup="mySearch()" placeholder=" &nbsp;    Search Pet(s)..">
		  	 	<span class="search">
		  	 		<i class="uil uil-search search-icon">&nbsp;</i>
		  	 	</span>

				<i class="uil uil-times close-icon"></i>
		  	 </div>
		  	 <!-- for search <box--></box-->
		  	 <script>
		  	 	let inputBox = document.querySelector(".input-box"),
		  	 		search = document.querySelector(".search"),
		  	 		closeIcon = document.querySelector(".close-icon");

		  	 		// console.log(inputBox, saerch, closeIcon)
		  	 		search.addEventListener("click", () => inputBox.classList.add("open"));
					closeIcon.addEventListener("click", () => inputBox.classList.remove("open"));
		  	 		
		  	 </script>
<!-- 			<div class="search-wrapper">
				<label for="search">Search Pet(s)</label>
				<input type="search" id="search">
			</div> -->
			<br>
			<p class="lead text-muted">Here we will display our pets that is currently in our Barking Lot Adoption Center and waiting for you to adopt!</p>
			<p>
			  <a href="index.php" class="btn btn-primary my-2">Back to home Page</a>
			  <a href="marketplace/marketplace.php" class="btn btn-secondary my-2">Services</a>
			</p>
		  </div>
		</div>
	  </section>
</main>

	<!-- Pet(s) Gallery-->
	<div class="album py-5 bg-color">
		<div class="container">
		  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
			<!--Column-->
			<div class="col">
			  <div class="srch_card card shadow-sm">
				<img alt="img/pet.1.jpg" src="img/pet7.jpg" width="100%" height="255"  xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
				<div class="card-body">
					<p class="card-text"><h3>Pet Name: Potato</h3>
						<h5>Gender:  Female</h5>
						<h5>Breed:  Shiba-Inu</h5>
						 <h5>Weight:  10Kg</h5>
						<h5>Color:  Red</h5> 
				<div class="d-flex justify-content-between align-items-center">
					<div class="btn-group">
						<a href="adopt/adopt_pet_details_login/Potato.html"> <button style="width:100px; Height:50px;" type="button" class="btn_View1">View</button></a>
					</div>
				  </div>
				</div>
			  </div>
			</div>
			<div class="col">
				<div class="card shadow-sm">
				  <img alt="img/pet.1.jpg" src="img/Pet19.jpg" width="100%" height="255"  xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
				  <div class="card-body">
					<p class="card-text"><h3>Pet Name: Lily</h3>
						<h5>Gender: Female</h5>
						<h5>Breed: Labrador Retriever</h5>
						 <h5>Weight: 4.5Kg</h5>
						<h5>Color: White</h5>
					<div class="d-flex justify-content-between align-items-center">
					  <div class="btn-group">
						<a href="adopt/adopt_pet_details_login/Lily.html"> <button style="width:100px; Height:50px;" type="button" class="btn_View1">View</button></a>	  
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			<div class="col">
			  <div class="card shadow-sm">
				<img alt="img/pet.1.jpg" src="img/pet8.jpg" width="100%" height="255"  xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
	
				<div class="card-body">
				    <p class="card-text"><h3>Pet Name: Milo</h3>
						<h5>Gender: Male</h5>
						<h5>Breed: Basenji</h5>
						 <h5>Weight: 4Kg</h5>
						<h5>Color: Tri-Color</h5>
				  <div class="d-flex justify-content-between align-items-center">
					<div class="btn-group">
						<a href="adopt/adopt_pet_details_login/Milo.html"> <button style="width:100px; Height:50px;" type="button" class="btn_View1">View</button></a>
 
					</div>
				  </div>
				</div>
			  </div>
			</div>
	
			<div class="col">
			  <div class="card shadow-sm">
				<img alt="img/pet11.jpg" src="img/pet11.png" width="100%" height="255"  xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
	
				<div class="card-body">
				    <p class="card-text"><h3>Pet Name: Golden</h3>
						<h5>Gender: Male</h5>
						<h5>Breed: Labrador Retriever</h5>
						 <h5>Weight: 15kg</h5>
						<h5>Color: White</h5>
				  <div class="d-flex justify-content-between align-items-center">
					<div class="btn-group">
						<a href="adopt/adopt_pet_details_login/Golden.html"> <button style="width:100px; Height:50px;" type="button" class="btn_View1">View</button></a>
					</div>
				  </div>
				</div>
			  </div>
			</div>
			<div class="col">
			  <div class="card shadow-sm">
				<img alt="" src="img/pet5.jpg" width="100%" height="255"  xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
	
				<div class="card-body">
				  <p class="card-text"><h3>Pet Name: Tamago</h3>
					<h5>Gender:  Male</h5>
					<h5>Breed:  Shiba-Inu</h5>
				 	<h5>Weight:  12Kg</h5>
					<h5>Color:   Red</h5>

				</p>
				 	
				  <div class="d-flex justify-content-between align-items-center">
					<div class="btn-group">
						<a href="adopt/adopt_pet_details_login/Tamago.html"> <button style="width:100px; Height:50px;" type="button" class="btn_View1">View</button></a>
					</div>
				  </div>
				</div>
			  </div>
			</div>
			<div class="col">
			  <div class="card shadow-sm">
				<img alt="" src="img/pet10.jpg" width="100%" height="255"  xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
	
				<div class="card-body">
				    <p class="card-text"><h3>Pet Name: Max</h3>
						<h5>Gender: Male</h5>
						<h5>Breed: American Bulldog</h5>
						 <h5>Weight: 4Kg</h5>
						<h5>Color:  Black</h5>
				  <div class="d-flex justify-content-between align-items-center">
					<div class="btn-group">
						<a href="adopt/adopt_pet_details_login/Max.html"> <button style="width:100px; Height:50px;" type="button" class="btn_View1">View</button></a>
					</div>
				  </div>
				</div>
			  </div>
			  <br><br>
			</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>

		<!--preloader time duration adjustment-->
	<iframe width="0" height="0" src="https://www.youtube.com/embed/H8vh29F1Ozs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<iframe width="0" height="0" src="https://www.youtube.com/embed/H8vh29F1Ozs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	  	
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



	<script src="adopt/adopt.js" defer></script>

	<!--preloader javascript-->
	<script>
		//preloader javascript
		var loader = document.getElementById("preloader");

		window.addEventListener("load",function(){
			loader.style.display="none";

		})

	</script>	

	<script>
		function mySearch() {
		  var input = document.getElementById("Search");
		  var filter = input.value.toLowerCase();
		  var nodes = document.getElementsByClassName('col');

		  for (i = 0; i < nodes.length; i++) {
		    if (nodes[i].innerText.toLowerCase().includes(filter)) {
		      nodes[i].style.display = "block";
		    } else {
		      nodes[i].style.display = "none";
		    }
		  }
		}
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
</html>
		


	