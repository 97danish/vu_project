<?php require 'header.php'; ?>
<?php  require 'connection.php';
$doc_id = $_GET['doc_id'];
$result = mysqli_query($con, "SELECT * from doctor where doc_id = '$doc_id'") or die(mysql_error($con));
$cur_doctor = mysqli_fetch_assoc($result);?>

<!--================ Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-left">
					<h2><?php echo  'Dr. '.ucfirst($cur_doctor['doc_firstname'])."'s" ?> Profile</h2>
					<div class="page_link">
						<a href="index.php">Home</a>
						<a href="doctor_page.php">Doctor Profile</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Banner Area =================-->

	<!--================ About Myself Area =================-->
	<section class="about_myself section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 pr-0">
					<div class="about_img">
						<img class="img-fluid w-100" src="img/doctor/<?php echo $cur_doctor['doc_image'] ?>" alt="">
					</div>
				</div>

				<div class="col-lg-6 pl-0">
					<div class="about_box">
						<div class="section-title-wrap text-left">
							<h1>About Doctor</h1>
							<p>
								nappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the
								workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.
							</p>
						</div>

						<li style="font-weight: bold;"><?php echo ucfirst($cur_doctor['doc_specialist']) ?> Specialist</li>
						<li style="font-weight: bold;"><?php echo ucfirst($cur_doctor['doc_qualification']) ?> Qualification</li>
						<li style="font-weight: bold;"><?php echo ucfirst($cur_doctor['doc_experience']) ?> Experience</li>
						<li style="font-weight: bold;"></span><?php echo ucfirst($cur_doctor['doc_city']) ?> </li>
						<a href="chat_page_patient.php?doc_id=<?php echo $cur_doctor['doc_id'] ?>" style="font-size: 1em;"><i class="fas fa-comments" style="font-size: 2em; color: #3FACE4"></i> Chat with the Dr. <?php echo ucfirst($cur_doctor['doc_firstname']) ?></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End About Myself Area =================-->

<!-- Start Appointment Area -->
	<section class="appointment-area">
		<div class="container">
			<div class="row justify-content-between align-items-center appointment-wrap">
				<div class="col-lg-5 col-md-6 appointment-left">
					<h1>Servicing Hours</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<ul class="time-list">
						<?php $service_hours = mysqli_query($con, "SELECT * from service_hours where ser_doc_id = ".$cur_doctor['doc_id']."") or die(mysqli_error($con));
						while($row = mysqli_fetch_assoc($service_hours)){ ?>
						<li class="d-flex justify-content-between">
							<span><?php echo $row['ser_day'] ?></span>
							<span><?php echo $row['ser_starttime'] ?> am - <?php echo $row['ser_endtime'] ?> pm</span>
						</li>
						<?php } ?>
					</ul>
				</div>
				<div class="col-lg-6 col-md-6 pt-60 pb-60">
					<div class="appointment-right">
						<form class="form-wrap" method="post">
							<h3 class="pb-20 text-center mb-20">Book an Appointment</h3>
							
							<input id="" class="form-control" placeholder="Disease type" type="text" name="app_disease">
							<div class="form-select" id="service-select">
								<select name="slot">
									<option data-display="">Time Slot</option>	
								<?php $service_hours = mysqli_query($con, "SELECT * from service_hours where ser_doc_id = ".$cur_doctor['doc_id']."") or die(mysqli_error($con));
								while($row = mysqli_fetch_assoc($service_hours)){ ?>
									<option value="<?php echo $row['ser_id'] ?>">	
										<li class="d-flex justify-content-between">
											<span><?php echo $row['ser_day'] ?></span>
											<span><?php echo $row['ser_starttime'] ?> am - <?php echo $row['ser_endtime'] ?> pm</span>
										</li>
									</option>
								<?php } ?>
								</select>
							</div>

							<div class="form-select" id="service-select">
								<select name="app_clinic">
									<option data-display="">Clinic</option>	
								<?php $clinic = mysqli_query($con, "SELECT * from clinic") or die(mysqli_error($con));
								while($row = mysqli_fetch_assoc($clinic)){ ?>
									<option value="<?php echo $row['clinic_id'] ?>">	
										<li class="d-flex justify-content-between">
											<span><?php echo $row['clinic_name'] ?></span>
											<span><?php echo $row['clinic_city'] ?></span>
										</li>
									</option>
								<?php } ?>
								</select>
							</div>

							<label>Appointment Date</label>
							<input id="datepicker2" class="dates form-control" placeholder="appointment Date" type="date" name="app_date">
							<input id="" class="form-control" placeholder="Fees" type="text" name="app_fee">
							<textarea name="message" class="" rows="5" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
							<div class="text-center">
								<button class="main_btn text-uppercase" type="submit" name="book">Confirm Booking</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Appointment Area -->
