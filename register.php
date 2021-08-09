<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Register</title>
</head>
<?php require 'connection.php'; ?>
<body>

  <div class="container">
    <div class="clearfix"></div>
    <div class="" style="width: 25%; margin: auto;">
        <a href="index.php" class="web_title"><img src="img/logo-1.png" style=" width: 20%; margin: auto;">PORTAL</a>
    </div>
    <div class="main register">
      <p class="heading" align="center">Register</p>
      <form method="post">

        <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name" required="yes" pattern="[a-zA-Z ]+" minlength="3" maxlength="100" title="Must be at least 3 to 100 characters in length and only consist of alphabets">
              </div>
              <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name" required="yes" pattern="[a-zA-Z ]+" minlength="3" maxlength="100" title="Must be at least 3 to 100 characters in length and only consist of alphabets">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="phone_number" placeholder="Enter phone" required="yes" pattern="[0-9]+"  minlength="11" maxlength="11" title="Must be 11 digit characters in length">
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="yes" pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required="yes" placeholder="Password" minlength="8" maxlength="20" title="Must be 8 to 20 characters in length">
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="qualification">Qualification</label>
                <input type="text" class="form-control" id="qualification" name="qualification" placeholder="Enter qualification" required="yes" pattern="[a-zA-Z ]+" minlength="3" maxlength="100" title="Must be at least 3 to 100 characters in length and only consist of alphabets">
              </div>
              <div class="form-group">
                <label for="availability">Availability Days</label>
                <input type="number" class="form-control" id="availability" name="availability" placeholder="Enter availability days" required="yes">
              </div>
              <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Enter location" required="yes" pattern="[a-zA-Z0-9 ]+">
              </div>
              <div class="form-group">
                <label for="fee">Fee</label>
                <input type="number" class="form-control" id="fee" name="fee" required="yes" placeholder="Enter Fee">
              </div>
              <div class="form-group">
                <label for="hospital">Hospital Name</label>
                <input type="text" class="form-control" id="hospital" name="hospital" placeholder="Enter hospital name" required="yes" pattern="[a-zA-Z ]+">
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="experience">Experience</label>
                <input type="number" class="form-control" id="experience" name="experience" required="yes" placeholder="Enter experience">
              </div>

              <div class="form-group">
                <label for="ser_hours">Service Hours</label>
                <input type="datetime-local" class="form-control" name="ser_hours" id="ser_hours">
              </div>

              <div class="form-group">
                <label for="specialist">Specialist</label>
                <select class="form-control" id="specialist" name="specialist">
                  <option selected>Select Specialization</option>
                <?php 
                  $result = mysqli_query($con, "SELECT * from specializations");
                  while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  <option value="<?php echo $row['spec_name'] ?>"><?php echo $row['spec_name']; ?></option>
                <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="introduction">Introduction</label>
                <textarea class="form-control" name="introduction" id="introduction"></textarea> 
              </div>

              <div class="form-group">
                <label for="image">Picture</label>
                <input type="file" class="form-control" name="image" id="image"> 
              </div>

            </div>
            <button type="submit" name="submit" class="btn btn-primary button">Register</button>
        </div>
      </form>
      




      <div class="further_box">
        <span>
          Already have an account?
        </span>
        <a href="user_login.php">Login</a>
      </div>
    </div>
    
      <div id="success">
        <h2>User Registered Successfully!</h2>        
      </div>
      <div id="failure">
        <h2>User Already Exists!</h2>        
      </div>
  </div>
     
</body>

</html>



<?php 
        if(isset($_POST['submit'])){
            $fname = $_POST['first_name'];
            $lname = $_POST['last_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone_number = $_POST['phone_number'];
            $qualification = $_POST['qualification'];
            $specialist = $_POST['specialist'];
            $location = $_POST['location'];
            $experience = $_POST['experience'];
            $availability = $_POST['availability'];
            $fee = $_POST['fee'];
            $hospital = $_POST['hospital'];
            $ser_hours = $_POST['ser_hours'];
            $introduction = $_POST['introduction'];
            $image = 'default.png';
            $validate_query = "SELECT * from doctor where doc_email='$email'";
            $result = mysqli_query($con, $validate_query);
            $count = mysqli_num_rows($result);


            if($count==0){
                $insert = "INSERT into doctor(doc_firstname, doc_lastname, doc_email, doc_password, doc_contact, location, doc_specialist, doc_qualification, doc_experience, doc_hospital, doc_fee, doc_ser_hours, doc_introduction, doc_availability, doc_image) values('$fname', '$lname', '$email', '$password', '$phone_number', '$location', '$specialist', '$qualification', '$experience', '$hospital', '$fee', '$ser_hours', '$introduction', '$availability, $image')";

                mysqli_query($con, $insert);
                $message = "Successfully Registered!";
                echo "<script>document.getElementById('success').innerHTML = '$message';</script>";
                ?><style type="text/css">
                    #success{display: block;}
                </style><?php 
                echo "<script>window.location='../login/login.php'</script>";
            }
            else{
                $message = "The username $fname $lname is already exists!";
                echo "<script>document.getElementById('failure').innerHTML = '$message';</script>";
                ?><style type="text/css">
                    #failure{display: block;}
                </style><?php
            }
        }

 ?>