<?php

//start session
session_start();

@include 'marketplace_db.php';
// @include './php/marketplace-item.php';

if(isset($_POST['add_to_cart'])){
	
	$product_name = $_POST['product_name'];
	$product_new_price = $_POST['product_new_price'];
	$product_image = $_POST['product_image'];
	$product_detail = $_POST['product_detail'];
	$product_quantity = 1;

	$select_cart = mysqli_query($con, "SELECT * FROM `marketplace_cart` WHERE name = '$product_name'");

	if (mysqli_num_rows($select_cart) > 0){
		$message[] = 'Product already added to cart';
	}else {
		$insert_product = mysqli_query($con, "INSERT INTO `marketplace_cart` (product_name, product_new_price, product_image, product_detail, product_quantity) VALUES ('$product_name', '$product_new_price','$product_image','$product_detail', '$product_quantity')");
		$message[] = 'Product added to cart successfully!';
	}
}


?>

<!-- if(isset($_POST['add_to_cart'])){
	// print_r($_POST['product_id']);
	if(isset($_SESSION['cart'])){

		$item_array_id = array_column($_SESSION['cart'], 'product_id');
		// print_r($item_array_id);

		if(in_array($_POST['product_id'], $item_array_id)){
			echo "<script>alert('Product is already added in the cart..!')</script>";
			echo "<script>window.location='marketplace.php'</script>";
		}else{
			$count=count($_SESSION['cart']);
			$item_array=array(
				'product_id'=>$_POST['product_id']
			);

			$_SESSION['cart'][$count]=$item_array;
			// print_r($_SESSION['cart']);
		}
		// print_r($_SESSION['cart']);

	} else{
		$item_array = array(
			'product_id'=>$_POST['product_id']
		);

		//Create new session variable
		$_SESSION['cart'][0]=$item_array;
		print_r($_SESSION['cart']);
	}
} -->

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

	<!-- Font Awesome -->
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- Footer1 CSS-->
<!-- 	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet"> -->
	
<!-- 	<link rel="stylesheet" href="footer1/css/ionicons.min.css">
	<link rel="stylesheet" href="footer1/css/style.css"> -->

	<!-- External CSS-->
	<link rel="stylesheet" href="../footer.css">
	<link rel="stylesheet" href="../services/marketplace.css">
	<link rel="stylesheet" href="../main.css">


<!-- 	@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap"); -->
	<!-- Local Internal CSS -->
</head>

<body>
	<?php

	if(isset($message)){
   		foreach($message as $message){
      		echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   		};
	};