<!-- Start Feedback Area -->
	<section class="feedback_area section_gap relative">
		<div class="container">
			<div class="row justify-content-center section-title-wrap">
				<div class="col-lg-12">
					<h1>Enjoy our Client’s Feedback</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</p>
				</div>
			</div>

			<div class="feedback_contents justify-content-center align-items-center">
				<div class="active-review-carusel owl-carousel">
				<?php 
				$result = mysqli_query($con, "SELECT * from feedback") or die(mysqli_error($con));
				while($row = mysqli_fetch_assoc($result)){
					$doctor = mysqli_query($con, "SELECT * from doctor where doc_id = ".$row['rev_doc_id']."") or die(mysqli_error($con));
					$doctor = mysqli_fetch_assoc($doctor);
					$patient = mysqli_query($con, "SELECT * from patient where pat_id = ".$row['rev_pat_id']."") or die(mysqli_error($con));
					$patient = mysqli_fetch_assoc($patient);

				?>
					<div class="row">
						<div class="col-lg-6">
							<img src="img/patient/<?php echo $patient['pat_image'] ?>" alt="">
						</div>

						<div class="col-lg-6">
							<div class="single-feedback-carusel">
								<div class="d-flex flex-row">
									<h4 class=""><?php echo $patient['pat_firstname']; ?></h4>
									<div class="star">
									<?php for($i=1;$i<=5;$i++){
										if($i<=$row['rev_rating']){?>
										<span class="fa fa-star checked"></span>
									<?php 
										}
										else{?>
										<span class="fa fa-star"></span>
									<?php
										}
									}?>
									</div>
								</div>
								<p class=""><?php echo $row['rev_comment'] ?></p>
							</div>
						</div>
					</div>
				<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<!-- End Feedback Area -->

<?php require 'footer.php'; ?>

<?php if(isset($_POST['book'])){
	if(!empty($_SESSION['patient'])){
		$slot = $_POST['slot'];
		$disease = $_POST['app_disease'];
		$app_date = $_POST['app_date'];
		$clinic = $_POST['app_clinic'];
		$fee = $_POST['app_fee'];
		$message = $_POST['message'];

            $validate_query = "SELECT * from appointment where app_slot='$slot'";
            $result = mysqli_query($con, $validate_query);
            $count = mysqli_num_rows($result);
        if($count==0){
			mysqli_query($con, "INSERT into appointment(app_pat, app_doc, app_disease, app_date, app_slot, app_clinic, app_fee, app_message) VALUES(".$_SESSION['patient']['pat_id'].", '$doc_id', '$disease', '$app_date', '$slot', '$clinic','$fee', '$message')") or die(mysqli_error($con));
			$fetch = mysqli_query($con, "SELECT * from doctor where doc_id = ".$cur_doctor['doc_id']."");
			$fetch = mysqli_fetch_assoc($fetch);
			$fetch['doc_earning']+=$fee;
			mysqli_query($con, "UPDATE doctor set doc_earning = ".$fetch['doc_earning']." where doc_id = ".$cur_doctor['doc_id']."");
        }
        else{
            echo "This Appointment is already exists!";
        }
	}
	else{
		echo "You need to login";
	}
} ?>