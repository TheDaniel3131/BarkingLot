<?php

session_start();

require_once("marketplace_db.php");
// require_once("./php/marketplace-item.php");

if(isset($_POST['update_btn'])){
  $update_value = $_POST['update_quantity'];
  $update_id = $_POST['update_quantity_id'];
  $update_quantity_query = mysqli_query($con, "UPDATE `marketplace_cart` SET product_quantity = '$update_value' WHERE id = '$update_id'");
  if($update_quantity_query){
    header('location: cart.php');
  };
};

if(isset($_GET['remove'])){
  $remove_id = $_GET['remove'];
  mysqli_query($con, "DELETE FROM `marketplace_cart` WHERE id = '$remove_id'");
  header('location: cart.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<mete name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marketplace Cart | Barking Lot</title>

	<!-- External CSS -->
	<link href="../services/cart.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="../main.css"> -->
	<link rel="stylesheet" href="../footer.css">

  <!-- External JS -->
  <!-- <script src="product.js"></script> -->

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="background">
	<!-- <header class="header" id="header"> -->
		<!-- Navigation Bar Content -->
		<!-- <nav class="navbar navbar-expand-lg header-nav fixed-top navbar-dark bg-dark">
			  	<a class="navbar-brand navbar-nav ml-auto" href="../services/marketplace.php">
			  		<h3 class="px-2">
			  			<i class="fa-solid fa-left-long p-1"></i>&nbsp; Continue Shopping
			  		</h3>
			  	</a> -->
<!-- 			  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

			  		<span class="navbar-toggler-icon"></span> -->
			    	<!-- <span></span>  	 -->

			  <!-- 	<div class="collapse navbar-collapse bg-dark" id="navbarNavAltMarkup">
			  		<div class="mr-auto"></div>
			  			<div class="navbar-nav">
			  				<a href="cart.php" class="nav-item nav-link avtive text-decoration-none text-warning">
			  					<h5 class="px-5 cart">
			  						<i class="fas fa-shopping-cart"></i>&nbsp -->
<section class="container">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">

            <div class="row">

              <div class="col-lg-7">
                <h4 class="mb-3"><a href="marketplace.php" class="text-body"><i
                      class="fas fa-long-arrow-alt-left me-2"></i>&nbsp; Continue shopping</a></h4>
                <hr>

                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    <p class="mb-1">Shopping cart</p>
                    <?php

                    $select_rows = mysqli_query($con, "SELECT * FROM `marketplace_cart`") or die('query failed');
                    $row_count = mysqli_num_rows($select_rows);
                    ?>
                    <p class="mb-0">You have (<?php echo $row_count; ?>) items in your cart</p>
                  </div>
                  <!-- <div>
                    <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!"
                        class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                  </div> -->
                </div>
                <?php
                $select_cart = mysqli_query($con, "SELECT * FROM `marketplace_cart`");
                $grand_total = 0;
                $total = 0;
                $tax = 0;
                if(mysqli_num_rows($select_cart) > 0){
                  while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                
                ?>
                <form action="cart.php" method="post" class="cart-items">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                          <div class="d-flex flex-row align-items-center">
                            <div>
                              <img src="<?php echo $fetch_cart['product_image']; ?>" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                            </div>
                            <div class="item-name ms-3">
                              <h5><?php echo $fetch_cart['product_name']; ?></h5>
                              <p class="small mb-0 item-detail" style="display:inline-block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 16ch;"><?php echo $fetch_cart['product_detail']; ?></p>
                            </div>
                          </div>
                          <div class="d-flex flex-row align-items-center">
                            <!-- <button type="button" class="btn bg-white rounder-cicle m-0"><i class="icon fas fa-minus" style="font-size:8px;"></i></button> -->
                            <div>
                              <input type="hidden" name="update_quantity_id" value="<?php echo $fetch_cart['id']; ?>">
                              <input type="text" name="update_quantity" id="add" inputmode="numeric" min="1" value="<?php echo $fetch_cart['product_quantity']; ?>" style="width: 40px;text-align: center;font-size:18px;margin-right: 2px;">

                            </div>
                            <button type="submit" class="rounder-cicle m-0 btn bg-white" name="update_btn"><i class="fa-solid fa-check" style="font-size:16px;"></i></button>

                            <div style="width: 100px;">
                              <h5 class="mb-0 ml-3">$<?php echo $sub_total = $fetch_cart['product_new_price'] * $fetch_cart['product_quantity']; ?></h5>
                            </div>
                            <a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('remove item from cart?')" style="color: #cecece;" name="remove" class="delete-btn"><i class="fas fa-trash-alt"></i></a>
                          </div>
                      </div>
                    </div>
                  </div>
                </form>


                <?php
                $grand_total += $sub_total;
                $tax = $grand_total * 0.06;
                $total = $grand_total + 10 + number_format($tax,2);
                  };
                };

                ?>

 <!--                $sql = "SELECT * FROM marketplace_product";
                $result = mysqli_query($con, $sql);
                $product_id = array_column($_SESSION['cart'], 'product_id');
                 if(mysqli_num_rows($result)){
                  while ($row=mysqli_fetch_assoc($result)){
                    foreach ($product_id as $id) {
                      // code...
                      if($row['id'] == $id){
                       cartElement($row['productimg'], $row['productname'], $row['productprice'], $row['productdetail']);

                       $select_cart = mysqli_query($con, "SELECT * FROM `marketplace_cart`");

                if(mysqli_num_rows($select_cart) > 0){
                  while($row=mysqli_fetch_assoc($select_cart)){
                    cartElement($row['product_image'], $row['product_name'], $row['product_new_price'], $row['product_detail']);
                  };
                };
                       cartElement($row['product_image'], $row['product_name'], $row['product_new_price'], $row['product_detail']);
                      }
                    }
                  }
                 } -->

              </div>
              <div class="col-lg-5 align-items-center">

                <div class="card bg-primary text-white rounded-3 mt-5 mb-5">
                  <div class="detail-con card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h5 class="mt-2 mb-2">Summary</h5>
                      <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                        class="img-fluid rounded-3" style="width: 45px;" alt="Avatar"> -->
                    </div>

                    <!-- <p class="small mb-2">Card type</p>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-visa fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-amex fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>

                    <form class="mt-4">
                      <div class="form-outline form-white mb-4">
                        <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                          placeholder="Cardholder's Name" />
                        <label class="form-label" for="typeName">Cardholder's Name</label>
                      </div>

                      <div class="form-outline form-white mb-4">
                        <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                          placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                        <label class="form-label" for="typeText">Card Number</label>
                      </div>

                      <div class="row mb-4">
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <input type="text" id="typeExp" class="form-control form-control-lg"
                              placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                            <label class="form-label" for="typeExp">Expiration</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <input type="password" id="typeText" class="form-control form-control-lg"
                              placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                            <label class="form-label" for="typeText">Cvv</label>
                          </div>
                        </div>
                      </div>

                    </form> -->

                    <hr class="line mb-5">

                    <div class="d-flex justify-content-between">
                      <p class="mb-3">Subtotal</p>
                      <p class="mb-3">$<?php echo $grand_total; ?></p>
                    </div>

                    <div class="d-flex justify-content-between">
                      <p class="mb-3">Shipping fee</p>
                      <p class="mb-3">$10.00</p>
                    </div>

                    <div class="d-flex justify-content-between">
                      <p class="mb-3">Tax</p>
                      <p class="mb-3">$<?php echo number_format($tax,2); ?></p>
                    </div>

                    <div class="d-flex justify-content-between mb-4">
                      <p class="mb-5">Total(Incl. taxes)</p>
                      <p class="mb-5">$<?php echo $total; ?></p>
                    </div>

                    <hr class="line mb-5">

                    <!-- <button type="button" class="btn btn btn-warning btn-block btn-lg"> -->
                      <a href="checkout.php" type="button" class="btn btn btn-warning btn-block btn-lg">
                      <div class="d-flex justify-content-between">
                        <span>$<?php echo $total; ?></span>
                        <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                      </div>
                    </a>
                    <!-- </button> -->

                  </div>
                </div>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


	

	<!-- jQuery | JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>