<?php

@include '../registerlogin/config.php';
session_start();

if(isset($_POST['checkout'])){

  $firstname = $_POST['firstName'];
  $lastname = $_POST['lastName'];
  $email = $_POST['email'];
  $phonenumber = $_POST['phonenumber'];
  $address = $_POST['address'];
  $country = $_POST['country'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $paymentmethod = $_POST['paymentMethod'];
  $cc_name = $_POST['cc-name'];
  $cc_number = $_POST['cc-number'];
  $cc_expiration = $_POST['cc-expiration'];
  $cc_cvv = $_POST['cc-cvv'];
  
  $cart_query = mysqli_query($con, "SELECT * FROM `marketplace_cart`");
  $product_total = 0;
  $price_total = 0;
  $total = 0;
  if(mysqli_num_rows($cart_query) > 0){
    while($product_item = mysqli_fetch_assoc($cart_query)){
      $product_name[] = $product_item['product_name'] .' ('. $product_item['product_quantity'] .' )';
      $product_price = $product_item['product_new_price'] * $product_item['product_quantity'];
      $total += $product_price;
      $tax = $total * 0.06;
      $price_total = $total + 10 + number_format($tax,2);
    };
  };

  $total_product = implode(', ', $product_name);
  $detail_query = mysqli_query($con, "INSERT INTO `marketplace_order` (firstname, lastname, email, phonenumber, address, country, state, zip, paymentmethod, cc_name, cc_number, cc_expiration, cc_cvv, total_product, total_price) VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$address', '$country', '$state', '$zip', '$paymentmethod', '$cc_name', '$cc_number', '$cc_expiration', '$cc_cvv', '$total_product', '$price_total')") or die('query failed');

  if($cart_query && $detail_query){
    header('location: checkout-thankyoupage.html');
    unset($_SESSION['marketplace_cart']);
    // updateDbCart();

// if(isset($_GET['checkout'])){
//     $marketplace_id = $_GET['marketplace_id'];
//     mysqli_query($con, "DELETE FROM `marketplace_cart` WHERE id = '$marketplace_id'");
            
//     $sql = "DELETE FROM `marketplace_cart` WHERE id = $marketplace_id" ;
    // mysql_select_db('test_db');
    // $retval = mysql_query( $sql, $conn );
  }
}



?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Marketplace Checkout | Barking Lot</title>

	<!-- External CSS -->
	<link href="../services/checkout.css" rel="stylesheet">

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light">

  <!--Main layout-->
  <div class="container bg-white mt-3">
    <a href="cart.php"><h6 class="text-right p-3">Edit</h6></a>
    <main class="mt-0 pt-0">
      <div class="container wow fadeIn">
  
        <!-- Heading -->
        <h2 class="mb-5 h2 text-center">Checkout form</h2>
  
        <!--Grid row-->
        <div class="row">
  
          <!--Grid column-->
          <div class="col-md-8 mb-4">

            <!--Card-->
            <div class="card">
              <center><h5 class="text-muted mt-3">Personal Information</h5></center>

              <div class="display-order">
                <?php

                ?>
              </div>
  
              <!--Card content-->
              <form class="card-body" action="" method="post">
  
                <!--Grid row-->
                <div class="row">
  
                  <!--Grid column-->
                  <div class="col-md-6 mb-2">

                    <!--firstName-->
                    <div class="md-form ">
                      <input type="text" id="firstName" class="form-control" name="firstName" placeholder="Thum" required>
                      <label for="firstName" class="">First name <b class="text-danger">*</b></label>
                    </div>
  
                  </div>
                  <!--Grid column-->
  
                  <!--Grid column-->
                  <div class="col-md-6 mb-2">
  
                    <!--lastName-->
                    <div class="md-form">
                      <input type="text" id="lastName" class="form-control" name="lastName" placeholder="Yong Hui" required>
                      <label for="lastName" class="">Last name <b class="text-danger">*</b></label>
                    </div>
  
                  </div>
                  <!--Grid column-->
  
                </div>

                <!--Grid row-->
                <div class="row">
  
                  <!--Grid column-->
                  <div class="col-md-6 mb-2">

                    <!--firstName-->
                    <div class="md-form ">
                      <input type="email" id="email" class="form-control" placeholder="youremail@example.com" name="email" required>
                      <label for="email" class="">Email <b class="text-danger">*</b></label>
                    </div>
  
                  </div>
                  <!--Grid column-->
  
                  <!--Grid column-->
                  <div class="col-md-6 mb-2">
  
                    <!--lastName-->
                    <div class="md-form">
                      <input type="tel" id="phonenumber" class="form-control" step="1" placeholder="012-345-6789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="phonenumber" required>
                      <label for="phonenumber" class="">Phone Number <b class="text-danger">*</b></label>
                    </div>
  
                  </div>
                  <!--Grid column-->
  
                </div>
                <!--Grid row-->

                <!--address-->
                <div class="md-form mb-2">
                  <textarea type="text" id="address" class="form-control" name="address" placeholder="Block-123-45, Jackin Residence, Bukit Daniel" required></textarea>
                  <label for="address" class="">Address <b class="text-danger">*</b></label>
                </div>

                <!--Grid row-->
                <div class="row">
  
                  <!--Grid column-->
                  <div class="col-lg-4 col-md-12 mb-4">
  
                    <label for="country">Country <b class="text-danger">*</b></label>
                    <select class="custom-select d-block w-100" name="country" id="country" required>
                      <option disabled selected value="">Choose...</option>
                      <option value="Malaysia">Malaysia</option>
                      <option value="Singapore">Singapore</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select a valid country.
                    </div>
  
                  </div>
                  <!--Grid column-->
  
                  <!--Grid column-->
                  <div class="col-lg-4 col-md-6 mb-4">
  
                    <label for="state">State <b class="text-danger">*</b></label>
                    <select class="custom-select d-block w-100" id="state" name="state" required>
                      <option disabled selected value="">Choose...</option>
                      <option disabled value="">--- Malaysia ---</option>
                      <option value="Negeri Sembilan">Negeri Sembilan</option>
                      <option value="Pahang">Pahang</option>
                      <option value="Johor">Johor</option>
                      <option value="Kedah">Kedah</option>
                      <option value="Kelantan">Kelantan</option>
                      <option value="Kuala Lumpur">Kuala Lumpur</option>
                      <option value="Melaka">Melaka</option>
                      <option value="Perak">Perak</option>
                      <option value="Perlis">Perlis</option>
                      <option value="Pulau Pinang">Pulau Pinang</option>
                      <option value="Sabah">Sabah</option>
                      <option value="Sarawak">Sarawak</option>
                      <option value="Selangor">Selangor</option>
                      <!-- Singapore -->
                      <option disabled value="">--- Singapore ---</option>
                      <option value="Central Region">Central Region</option>
                      <option value="East Region">East Region</option>
                      <option value="North Region">North Region</option>
                      <option value="North-East Region">North-East Region</option>
                      <option value="West Region">West Region</option>
                    </select>
                    <div class="invalid-feedback">
                      Please provide a valid state.
                    </div>
  
                  </div>
                  <!--Grid column-->
  
                  <!--Grid column-->
                  <div class="col-lg-4 col-md-6 mb-4">
  
                    <label for="zip">Zip <b class="text-danger">*</b></label>
                    <input type="text" class="form-control" id="zip" placeholder="57000" required name="zip">
                    <div class="invalid-feedback">
                      Zip code required.
                    </div>
  
                  </div>
                  <!--Grid column-->
  
                </div>
                <!--Grid row-->
  
                <hr>

                <div class="d-block my-3">
                  <div class="custom-control custom-radio">
                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" value="Credit card" checked required>
                    <label class="custom-control-label" for="credit">Credit card</label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" value="Debit card" required>
                    <label class="custom-control-label" for="debit">Debit card</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="cc-name">Name on card <b class="text-danger">*</b></label>
                    <input type="text" class="form-control" id="cc-name" name="cc-name" placeholder="Maybank" required>
                    <!-- <small class="text-muted">Full name as displayed on card</small> -->
                    <div class="invalid-feedback">
                      Name on card is required
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="cc-number">Credit card number <b class="text-danger">*</b></label>
                    <input type="text" class="form-control" id="cc-number" name="cc-number"placeholder="0000-1111-2222-3333" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}" required>
                    <div class="invalid-feedback">
                      Credit card number is required
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <label for="cc-expiration">Expiration <b class="text-danger">*</b></label>
                    <input type="text" class="form-control" id="cc-expiration" name="cc-expiration" placeholder="01/23" pattern="[0-9]{2}/[0-9]{2}" required>
                    <div class="invalid-feedback">
                      Expiration date required
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="cc-expiration">CVV <b class="text-danger">*</b></label>
                    <input type="text" class="form-control" id="cc-cvv" name="cc-cvv" pettern="[0-9]{3}" placeholder="123" required>
                    <div class="invalid-feedback">
                      Security code required
                    </div>
                  </div>
                </div>
                <hr class="mb-4">

                <button class="btn btn-lg btn-block btn-warning text-white" type="submit" name="checkout">Continue to checkout</button>

                <center><small class="tnc text-muted">*By continuing you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>*</small></center>

              </form>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">


          <!-- Heading -->
          <h4 class="d-flex justify-content-between align-items-center mb-3">

            <span class="text-muted">Your cart</span>

            <?php

              $select_rows = mysqli_query($con, "SELECT * FROM `marketplace_cart`") or die('query failed');
              $row_count = mysqli_num_rows($select_rows);
            ?>

            <span class="badge badge-secondary badge-pill"><?php echo $row_count; ?></span>
          </h4>

          <!-- Cart -->
          <?php
            $select_cart = mysqli_query($con, "SELECT * FROM `marketplace_cart`");
            $total = 0;
            $tax = 0;
            $grand_total = 0;
            if(mysqli_num_rows($select_cart) > 0){
              while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                $total_price = $fetch_cart['product_new_price'] * $fetch_cart['product_quantity'];
                $grand_total += $total_price;
                $tax = $grand_total * 0.06;
                  
          ?>
          <ul class="list-group mb-1 z-depth-1">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <img src="<?php echo $fetch_cart['product_image']; ?>" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
              </div>
              <div>
                <input type="hidden" name="marketplace_id" value="<?php echo $fetch_cart['id']; ?>">
                <h6 class="my-0 pr-2"><?php echo $fetch_cart['product_name']; ?></h6>
                <small class="text-muted" style="display:inline-block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 16ch;"><?php echo $fetch_cart['product_detail']; ?></small>
              </div>
              <span class="text-muted pr-2">x<?php echo $fetch_cart['product_quantity']; ?></span>
              <span class="text-muted">$<?php echo number_format($fetch_cart['product_new_price'],2); ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (RM)</span>
              <strong>$<?= $total_price; ?></strong>
            </li>
          </ul>

          <?php
          // $total = $grand_total + 10;
            };
            
            $total = $grand_total + 10 + number_format($tax,2);
          };
          ?>

          <hr>
          <h4>
            <span class="text-muted">Payment Details</span>
          </h4>
          <ul class="list-group mb-1 z-depth-1">
            <li class="ml-3 mr-3 mt-1 d-flex justify-content-between">
              <span>Subtotal</span>
              <strong>$<?php echo $grand_total; ?></strong>
            </li>
            <li class="ml-3 mr-3 d-flex justify-content-between">
              <span>Shipping fee</span>
              <strong>$10</strong>
            </li>
            <li class="ml-3 mr-3 d-flex justify-content-between">
              <span>Tax</span>
              <strong>$<?php echo number_format($tax,2); ?></strong>
            </li>
          </ul>
          <hr>
            <ul class="list-group mb-1 z-depth-1">
