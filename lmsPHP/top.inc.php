<?php
require('db.inc.php');
if(!isset($_SESSION['ROLE'])){
	header('location:login.php');
	die();
}
?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Dashboard Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <style>
   .navbar_header {
      display: flex;
      align-items: left;
      justify-content: left; /* Add this line to horizontally align the content */
      padding-top: 0px; /* Adjust the padding top value as per your requirement */
      padding-bottom: 55px; /* Adjust the padding bottom value as per your requirement */
      width: 250px;
   }
   
   .navbar_header img {
      margin-top: -8.5px; /* Adjust the margin top value as per your requirement */
   }



   .menutoggle{
      margin-bottom: 35px;
   }
   </style>
   <body>
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">Menu</li>
                  <?php if($_SESSION['ROLE']==1){ ?>
				  <li class="menu-item-has-children dropdown">
                     <a href="index.php" > Type of Housing Reside</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="leave_type.php" > Reasons of Adopt Pets</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="employee.php" > Edit Member(s)</a>
                  </li>

				  <?php } else { ?>
				  <li class="menu-item-has-children dropdown">
                     <a href="add_employee.php?id=<?php echo $_SESSION['USER_ID']?>" > Profile</a>
                  </li>
				  <?php } ?>
				   <li class="menu-item-has-children dropdown">
                     <a href="leave.php" >Check Adopt Pet Application</a>
                  </li>
               <li class="menu-item-has-children dropdown">
                     <a href="appointment.php" >Check Adopt Pet Appointment</a>
                  </li>
               </ul>
            </div>
         </nav>
      </aside>
   <!--    BARKING LOT PET ADOPTION APPLICATION SYSTEM (BLPAAS) -->
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar_header">
                  <a class="navbar-brand" href="index.php"><img src="images/BLPAAS.png" alt="Logo"></a>
                  <a class="navbar-brand hidden" href="index.php"><img src="images/BLPAAS2.png" alt="Logo"></a>

                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome <?php echo $_SESSION['USER_NAME']?></a>
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                     </div>
                  </div>
               </div>
            </div>
         </header>