<!doctype html>
<html lang="en">
<?php 
	session_start(); ?>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Online Doctor Search and Appointment System</title>
	<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>

<body>
<!--================Header Menu Area =================-->
	<?php 
	if(!empty($_SESSION['doctor']) || !empty($_SESSION['patient'])){
		echo '<header class="header_area">
		<div class="top_menu row m0">
			<div class="container">
				<div class="float-left">
					<ul class="left_side">
						<li>
							<a href="#">
								<i class="fa fa-facebook-f"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-dribbble"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-behance"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="float-right">
				';
				if(!empty($_SESSION['doctor'])){
					echo '<ul class="right_side">
						<li>
						<a href="admin/doctor.php"><img src=img/doctor/'.($_SESSION['doctor']['doc_image']).' height="20px" width="20px" style="margin: 3%;">
						</li>
						<li>'.strtoupper($_SESSION['doctor']['doc_firstname']).' '.strtoupper($_SESSION['doctor']['doc_lastname']).'</li>
					</ul>';
				}
				else
				{
					echo '<ul class="right_side">
						<li>
						<a href="admin/pat_profile.php"><img src=img/patient/'.($_SESSION['patient']['pat_image']).' height="20px" width="20px" style="margin: 3%;">
						</li>
						<li>'.strtoupper($_SESSION['patient']['pat_firstname']).' '.strtoupper($_SESSION['patient']['pat_lastname']).'</li>
					</ul>';
				}	
			echo 	'</div>
			</div>
		</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php">
						<img src="img/favicon.png" alt=""><span style="margin-left: 10px;"> <b style="color: black;">Online Doctor Search and Appointment System</b></span>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row ml-0 w-100">
							<div class="col-lg-12 pr-0">
								<ul class="nav navbar-nav center_nav pull-right">
									<li class="nav-item active">
										<a class="nav-link" href="index.php">Home</a>
									</li>
									<li class="nav-item ">
										<a class="nav-link" href="doctors.php">Doctors</a>
									</li>';
									if(!empty($_SESSION['doctor'])){
										echo '<li class="nav-item ">
											<a class="nav-link" href="patients.php">Patients</a>
										</li>';
									}
								echo '<li class="nav-item ">
										<a class="nav-link" href="contact.php">Contact</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="logout.php">Logout</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>';
	}
	else{
		echo '<header class="header_area">
		<div class="top_menu row m0">
			<div class="container">
				<div class="float-left">
					<ul class="left_side">
						<li>
							<a href="#">
								<i class="fa fa-facebook-f"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-dribbble"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-behance"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="float-right">
					<ul class="right_side">
						<li>
							<a href="#">
								<i class="lnr lnr-phone-handset"></i>
								012-6532-568-9746
							</a>
						</li>
						<li>
							<a href="#">
								<i class="lnr lnr-envelope"></i>
								hospice@gmail.com
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html">
						<img src="img/logo-1.png" alt=""><span style="margin-left: 10px;"> <b style="color: black;">Online Doctor Search and Appointment System</b></span>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row ml-0 w-100">
							<div class="col-lg-12 pr-0">
								<ul class="nav navbar-nav center_nav pull-right">
									<li class="nav-item active">
										<a class="nav-link" href="index.php">Home</a>
									</li>
									<li class="nav-item ">
										<a class="nav-link" href="doctors.php">Doctors</a>
									</li>
									<li class="nav-item ">
										<a class="nav-link" href="contact.php">Contact</a>
									</li>

									<li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sign Up</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="register/doc_register.php">Doctor</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="register/pat_register.php">Patient</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="login/login.php">Login</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>';
	}
	?>
	<!--================Header Menu Area =================-->
