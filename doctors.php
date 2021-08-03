<?php require 'header.php' ?>

<!--================ Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-left">
                    <h2>Doctors</h2>
                    <div class="page_link">
                        <a href="index.php">Home</a>
                        <a href="doctors.php">Doctors</a>
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
					<h1>Search for Doctor</h1>
					<p>Here you can search for your doctor</p>
				</div>
			</div>

			<div class="row justify-content-center d-flex align-items-center search_section">
				<form action="" method="post">
			        <input type="text" placeholder="Search" name="search">
			        <button type="submit" name="search">Search</button>
			    </form>
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

<?php require 'footer.php' ?>