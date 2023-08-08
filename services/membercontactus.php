<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="icon" href="../tabicon/icon.webp">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us | Barking Lot</title>
	<!-- Local CSS -->
	<!-- <link rel="stylesheet" href="ourmission.css"> -->
	<!-- Bootstrap | CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- Font Awesome | CSS -->
<!-- 	<link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
	<script src="https://kit.fontawesome.com/5a3777daa8.js" crossorigin="anonymous"></script>

	<!--External CSS-->
	<link rel="stylesheet" href="CUS.css">
	<link rel="stylesheet" href="../footer.css">
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
			        <a class="nav-link" href="../index.php">Home <span class="sr-only"></span></a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href="../adopt.php">Adopt</a>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="aboutus.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="../aboutus_login/slm.html">Saving Lifes Matter</a>
			          <a class="dropdown-item" href="../aboutus_login/mission.html">Our Mission</a>
			          <a class="dropdown-item" href="../aboutus_login/ourteam.html">Our Team</a>
			          <a class="dropdown-item" href="../aboutus_login/refund.html">Refund Policy</a>
			          <a class="dropdown-item" href="../aboutus_login/ToS.html">Terms of Services</a>
			          <a class="dropdown-item" href="../aboutus_login/privacy.html">Privacy</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">Coming Soon!</a>
			        </div>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="services.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="../marketplace/marketplace.php">Marketplace</a>
			          <a class="dropdown-item" href="../services/membercontactus.php">Contact Us</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">Coming Soon!</a>
			        </div>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Others</a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="../eventmanagementsystem/index.php?page=membervenue" target="_blank">Events & Promotions</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item disabled" href="#"><u>Coming Soon!</u></a>
			          <a class="dropdown-item disabled" href="./funds.html">Funds</a>
			          <a class="dropdown-item disabled" href="./funds.html">Volunteer</a>
			          <a class="dropdown-item disabled" href="./funds.html">Surrender</a>
			        </div>			
			      <li class="nav-item">
			        <a class="nav-link" href="../profile.php">Settings</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="../index.html">Logout</a>
			      </li>
			    </ul>
				 <ul class="navbar-nav nav-item ml-auto mb-2 mb-lg-0">
				   <a href="../donation/Donation%20Page.html" class="btn" style="text-align: center;">Donate Now!</button></a>
				 </ul>
			  </div>
			</div>
		</nav>
	</header>

	<body>
	<section class="bk">
		<div class="wtbl">
			<h1 class="h1" color="black">Feedback</h1>
		</div>
		<div class="container-1">
	    	<div class="contact-us">
				<form action="cu.php"method="POST">
                    <div class="card-details">
                        <div class="card-box">
                            <span class="details">Username<em>&#x2a;</em></span>
                            <input type="text" name="Username" required=""/>
                        </div>	
				        <small class="text-muted mx-auto">Eg: Jackin</small><br><br>
				    </div>
                    <div class="card-details">
                        <div class="card-box">
                            <span class="details">EMAIL<em>&#x2a;</em></span>
                            <input type="text" name="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required=""/>
                        </div>
				        <small class="text-muted mx-auto">Eg: jackinfu123@gmail.com</small><br><br>
				    </div>
                    <div class="card-details">
                        <div class="card-box">
                            <span class="details">PHONE<em>&#x2a;</em></span>
                            <input type="tel" name="Phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required=""/>
                        </div>
                        <small class="text-muted mx-auto">Eg: 012-345-6789</small><br><br>
                    </div>
                    <div class="card-details">
                        <div class="card-box">
                            <span class="details">SUBJECT<em>&#x2a;</em></span>
                            <input type="text" name="Subject" required=""/><br>
                        </div>
                    </div>
                    <div class="card-details">
                        <div class="card-box">
                            <span class="details">YOUR MESSAGE<em>&#x2a;</em></span>
                            <textarea id="customerNote" name="Message" required="" rows="4"></textarea>
                        </div>
                    </div>
				  <h3>
					Please provide all the information about your issue you can.
				  </h3>
				  <button id="customerOrder">SUBMIT</button>
				</form>

			</div>
			<br><br><br><br>
		</div>	


	</section>

		<!--<script src="https://smtpjs.com/v3/smtp.js"></script>
		<script>
			function sendEmail(){
				Email.send({
				    Host : "smtp.gmail.com",
				    Username : "testingcode0918@gmail.com",
				    Password : "FE7E179623C9A1D3F739ED296A9C8CF1AF2C",
				    To : 'testingcode0918@gmail.com',
				    From : document.getElementById("email").value,
				    Subject : "New Contact Form Enquiry",
				    Body : "Name: " + document.getElementById("name").value
				    	+ "<br> Email: " + document.getElementById("email").value
				    	+ "<br> Phone no: " + document.getElementById("phone").value
				    	+ "<br> Message: " + document.getElementById("message").value
				}).then(
				message => alert("Message Sent Succesfull")
				);

		}
	</script>-->

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