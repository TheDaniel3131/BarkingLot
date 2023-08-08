<?php
 
// Starting the session, to use and
// store data in session variable
session_start();
  
// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: registerlogin/login.php');
}

  
// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after logging out
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.html");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="tabicon/icon.webp">	
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	 <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>

	<!-- My CSS -->
	<link rel="stylesheet" href="admindashboard/style.css">

	<title>Admin Dashboard | Barking Lot</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
<!-- 			<i class='bx bxs-smile'></i> -->
			<i class="bx" style="    -webkit-filter: invert(50%);
    filter: invert(50%);"><box-icon type='solid' name='dog'></box-icon></i>
			<span class="text">AdminBL</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="admindashboard.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="adminindex.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Main Homepage</span>
				</a>
			</li>
			<li>
				<a href="admintools/admindatabase.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">DBMS</span>
				</a>
			</li>
			<li>
				<a href="http://localhost/sdp_dev/lmsPHP/login.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Pet Adopt Application</span>
				</a>
			</li>
			<li>
				<a href="eventmanagementsystem/admin/index.php?page=booking">
					<i class='bx bxs-group' ></i>
					<span class="text">Event & Promotion</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
<!-- 			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li> -->
			<li>
				<a href="index.html" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
<!-- 			<a href="#" class="nav-link">Categories</a> -->
<!-- 			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>

				</div>
			</form> -->
<!-- 			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label> -->

			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">0</span>
			</a>
			<a href="#" class="profile">
				<img src="admindashboard/img/people_elonmusk.jpg">
			</a>
		</nav>
		<!-- NAVBAR -->



		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
<!-- 						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li> -->
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				
					<a href="#"  class="btn-download" onclick="print('../BLReport_August2022.pdf')">
						<i class='bx bxs-cloud-download' ></i>
						<span class="text">Download Report</span>
					</a>
				</button>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check'></i>
					<span class="text">
						<h3>55</h3>
						<p>Pet Owners</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>100</h3>
						<p>Users</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$350</h3>
						<p>Total Sales (Marketplace)</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Registered Users</h3>
<!-- 						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i> -->
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>Join Date</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="admindashboard/img/jackinfu.jpg">
									<p>Jackin Fu</p>
								</td>
								<td>21-08-2022</td>
								<td><span class="status completed">Offline</span></td>
							</tr>
							<tr>
								<td>
									<img src="admindashboard/img/danielpoh.jpg">
									<p>Daniel Poh</p>
								</td>
								<td>20-08-2022</td>
								<td><span class="status completed">Online</span></td>
							</tr>
							<tr>
								<td>
									<img src="admindashboard/img/wongjiajoe.jpg">
									<p>Wong Jia Joe</p>
								</td>
								<td>19-08-2022</td>
								<td><span class="status pending">Busy</span></td>
							</tr>
							<tr>
								<td>
									<img src="admindashboard/img/kiayi.webp">
									<p>Kia Yi Gor Gor</p>
								</td>
								<td>18-08-2022</td>
								<td><span class="status process">Away</span></td>
							</tr>
							<tr>
								<td>
									<img src="admindashboard/img/yonghui.webp">
									<p>Yong Hui (Andrew Tate Bro)</p>
								</td>
								<td>17-08-2022</td>
								<td><span class="status pending">Meeting</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>To Do List</h3>
				<!-- 		<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i> -->
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Important Meeting on 18/8/2022, 8:30 PM.</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Important Meeting on 20/8/2022,10:00 AM.</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Important Meeting on 22/8/2022, 12:00 PM.</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Important Meeting on 24/8/2022, 2:30 PM.</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Important Meeting on 26/8/2022, 3:30 PM.</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="admindashboard/script.js"></script>
</body>
</html>