?>
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
			          <a class="dropdown-item" href="./marketplace.html">Marketplace</a>
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
			    <!-- <div class="mr-auto">
			    	<div class="navbar-nav">
			    		<a href="cart.php" class="nav-item nav-link avtive">
			    			<h5 class="px-5 cart">
			    				<i class="fas fa-shopping-cart"></i>
			    			</h5>
			    		</a>
			    	</div>
				</div> -->
				 <ul class="navbar-nav nav-item ml-auto mb-2 mb-lg-0">
				   <button class="btn" style="text-align: center;">Donate Now!</button>
				 </ul>
			  </div>
			</div>
		</nav>
	</header>
	
	<!-- SECTION 2: MARKETPLACE-->
	<section class="bg-light text-light p-1 text-center text-sm-start p-lg-5 pt-lg-15 bg1">
	    <div class="main-wrapper">
	    		<!-- First Page of Marketplace-->
		        <div id="marketplace_page1" class="container_marketplace visiblepage">
		        	<!-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		        		<div class="mr-auto">
			    			<div class="navbar-nav">
			    				<a href="cart.php" class="nav-item nav-link avtive">
			    					<h5 class="px-5 cart">
			    						<i class="fas fa-shopping-cart"></i>
			    					</h5>
			    				</a>
			    			</div>
						</div>
					</div> -->
		            <div class = "main-title">
		                <h1><b><u>Barking Lot's Marketplace</b></u></h1>
		            </div>
		            <div class ="display-style-btns">
		            	<a href="cart.php" class="cart nav-item nav-link avtive">
			    			<!-- <h5 class="px-5 cart"> -->
			    			<button type ="button">
			    				<i class="fas fa-shopping-cart text-warning"></i>&nbsp
			    				<!-- <span id="cart_count" class="text-warning bg-dark" style="border-radius: 3rem; text-align: center; padding: 0 0.9rem 0rem 0.9rem">0</span> -->
			    				<?php
			    				if (isset($_SESSION['cart'])){
			    					$count=count($_SESSION['cart']);
			    					echo "<span id=\"cart_count\" class=\"text-warning bg-dark\" style=\"border-radius: 3rem; text-align: center; padding: 0 0.9rem 0rem 0.9rem\">$count</span>";
			    				}else {
			    					echo "<span id=\"cart_count\" class=\"text-warning bg-dark\" style=\"border-radius: 3rem; text-align: center; padding: 0 0.9rem 0rem 0.9rem\">0</span>";
			    				}
			    				?>
			    			</button>
			    			<!-- </h5> -->
			    		</a>
		                <button type ="button" id ="grid-active-btn">
		                    <i class = "fas fa-th"></i>
		                </button>
		                <button type ="button" id ="details-active-btn">
		                    <i class ="fas fa-list-ul"></i>
		                </button>
		            </div>

		            <div class = "item-list">
		            	<?php
      
      					$select_products = mysqli_query($con, "SELECT * FROM `marketplace_product`");
      					if(mysqli_num_rows($select_products) > 0){
      					   while($fetch_product = mysqli_fetch_assoc($select_products)){
      					?>


		            	<form action="marketplace.php" method="post">
							<div class = "item">
							    <div class = "item-img">
							        <img src = "./<?php echo $fetch_product['product_image']; ?>" alt="">
							        <div class = "icon-list">
							            <button type = "button">
							                <i class = "fas fa-sync-alt"></i>
							            </button>
							            <button type = "button" name= "add_to_cart">
							                <i class = "fas fa-shopping-cart"></i>
							            </button>
							            <button type = "button">
							                <i class = "far fa-heart"></i>
							            </button>
							        </div>
							    </div>
							    <div class = "item-detail">
							        <a href = "marketplace.php" class = "item-name"><?php echo $fetch_product['product_name']; ?></a>
							        <div class = "item-price">
							            <span class = "new-price">$<?php echo $fetch_product['product_new_price']; ?>/-</span>
							            <span class = "old-price">$<?php echo $fetch_product['product_old_price']; ?></span>
							        </div>
							        <p><?php echo $fetch_product['product_detail']; ?></p>
							        <button type = "button" class = "add-btn" name= "add_to_cart">add to cart</button>
		        
		        					<!-- <input type = "hidden" class = "product-id" name= "product_id" value="$productid"> -->
		        					<input type = "hidden" class = "product-name" name= "product_name" value="<?php echo $fetch_product['product_name']; ?>">
		        					<input type = "hidden" class = "product-new-price" name= "product_new_price" value="<?php echo $fetch_product['product_new_price']; ?>">
		        					<input type = "hidden" class = "product-old-price" name= "product_old_price" value="<?php echo $fetch_product['product_old_price']; ?>">
		        					<input type = "hidden" class = "product-image" name= "product_image" value="<?php echo $fetch_product['product_image']; ?>">
		        					<input type = "hidden" class = "product-new-price" name= "product_new_price" value="<?php echo $fetch_product['product_detail']; ?>">
	    						</div>
							</div>
						</form>

						<?php
		            		};
		            	};
		            	?>
		            </div>
				
				</div>
			</div>
		</div>
	</section>
<!-- 	    $sql = "SELECT * FROM marketplace_product";
						$result = mysqli_query($con, $sql);

						if(mysqli_num_rows($result)>0){
							// return $result;
							while ($row=mysqli_fetch_assoc($result)) {
		
		            		// code...
		            			pet_item($row['id'],$row['product_name'],$row['product_new_price'],$row['product_old_price'],$row['product_image'],$row['product_detail']);
		            	} -->

	<script src= "../services/script.js"></script>

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




	<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

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