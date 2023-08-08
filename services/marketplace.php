<?php include'../registerlogin/config.php';

session_start();

error_reporting(0);


if(isset($_POST['logpbox_user'])) {

  $username = $_POST['username'];

  $password = md5($_POST['password']);

  $errors = array();

  if (empty($username)) {

    $errors['u']= "*Username is Required";

  }

  if (empty($_POST['password'])) {

    $errors['p']= "*Password is Required";

  } 

  if (count($errors)==0){

    $sql = "SELECT * FROM users_information WHERE username='$username' AND password='$password'";

    $result = mysqli_query($con, $sql);

    if ($result -> num_rows > 0) {

      $row = mysqli_fetch_assoc($result);

      $_SESSION['username'] = $row['username'];

      header("location: ../marketplace/marketplace.php");

    } else {

      echo "<script>alert('Email or Password is Wrong!')</script>";
    }

  }
    if($_SESSION['username'] == 'admin'){
    header("location: ../adminindex.php");
    } 

    else if($_SESSION['username'] == 'staff'){
    header("location: ../staffindex.php");
    } 
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="tabicon/icon.webp">
	<title>Marketplace | Barking Lot</title>
	<!-- Local CSS -->
	<link rel="stylesheet" href="barkinglotcss.css">
	<!-- Bootstrap | CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<!-- Font Awesome V4.0 | CSS -->

	<!-- these two below no longer works-->
<!-- 	<link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->

	<script src="https://kit.fontawesome.com/5a3777daa8.js" crossorigin="anonymous"></script>



	<!-- Footer1 CSS-->
<!-- 	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet"> -->
	
<!-- 	<link rel="stylesheet" href="footer1/css/ionicons.min.css">
	<link rel="stylesheet" href="footer1/css/style.css"> -->

	<!-- External CSS-->
	<link rel="stylesheet" href="../footer.css">
	<link rel="stylesheet" href="marketplace.css">
	<link rel="stylesheet" href="../main.css">
	<link rel="stylesheet" href="../registerlogin/loginpopbox.css">

	<!-- 	@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap");  -->
	<!-- Local Internal CSS -->
	<style>
		.show-btn{
		  background-color: rgba(255,255,255,0.6);
		  padding: 10px 20px;
		  font-size: 20px;
		  font-weight: 500;
		  color: #fff;
		  cursor: pointer;
/*		  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);*/
		}

		.show-btn, .container2{
		  position: fixed;
		  top: 62.5%;
		  left: 86%;
		  transform: translate(-50%, -50%);
		}
		 
		input[type="checkbox"]{
		  display: none;
		}

		.container2{

		  display: none;
		  background: #fff;
		  width: 350px;
		  padding: 30px;
		  box-shadow: 0 0 8px rgba(0,0,0,0.1);
		  border-radius: 10px;
		/*  border: 5px solid black;*/
/*		  border: px solid #f0f0f0;*/
		}

		#show:checked ~ .container2{
		  display: block;
		}

		.container2 .close-btn{
		  position: absolute;
		  right: 20px;
		  top: 15px;
		  font-size: 18px;
		  cursor: pointer;
		}

		.container2 .close-btn:hover{
		  color: #000;
		}

		.container2 .text{
		  font-size: 35px;
		  font-weight: 600;
		  text-align: center;
		}

		.container2 form{
		  margin-top: -20px;
		}

		.container2 form .data{
		  height: 45px;
		  width: 100%;
		  margin: 25px 0;
		}
		 
		form .data input{
		  height: 100%;
		  width: 100%;
		  padding-left: 10px;
		  font-size: 17px;
		  border: 1px solid silver;
		  font-weight: bold;
		}

		form .data input:focus{
		  border-color: orange;
		  border-bottom-width: 2px;
		}

		form .forgot-pass{
		  margin-top: 30px;
		}

		form .forgot-pass a{
		  color: #3498db;
		  text-decoration: none;
		}

		form .forgot-pass a:hover{
		  text-decoration: underline;
		}

		form .btn{
		  margin: 30px 0;
		  height: 50px;
		  width: 100%;
		  position: relative;
		  overflow: hidden;
	/*	  padding-top: 25px 0px;*/
		}

		form .btn .inner{
		  height: 100%;
		  width: 500%;
		  position: absolute;
		  left: -100%;
		  z-index: -1;
/*		  background: #2b8e8b;
		  color: #2b8e8b;*/
		  background: linear-gradient(to right,#014d6f 10%,#2b8e8b);
		  transition: all 0.4s;
		}

		form .btn:hover .inner2{
		  left: 0;
		}

		form .btn button{
		  height: 100%;
		  width: 100%;
		  background: none;
		  border: none;
		  color: #fff;
		  font-size: 18px;
		  font-weight: 500;
		  text-transform: uppercase;
		  letter-spacing: 1px;
		  cursor: pointer;

		}

		form .btn button:hover{

		}

		form .signup-link{
		  text-align: center;
		}

		form .signup-link a{
		  color: #3498db;
		  text-decoration: none;
		}

		form .signup-link a:hover{
		  text-decoration: underline;
		}
	</style>
</head>
<body>
	<!--  Background -->
	<div class="background-1"></div>
	<!-- Navigation Top Bar In Header-->

	<header class="header" id="header">

		<!-- Navigation Bar Content -->
		<nav class="navbar navbar-expand-lg header-nav fixed-top navbar-dark bg-dark">
			<div class="container-fluid">
			  <a class="navbar-brand navbar-nav ml-auto" href="../index.html">Barking Lot</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			    <span></span>
			    <span></span>
			    <span></span>
			  </button>

			  <div class="collapse navbar-collapse justify-content-between navbar-links" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
			      <li class="nav-item active">
			        <a class="nav-link" href="../index.html">Home <span class="sr-only"></span></a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href="../adopt.html">Adopt</a>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="aboutus.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="../aboutus/slm.html">Saving Lifes Matter</a>
			          <a class="dropdown-item" href="../aboutus/mission.html">Our Mission</a>
			          <a class="dropdown-item" href="../aboutus/ourteam.html">Our Team</a>
			          <a class="dropdown-item" href="../aboutus/refund.html">Refund Policy</a>
			          <a class="dropdown-item" href="../aboutus/ToS.html">Terms of Services</a>
			          <a class="dropdown-item" href="../aboutus/privacy.html">Privacy</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">Coming Soon!</a>
			        </div>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="services.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="../services/marketplace.php">Marketplace</a>
			          <a class="dropdown-item" href="../services/contactus.php">Contact Us</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">Coming Soon!</a>
			        </div>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Others</a>

			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="../eventmanagementsystem/index.php?page=venue" target="_blank">Events & Promotions</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item disabled" href="#"><u>Coming Soon!</u></a>
			          <a class="dropdown-item disabled" href="./funds.html">Funds</a>
			          <a class="dropdown-item disabled" href="./funds.html">Volunteer</a>
			          <a class="dropdown-item disabled" href="./funds.html">Surrender</a>
			        </div>		
			      <li class="nav-item">
			        <a class="nav-link" href="../registerlogin/login.php">Login</a>
			      </li>
			    </ul>
				 <ul class="navbar-nav nav-item ml-auto mb-2 mb-lg-0">
				   <a href="../donation/Donation%20Page.html" class="btn" style="text-align: center;">Donate Now!</button></a>


				 </ul>
			  </div>
			</div>
		</nav>
	</header>
	
	<!-- Section 1.5: Login Popup-->
	<style>
	/* The popup form - hidden by default */
/*		.form-popup {
		  display: none;
		  position: fixed;
		  bottom: 0;
		  right: 15px;
		  border: 3px solid #f1f1f1;
		  z-index: 9;
		}*/

	</style>

<!--     <div class="form-popup" id="loginForm">
      <input type="checkbox" id="show">
      <label for="show" class="show-btn">LOGIN NOW</label>
      <div class="containerLogin">
        <label for="show" class="close-btn fas fa-times" title="close"></label>
          <div class="text">Login Now</div>
            <form class="loginPop"action="#">
              <div class="data">
                <input type="text" placeholder="Your Email or Phone" required>
              </div>
              <div class="data">
                <input type="password" placeholder="Your Password" required>
              </div>
              <div class="forgot-pass">
                <a href="#">Forgot Password?</a></div>
              <div class="btn">
              <div class="inner"></div>
              <button type="submit">login</button>
          </div>
          <div class="signup-link">Not a member? 
            <a href="#">Signup now</a></div>
            </form>
          </div>
        </div> -->



	<!-- SECTION 2: MARKETPLACE-->
	<section class="bg-light text-light p-1 text-center text-sm-start p-lg-5 pt-lg-15 bg1">
	    <div class="main-wrapper">

	    		<!-- First Page of Marketplace-->
		        <div id="marketplace_page1" class="container_marketplace visiblepage">

		            <div class = "main-title">
		                <h1><b><u>Barking Lot's Marketplace</b></u></h1>
		            </div>

		            <div class ="display-style-btns">
		                <button type ="button" id ="grid-active-btn">
		                    <i class = "fas fa-th"></i>
		                </button>
		                <button type ="button" id ="details-active-btn">
		                    <i class ="fas fa-list-ul"></i>
		                </button>
		            </div>

		            <div class = "item-list">
		                <div class = "item">
		                    <div class = "item-img">
		                        <img src = "../images/petproduct1.webp">
		                        <div class = "icon-list">
		                            <button type = "button">
		                            <!-- 	 <label for="show" class="show-btn">Login Now</label> -->
<!-- 		                               <label for="show" ><i class="fas fa-shopping-cart"></i></label> -->
		                               <label for="show"><i class="fas fa-shopping-cart"></i></label>
		                            </button>
		                        </div>
		                    </div>

		                    <div class = "item-detail">
		                        <a href = "#" class = "item-name">Dog's Milk (K9 Natural)</a>
		                        <div class = "item-price">
		                            <span class = "new-price">$8.99</span>
		                            <span class = "old-price">$9.99</span>
		                        </div>
		                        <p>Lactose-Free for easy digestion. </p>
		                        <button type="button" class ="add-btn"><label for="show">add to cart</label></button>
		                    </div>
		                </div>

		                <div class = "item">
		                    <div class = "item-img">
		                        <img src = "../images/petproduct2.webp">
		                        <div class = "icon-list">
		                            <button type = "button">
		                               <label for="show"><i class = "fas fa-shopping-cart"></i></label>
		                            </button>
		                        </div>
		                    </div>

		                    <div class = "item-detail">
		                        <a href = "#" class = "item-name">Puff Pastry Roll - Chicken Cheese (Churu Bites)</a>
		                        <div class = "item-price">
		                            <span class = "new-price">$11.99</span>
		                            <span class = "old-price">$12.99</span>
		                        </div>
		                        <p>Churu Bites are soft pillow-shaped natural chicken treats seasoned with natural flavors, green tea extract and vitamin E. No grains, preservatives or artificial colors. Each package includes eight individual packs to maintain maximum freshness.</p>
		                        <button type = "button" class = "add-btn"><label for="show">add to cart</label></button>
		                    </div>
		                </div>

		                <div class = "item">
		                    <div class = "item-img">
		                        <img src = "../images/petproduct3.webp">
		                        <div class = "icon-list">
		                            <button type = "button">
		                                <label for="show"><i class = "fas fa-shopping-cart"></i></label>
		                            </button>
		                        </div>
		                    </div>

		                    <div class = "item-detail">
		                        <a href = "#" class = "item-name">Puff Pastry Roll - Chicken Salmon (Churu Bites)</a>
		                        <div class = "item-price">
		                            <span class = "new-price">$14.99</span>
		                            <span class = "old-price">$15.99</span>
		                        </div>
		                        <p>Churu Bites are soft pillow-shaped natural chicken treats seasoned with natural flavors, green tea extract and vitamin E. No grains, preservatives or artificial colors. Each package includes eight individual packs to maintain maximum freshness.</p>
		                        <button type = "button" class = "add-btn"><label for="show">add to cart</label></button>
		                    </div>
		                </div>

		                <div class = "item">
		                    <div class = "item-img">
		                        <img src = "../images/petproduct5.webp">
		                        <div class = "icon-list">
		                            <button type = "button">
		                                <label for="show"><i class = "fas fa-shopping-cart"></i></label>
		                            </button>
		                        </div>
		                    </div>
		                    <div class = "item-detail">
		                        <a href = "#" class = "item-name">RawBoost Mixers Gut (Instinct)</a>
		                        <div class = "item-price">
		                            <span class = "new-price">$23.99</span>
		                            <span class = "old-price">$24.99</span>
		                        </div>
		                        <p>Made with cage-free chicken plus vibrant, functional whole-food ingredients likes pumpkin, sweet potato, chicory root, apple cider vinegar & probiotics. Top your kibble with freeze-dried raw for fiber and live, natural probiotics to help maintain digestive health.</p>
		                        <button type = "button" class = "add-btn"><label for="show">add to cart</label></button>
		                    </div>
		                </div>

		                <div class = "item">
		                    <div class = "item-img">
		                        <img src = "../images/petproduct6.webp">
		                        <div class = "icon-list">
		                            <button type = "button">
		                                <label for="show"><i class = "fas fa-shopping-cart"></i></label>
		                            </button>
		                        </div>
		                    </div>

		                    <div class = "item-detail">
		                        <a href = "#" class = "item-name">Ziwi Peak's Provenance Series Canned Food (Otago Valley)</a>
		                        <div class = "item-price">
		                            <span class = "new-price">$7.99</span>
		                            <span class = "old-price">$8.99</span>
		                        </div>
		                        <p>Beef, Beef Soup, Venison, Whole Southern Blue Cod, Sheep Trim, Beef Kidney, Sheep Lung, New Zealand Green Mussels, Sheep Plasma, Deer Tribe, Cod, Lecithin, Beef Liver, Deer Lung, Beef Bone, Lamb Liver , sheep kidney, lamb, deer kidney, minerals (dipotassium hydrogen phosphate, magnesium sulfate. Zinc amino acid complex, iron amino acid complex, copper amino acid complex, selenium yeast, manganese amino acid complex), deer bone, dried kelp, sheep Bone, salt, vitamins (vitamin E supplement, thiamine mononitrate, vitamin B5 supplement, pyridoxine hydrochloride, vitamin D3 supplement, folic acid).</p>
		                        <button type = "button" class = "add-btn"><label for="show">add to cart</label></button>
		                    </div>
		                </div>

		                <div class = "item">
		                    <div class = "item-img">
		                        <img src = "../images/petproduct7.webp">
		                        <div class = "icon-list">
		                            <button type = "button">
		                                <label for="show"><i class = "fas fa-shopping-cart"></i></label>
		                            </button>
		                        </div>
		                    </div>
		                    <div class = "item-detail">
		                        <a href = "#" class = "item-name">Molar Dried Sweet Potatoes (Crump's Naturals)</a>
		                        <div class = "item-price">
		                            <span class = "new-price">$220.00</span>
		                            <span class = "old-price">$275.60</span>
		                        </div>
		                        <p>One of the most popular foods, sweet potatoes grown in North America are sliced ​​and slowly roasted, resulting in a tough texture. Single ingredient. Use fresh sweet potatoes - suitable for dogs allergic to meat protein</p>
		                        <button type = "button" class = "add-btn"><label for="show">add to cart</label></button>
		                    </div>
		                </div>

		                <div class = "item">
		                    <div class = "item-img">
		                        <img src = "../images/petproduct8.webp">
		                        <div class = "icon-list">
		                            <button type = "button">
		                                <label for="show"><i class = "fas fa-shopping-cart"></i></label>
		                            </button>
		                        </div>
		                    </div>
		                    <div class = "item-detail">
		                        <a href = "#" class = "item-name">Duck, Cantaloupe & Pumpkin Canned Food (Farmina N&D)</a>
		                        <div class = "item-price">
		                            <span class = "new-price">$35.99</span>
		                            <span class = "old-price">$36.99</span>
		                        </div>
		                        <p>N&D Pumpkin Dog Duck & Pumpkin Recipe is formulated to meet the nutritional levels established by the AAFCO Dog Food Nutrient Profiles for maintenance. 100% Satisfaction Guaranteed.</p>
		                        <button type = "button" class = "add-btn"><label for="show">add to cart</label></button>
		                    </div>
		                </div>

		                <div class = "item">
		                    <div class = "item-img">
		                        <img src = "../images/petproduct9.webp">
		                        <div class = "icon-list">
		                            <button type = "button">
		                                <label for="show"><i class = "fas fa-shopping-cart"></i></label>
		                            </button>
		                        </div>
		                    </div>
		                    <div class = "item-detail">
		                        <a href = "#" class = "item-name">Freeze Cheese Cubes Dried Food (PureBites)</a>
		                        <div class = "item-price">
		                            <span class = "new-price">$220.00</span>
		                            <span class = "old-price">$275.60</span>
		                        </div>
		                        <p>All Natural, Single Origin - 100% Cheddar Cheese High protein and excellent source of calcium Freeze-dried - preserves natural nutrients and freshness High palatability - dogs will love it.</p>
		                        <button type = "button" class = "add-btn"><label for="show">add to cart</label></button>
		                    </div>
		                </div>

		                <div class = "item">
		                    <div class = "item-img">
		                        <img src = "../images/petproduct10.webp">
		                        <div class = "icon-list">
		                            <button type = "button">
		                                <label for="show"><i class = "fas fa-shopping-cart"></i></label>
		                            </button>
		                        </div>
		                    </div>
		                    <div class = "item-detail">
		                        <a href = "#" class = "item-name">Whole Grain Salmon Dog Food (Go! Solutions)</a>
		                        <div class = "item-price">
		                            <span class = "new-price">$24.99</span>
		                            <span class = "old-price">$25.99</span>
		                        </div>
		                        <p>GO! SOLUTIONS DIGESTION + GUT HEALTH includes a distinctive mix of fibre-rich ancient grains, a three-yeast blend, and stable probiotics to help maintain a healthy gut and happy dog.</p>
		                        <button type = "button" class = "add-btn"><label for="show">add to cart</label></button>
	                    </div>

	                </div>
<!-- 
				<center>
	                <div class="button_marketplace-group-page">
		                	<a href="marketplace-page-1.html"><button class="button_marketplace button_marketplace1" type="button">1</button></a>
		                	<a href="marketplace-page-2.html"><button class="button_marketplace button_marketplace2" type="button">2</button></a>
		                </div>
		        </center> -->
	            </div>
	        </div>
	    </div>
	</div>

	</section>


	<section>
	    <div class="center">
	      <input type="checkbox" id="show">
	<!--       <label for="show" class="show-btn">Login Now</label> -->
	      <div class="container2">
	        <label for="show" class="close-btn fas fa-times" title="close"></label>
	        <div class="text">Login</div>
	        <form method="post" action="">

	          <div class="data">
	            <input type="text" name="username" placeholder="Enter Your Username: "  value="<?php echo $username; ?>"  title="Please Kindly Enter Your Right Username!" class="form-control p-2">	  		
                <p class="text-danger mx-auto" style="margin-bottom: 15px"><?php if(isset($errors['u'])) echo $errors['u']; ?></p>
	          </div>
	          <div class="data">
	            <input type="password" name="password" placeholder="Your Own Password: " value="<?php echo $_POST['password']; ?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Incorrect Password. Please Try Again!" >
                 <p class="text-danger mx-auto" style="margin-bottom: -7px"><?php if(isset($errors['p'])) echo $errors['p']; ?></p>
	          </div>


	          <div class="forgot-pass">
	            <a href="../registerlogin/registration.php">Forgot Password?</a></div>
	            <div class="btn">
	            <div class="inner">
	          </div>
	          	<button type="submit" name="logpbox_user">Login Now</button>
	          </div>
	          <div class="signup-link">Not a member? Become one! <a href="../registerlogin/registration.php">&nbsp;Sign Up</a></div>
	        </form>
	      </div>
	    </div>
   	</section>

    <script src= "script.js"></script>

        <script>
			function openForm() {
			  document.getElementById("loginForm").style.display = "block";
			}

			function closeForm() {
			  document.getElementById("loginForm").style.display = "none";
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