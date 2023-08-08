<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../tabicon/icon.webp">	
	<title>Database Management | Barking Lot</title>
	<!-- Local CSS -->
	<link rel="stylesheet" href="barkinglotcss.css">
	<!-- Bootstrap | CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<!-- Font Awesome V4.0 | CSS -->

	<!-- these two below no longer works-->
<!-- 	<link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
	<!--Font Awesome V5.0 | JS-->
	<script src="https://kit.fontawesome.com/5a3777daa8.js" crossorigin="anonymous"></script>

	<!--W3SCHOOLS button | CSS-->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<!-- Footer1 CSS-->
<!-- 	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet"> -->
	
<!-- 	<link rel="stylesheet" href="footer1/css/ionicons.min.css">
	<link rel="stylesheet" href="footer1/css/style.css"> -->

	<!-- External CSS-->

	<link rel="stylesheet" href="footer.css">
	<link rel="stylesheet" href="../adminmain.css">

	<!-- Local Internal CSS -->
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
			        <a class="nav-link" href="../adminindex.php">Home <span class="sr-only"></span></a>
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
			          <a class="nav-link" href="../eventmanagementsystem/admin/index.php?page=home" target="_blank">Events & Promotions</a>
			      </li>	     
			      <li class="nav-item">
			        <a class="nav-link" href="../index.html">Logout</a>
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

<!-- 


	<section class="space1 bg-light bg-gradient">
		<div>
		</div>
	</section> -->

	<!-- update and delete registration database-->
	<section class=" p-4">
	<br>
    <div class="container">
        <div class="row justify-content-center">
    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div>
                	<br><br><br>
                    <h4 style="color: #fff; font-size: 50px; text-decoration: underline;">
                    	<center>User Database Management System</center>
                    	<a href="insertnewuser.php" target="_blank" class="btn btn-success" style="margin-left: 85%; font-family:Poppins; position: relative;"> Insert New User</a>    
	              	</h4>
	                <div class="col-md-6">
	             
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>

            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'sdp_petadoptionsys');

                $query = "SELECT * FROM users_information";
                $query_run = mysqli_query($connection, $query);
            ?>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered" style="background-color: white;">
                        <thead class="table-dark">
                            <tr>
                                <th> ID </th>
                                <th> Username </th>
                                <th> Email</th>
                                <th> Password </th>
                                <th> Edit </th>
                                <th> Delete </th>
                            </tr>
                        </thead>
                        <tbody>
                                        
                        <?php
                        if($query_run)
                        {
                            while($row = mysqli_fetch_array($query_run))
                            {
                                ?> &nbsp;
                                    <tr>
                                        <th> <?php echo $row['id']; ?> </th>
                                        <th> <?php echo $row['username']; ?> </th>
                                        <th> <?php echo $row['email']; ?> </th>
                                        <th> <?php echo $row['password']; ?> </th>
                                        <th> 
                                            <form action="updatedatabase.php" method="post" target="_blank">
                                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                                <input style="font-family: Poppins;" type="submit" name="edit" class="btn btn-success" value="Edit">
                                            </form>
                                        </th>
                                        <th> 
                                            <form action="delete.php" method="post" onclick="myConfirm()">
                                                <input style="font-family: Poppins;" type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                                <input style="font-family: Poppins;" type="submit" name="delete" class="btn btn-danger" value="Delete"> 
                                            </form>
                                        </th>
                                    </tr>
                                <?php
                                }
                            }
                            else
                            {
                                ?>
                                    <tr>    
                                        <th colspan="6"> No Record Found </th>
                                    </th>
                                <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <br><br><br><br><br><br>



	<!--preloader time duration adjustment-->
	<iframe width="0" height="0" src="https://www.youtube.com/embed/H8vh29F1Ozs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<iframe width="0" height="0" src="https://www.youtube.com/embed/H8vh29F1Ozs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <!-- CONFIRMATION MESSAGE()-->

    <script>
        function myConfirm() {
        let confirmAction = confirm("Are you sure to execute this action?");
        // console.log(confirmAction); // OK = true, Cancel = false

        if (confirmAction == true) {
          confirm("Action successfully executed");
        } else if (confirmAction == false) {
          alert("Your Action is Cancelled");
          event.preventDefault();

        }

  //       if (confirm('Are you sure you want to save this thing into the database?')) {
		//   // Save it!
		//   console.log('Thing was saved to the database.');
		// } else {
		//   // Do nothing!
		//   console.log('Thing was not saved to the database.');
		// }
      }
    </script>

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