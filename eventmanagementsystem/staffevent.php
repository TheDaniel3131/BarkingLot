<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="icon" href="../tabicon/icon.webp">  
  <link rel="stylesheet" href="../eventpromotion.css">
    <?php
    session_start();
    include('admin/db_connect.php');
    // ob_start();
    //     $query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
    //      foreach ($query as $key => $value) {
    //       if(!is_numeric($key))
    //         $_SESSION['system'][$key] = $value;
    //     }
    // ob_end_flush();
    include('header.php');


    
    ?>
  </head>
    <style>
        header.masthead {
/*        background: url(admin/assets/uploads/<?php echo $_SESSION['system']['cover_img'] ?>);
          background-repeat: no-repeat;
          background-size: cover;*/
        }
    
  #viewer_modal .btn-close {
    position: absolute;
    z-index: 999999;
    /*right: -4.5em;*/
    background: unset;
    color: white;
    border: unset;
    font-size: 27px;
    top: 0;
}
#viewer_modal .modal-dialog {
        width: 80%;
    max-width: unset;
    height: calc(90%);
    max-height: unset;
}
  #viewer_modal .modal-content {
       background: black;
    border: unset;
    height: calc(100%);
    display: flex;
    align-items: center;
    justify-content: center;
  }
  #viewer_modal img,#viewer_modal video{
    max-height: calc(100%);
    max-width: calc(100%);
  }
  body, footer {
    background: #000000e6 !important;
}
 
    </style>
    <body id="page-top">
        <!-- Navigation-->
        <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body text-white">
        </div>
      </div>
<!--         <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="./"><?php echo $_SESSION['system']['name'] ?></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=home">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=venue">Venues</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=about">About</a></li>
                        
                     
                    </ul>
                </div>
            </div>
        </nav> -->
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
              <a class="nav-link" href="./index.html">Home <span class="sr-only"></span></a>
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
                <a class="dropdown-item" href="services/marketplace.html">Marketplace</a>
                <a class="dropdown-item" href="services/contactus.php">Contact Us</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Coming Soon!</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Others</a>

              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="eventmanagementsystem/index.php?page=staffvenue">Events & Promotions</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item disabled" href="#"><u>Coming Soon!</u></a>
                <a class="dropdown-item disabled" href="./funds.html">Funds</a>
                <a class="dropdown-item disabled" href="./funds.html">Volunteer</a>
                <a class="dropdown-item disabled" href="./funds.html">Surrender</a>
              </div>    
            <li class="nav-item">
              <a class="nav-link" href="registerlogin/login.php">Login</a>
            </li>
          </ul>
<!--          <ul class="navbar-nav nav-item ml-auto mb-2 mb-lg-0">
           <button class="btn" style="text-align: center;">Donate Now!</button>
         </ul> -->
        </div>
      </div>
    </nav>
  </header>
        <?php 
        $page = isset($_GET['page']) ?$_GET['page'] : "home";
        include $page.'.php';
        ?>
       

<div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal_right" role='dialog'>
    <div class="modal-dialog modal-full-height  modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fa fa-arrow-right"></span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="viewer_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
              <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
              <img src="" alt="">
      </div>
    </div>
  </div>
  <div id="preloader"></div>

        
       <?php include('footer.php') ?>
    </body>

    <?php $conn->close() ?>

</html>
