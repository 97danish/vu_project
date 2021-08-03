<?php require 'header.php' ?>

<!--================ Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-left">
                    <h2>Patients</h2>
                    <div class="page_link">
                        <a href="index.php">Home</a>
                        <a href="patients.php">Patients</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->
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
				$result = mysqli_query($con, "SELECT * from patient"); 
				while($patient = mysqli_fetch_assoc($result)){?>
				<div class="col-lg-3 col-md-6 single-team mb-50">
					<div class="thumb">
						<img class="img-fluid" src="img/patient/<?php echo $patient['pat_image'] ?>" style="height: 279px" alt=""></a>
						<div class="align-items-end justify-content-center d-flex">
							<div class="social-links">
								<a href="patient_page.php?pat_id=<?php echo $patient['pat_id'] ?>" style="width: 80%;">Patient's Profile</a>
							</div>
							<p>
								<?php echo $patient['pat_city'] ?>
							</p>
							<h4><?php echo $patient['pat_firstname'].' '.$patient['pat_lastname'] ?></h4>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<!-- End team Area -->

<?php require 'footer.php' ?>