<!-- list-group-item  -->
            <li class="ml-3 mr-3 d-flex justify-content-between">
              <span>Total - Incl. taxes (RM)</span>
              <strong>$<?php echo $total; ?></strong>
            </li>
          </ul>


        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
</div>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn bg-dark">

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/Barking-Lot-104626392346342" target="_blank">
        <i class="fab fa-facebook-f mr-4 text-white"></i>
      </a>

      <a href="https://www.reddit.com/user/BarkingLotOfficial" target="_blank">
        <i class="fab fa-reddit mr-4 text-white"></i>
      </a>

      <a href="https://twitter.com/lot_barking" target="_blank">
        <i class="fab fa-twitter mr-4 text-white"></i>
      </a>

      <a href="https://www.youtube.com/channel/UCkPsTuZBu7MXRgnNWq5EEyA" target="_blank">
        <i class="fab fa-youtube mr-4 text-white"></i>
      </a>

      <a href="https://www.linkedin.com/in/barking-lot-a78213247/" target="_blank">
        <i class="fab fa-linkedin mr-4 text-white"></i>
      </a>

    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-white">
    	<p style="text-align: center"> Copyright &copy; 2020-<script>document.write(new Date().getFullYear())</script> <a href="../index.html" class="btn-outline-white" role="button" style="text-decoration: none">Barking Lot</a> All Rights Reserved</p>

    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

</body>
</html>
