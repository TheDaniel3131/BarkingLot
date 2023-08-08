<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../tabicon/icon.webp">
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  	<!-- poppins -->
  	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
	<!-- ubuntu -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Ubuntu&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Rubik:wght@600&family=Ubuntu&display=swap" rel="stylesheet">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="../adminmain2.css">

	<title>Update User Database | Barking Lot</title>
</head>
<style>
			/*preloader*/

		#preloader{
			background: #000000 url('../load/admin.gif') no-repeat center center;
			background-size: 5%;

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
			  <a class="navbar-brand navbar-nav ml-auto" href="../adminindex.php">Barking Lot</a>
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
			        <a class="nav-link" href="../admindashboard.php">Dashboard</a>
			      </li>
			      <li class="nav-item active">
			          <a class="nav-link" href="admindatabase.php">DBMS</a>
			      </li>
			      <li class="nav-item active">
			          <a class="nav-link" href="../lmsPHP/login.php">Pet Adopt Applications</a>
			      </li>			 
			      <li class="nav-item active">
			          <a class="nav-link" href="../eventmanagementsystem/admin/index.php?page=home">Events & Promotions</a>
			      </li>	    
			      <li class="nav-item">
			        <a class="nav-link" href="index.html">Logout</a>
			      </li>
			    </ul>
			    <h4 style="color:aqua; font-size:160%;">
		          Welcome,
		          <strong style="color:yellow; ;">
		              <?php echo $_SESSION['username']; ?>
		          </strong>
				</h4>
			  </div>
			</div>
		</nav>
	</header>
	<br><br><br>
	<!-- update and delete registration database-->
	<section class="p-4">
	<br>
    <div class="container">
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
                        <h4><center>Updating User Details Based on User Requests</center></h4>
                    </div>
                    <br><br>
                    <div class="card-body">
                        <form action="update.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="">User ID</label>
                                <input type="number" name="user_id" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Username</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <button onclick="myConfirm()" type="submit" name="update_user_details" class="btn btn-primary" style="top:-50px;">Update Data</button>
                              	&nbsp; &nbsp;
                            <a style="font-family: Poppins;"href="admindatabase.php" class="btn btn-danger"> Back </a>
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


    <!--preloader time duration adjustment-->
    <iframe width="0" height="0" src="https://www.youtube.com/embed/H8vh29F1Ozs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe width="0" height="0" src="https://www.youtube.com/embed/H8vh29F1Ozs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


	<!--preloader javascript-->
	<script>
		//preloader javascript
		var loader = document.getElementById("preloader");

		window.addEventListener("load",function(){
			loader.style.display="none";

		})
	</script>	

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>