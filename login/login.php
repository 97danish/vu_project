<!DOCTYPE html>
<?php 
	session_start(); ?>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../img/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css"> -->
<!--===============================================================================================-->	
	<!-- <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css"> -->
<!--===============================================================================================-->	
	<!-- <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css"> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

				<form method="POST" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					<span class="login100-form-title">
						<a href="../index.php"><img src="../img/logo-1.png" style="width: 10%;"></a>
						<h2>Login</h2>
					</span>
					<br>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">
						<input class="input100" type="text" name="email" placeholder="email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					<br>
					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<select name="type" style="padding: 15px; border-radius: 50px; width: 100%;">
							<option>Select Option</option>
							<option value="doctor">Doctor</option>
							<option value="patient">Patient</option>
						</select>
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" name="submit" class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="../choose.php" class="txt3">
							Sign up now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<!-- <script src="vendor/animsition/js/animsition.min.js"></script> -->
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

<?php 
	require '../connection.php';
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$type = $_POST['type'];
		
		if($type == 'doctor'){		
			$validate_query = "SELECT * from doctor where doc_email='$email' and doc_password ='$password' ";
	        $result = mysqli_query($con, $validate_query);
	        $count = mysqli_num_rows($result) or die(mysqli_error($con)) ;
		}
		else if($type == 'patient'){
			$validate_query = "SELECT * from patient where pat_email='$email' and pat_password ='$password' ";
	        $result = mysqli_query($con, $validate_query);
	        $count = mysqli_num_rows($result) or die(mysqli_error($con)) ;
		}
		else{
			$validate_query = "SELECT * from admin where admin_email='$email' and admin_password ='$password' ";
			$result = mysqli_query($con, $validate_query);
	        $count = mysqli_num_rows($result) or die(mysqli_error($con)) ;
		}

        if($count == 1){
        	if($type == 'doctor'){
        		$_SESSION['doctor'] = mysqli_fetch_assoc($result);
	            echo "<script>window.location='../index.php'</script>";
        	}
        	else if($type == 'patient'){
        		$_SESSION['patient'] = mysqli_fetch_assoc($result);
	            echo "<script>window.location='../index.php'</script>";
        	}
        	else{
        		$_SESSION['admin'] = mysqli_fetch_assoc($result);
	            echo "<script>window.location='../admin/admin.php'</script>";
        	}    	
        }
        else{
			echo "ERROR: "+mysqli_error($con);
		}		
	}
 ?>
