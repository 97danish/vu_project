<?php require 'header.php' ?>
<?php $display = 'none'; ?>
 <!--================ Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-left">
                    <h2>Contact Us</h2>
                    <div class="page_link">
                        <a href="index.php">Home</a>
                        <a href="contact.php">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->


 <!--================Contact Area =================-->
    <section class="contact_area p_120">
        <div class="container">
            <div id="mapBox" class="mapBox">
            	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d435518.68178038835!2d74.05419780276763!3d31.483220875700606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore%2C+Punjab%2C+Pakistan!5e0!3m2!1sen!2s!4v1561738549152!5m2!1sen!2s" width="1140" height="420" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>California, United States</h6>
                            <p>Santa monica bullevard</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6>
                                <a href="#">00 (440) 9865 562</a>
                            </h6>
                            <p>Mon to Fri 9am to 6 pm</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6>
                                <a href="#">support@colorlib.com</a>
                            </h6>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="row contact_form" method="post" id="contactForm">
                        <div class="col-md-6">
                            <div class="form-group"> 
                                <input type="text" class="form-control" id="name" name="name" pattern="[a-zA-Z]{3,15}" placeholder="Enter your name" required='required'>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" pattern="[a-zA-Z0-9\.\-_]+@[a-zA-Z]+\.[a-zA-Z\.]{3,6}"  required='required'  placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" pattern="[a-zA-Z]{3,15}" placeholder="Enter Subject"  required='required'>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"  required='required'></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" name="send" class="btn submit_btn">Send Message</button>
                        </div>
                        <div class="col-md-12 text-right" style="display: <?php echo $display; ?>;"><br>
	                        <p style="background-color: green; padding: 15px; color: white; text-align: center;">Successfully Sent!</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
 <!--================Contact Area =================-->


<?php require 'footer.php' ?>
<?php require 'connection.php' ?>
<?php if(isset($_POST['send'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$result = mysqli_query($con, "INSERT into contact(con_name, con_email, con_subject, con_message) VALUES('$name', '$email', '$subject', '$message')") or die(mysqli_error($con));
	if($result){
		$display = 'block';
	}
} ?>