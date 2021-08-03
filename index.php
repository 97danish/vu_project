
<?php require 'header.php'; ?>
<!--================ Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content row">
					<div class="col-lg-12">
						<h1>We Care for Your Health Every Moment</h1>
						<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price You may see some
							for as low as each.</p>
						<a class="main_btn mr-10" href="#">get started</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

<!-- Start Offered Services Area -->
	<section class="service_area section_gap">
		<div class="container">
			<div class="row justify-content-center section-title-wrap">
				<div class="col-lg-12">
					<h1>Our Offered Services</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-6 mb-60">
					<div class="single_service">
						<span class="lnr lnr-rocket"></span>
						<a href="#">
							<h4>24/7 Emergency</h4>
						</a>
						<p>
							inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mb-60">
					<div class="single_service">
						<span class="lnr lnr-heart-pulse"></span>
						<a href="#">
							<h4>Expert Consultation</h4>
						</a>
						<p>
							inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mb-60">
					<div class="single_service">
						<span class="lnr lnr-bug"></span>
						<a href="#">
							<h4>Intensive Care</h4>
						</a>
						<p>
							inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mb-60">
					<div class="single_service">
						<span class="lnr lnr-users"></span>
						<a href="#">
							<h4>Family Planning</h4>
						</a>
						<p>
							inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_service">
						<span class="lnr lnr-rocket"></span>
						<a href="#">
							<h4>24/7 Emergency</h4>
						</a>
						<p>
							inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_service">
						<span class="lnr lnr-heart-pulse"></span>
						<a href="#">
							<h4>Expert Consultation</h4>
						</a>
						<p>
							inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_service">
						<span class="lnr lnr-bug"></span>
						<a href="#">
							<h4>Intensive Care</h4>
						</a>
						<p>
							inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_service">
						<span class="lnr lnr-users"></span>
						<a href="#">
							<h4>Family Planning</h4>
						</a>
						<p>
							inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Offered Services Area -->

	
	<!-- Start team Area -->
	<section class="team-area section_gap">
		<div class="container">
			<div class="row justify-content-center section-title-wrap">
				<div class="col-lg-12">
					<h1>Our Offered Services</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</p>
				</div>
			</div>

			<div class="row justify-content-center d-flex align-items-center">
				<?php require 'connection.php';
				$result = mysqli_query($con, "SELECT * from doctor"); 
				while($doctor = mysqli_fetch_assoc($result)){?>
				<div class="col-lg-3 col-md-6 single-team mb-50">
					<div class="thumb">
						<img class="img-fluid" src="img/doctor/<?php echo $doctor['doc_image'] ?>" alt=""></a>
						<div class="align-items-end justify-content-center d-flex">
							<div class="social-links">
								<a href="doctor_page.php?doc_id=<?php echo $doctor['doc_id'] ?>" style="width: 80%;">Doctor's Profile</a>
							</div>
							<p>
								<?php echo $doctor['doc_specialist'] ?>
							</p>
							<h4><?php echo $doctor['doc_firstname'].' '.$doctor['doc_lastname'] ?></h4>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<!-- End team Area -->


<?php require 'footer.php'; ?>