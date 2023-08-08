<?php

@include '../registerlogin/config.php';
session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <!-- External CSS -->
  <link href="checkout.css" rel="stylesheet">

  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light">

  <div class="container-invoice bg-white p-5">
    <!-- <a class="button print" style="text-decoration: none;" href="../services/marketplace.php">Continue Shopping</a> -->
    <div class="print">
      <a class="button" onclick="window.print()">
        <!-- <button> -->
          <i class="fas fa-print"></i> Download PDF
        <!-- </button> -->
      </a>
        </div>
        <br>
        <div>
      <h2 class="brand-name">Barking Lot</h2>
    </div>
    <u><h5 class="customer-dtl">Customer Detail</h5></u>
    <div class="row">
      <?php
        

        $detail_query = mysqli_query($con, "SELECT * FROM `marketplace_order`");
        $cart_query = mysqli_query($con, "SELECT * FROM `marketplace_cart`");
        // $detail_query = mysqli_query($con, "SELECT * FROM `marketplace_order`");

        if(mysqli_num_rows($detail_query) != 0){
          while($customer_detail = mysqli_fetch_assoc($detail_query)){

        // if($cart_query && $detail_query){
      ?>
          <div class="col-xl-12 ">
            <ul class="list-unstyled">
              <li class="text-muted">To: <span class="cus-name"><?php echo $customer_detail['firstname']; ?>&nbsp;<?php echo $customer_detail['lastname']; ?></span></li>
              <li class="text-muted"><?php echo $customer_detail['address']; ?></li>
              <li class="text-muted"><?php echo $customer_detail['state']; ?>, <?php echo $customer_detail['country']; ?>, <?php echo $customer_detail['zip']; ?></li>
              <li class="text-muted"><i class="fas fa-envelope"></i>&nbsp;<?php echo $customer_detail['email']; ?></li>
              <li class="text-muted"><i class="fas fa-phone"></i>&nbsp;<?php echo $customer_detail['phonenumber']; ?></li>
            </ul>
          </div>
        </div>
        <hr>
        <div class="d-flex flex-row justify-content-between align-items-center order-details">
            <div><span class="d-block fs-12">Order date</span><span class="font-weight-bold">12 March 2020</span></div>
            <!-- <div><span class="d-block fs-12">Order number</span><span class="font-weight-bold">OD44434324</span></div> -->
            <div><span class="d-block fs-12">Payment method</span><span class="font-weight-bold"><?php echo $customer_detail['paymentmethod']; ?></span><img class="ml-1 mb-1" src="https://i.imgur.com/ZZr3Yqj.png" width="20"></div>
            <div><span class="d-block fs-12">Your order</span><span class="font-weight-bold text-success">Confirmed</span></div>
        </div>
        <!-- <hr> -->
        <?php
          // $cart_query = mysqli_query($con, "SELECT * FROM `marketplace_cart`");
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
        ?>
        <hr>
        <div class="d-flex justify-content-between align-items-center product-details">
            <div class="d-flex flex-row product-name-image"><img class="rounded" src="<?php echo $product_item['product_image']; ?>" width="80">
              <div class="d-flex flex-column justify-content-between ml-2">
                    <div>
                      <span class="d-block font-weight-bold p-name"><?php echo $product_item['product_name']; ?></span>
                      <span class="fs-12">$<?php echo $product_item['product_new_price']; ?></span>
                    </div>
                    <span class="fs-12">Qty:&nbsp;<?php echo $product_item['product_quantity']; ?></span>
                </div>
            </div>
            <div class="product-price">
                <h5>$<?php echo $product_price; ?></h5>
            </div>
        </div>
        <?php
            }
          }
        ?>
        <hr>
        <div class="mt-5 amount row">
                        <div class="d-flex justify-content-center col-md-6">
                          <h5 class="bank-name text-muted">Payment via <?php echo $customer_detail['cc_name']; ?></h5>
                        </div>
            <div class="col-md-6 pay-detail">
                <div class="billing">
                    <div class="d-flex justify-content-between"><span>Subtotal</span><span class="font-weight-bold">$<?php echo $total; ?></span></div>
                        <div class="d-flex justify-content-between mt-2"><span>Shipping fee</span><span class="font-weight-bold">$10</span></div>
                        <div class="d-flex justify-content-between mt-2"><span>Tax</span><span class="font-weight-bold">$<?php echo number_format($tax,2); ?></span></div>
                        <!-- <div class="d-flex justify-content-between mt-2"><span class="text-success">Discount</span><span class="font-weight-bold text-success">$5</span></div> -->
                        <hr>
                        <div class="d-flex justify-content-between mt-1"><span class="font-weight-bold">Total - Incl. taxes (RM)</span><span class="font-weight-bold text-success">$<?php echo $price_total; ?></span></div>
                    </div>
                </div>
            </div>
            <?php
              }
            }
            ?>
            <br>
            <center><span class="d-block mt-3 text-black-50 fs-15">We will ship it to you order as soon as possible!</span></center>
            <hr>
            <div class="d-flex justify-content-between align-items-center footer">
                <div class="thanks"><span class="d-block font-weight-bold">Thanks for shopping</span><span>Barking Lot team</span></div>
                <div class="d-flex flex-column justify-content-end align-items-end"><span class="d-block font-weight-bold">Need Help?</span><span><a href="mailto: barkinglot@gmail.com">barkinglot@gmail.com</a></span></div>
            </div>
    </div>
</body>
</html>
