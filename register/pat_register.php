<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/favicon.png" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<style type="text/css">
    body{
        background-color: #A8C7E6;
    }
    #reset:hover{
        background-color: #3FACE4;
    }
    ul li:not(.init):hover, ul li.selected:not(.init){
        background-color: #3FACE4;
    }
    .custom-option{
        padding: 15px;border-radius: 5px; border-color: #ebebeb; width: 100%;
    }
    #success, #failure{
        display: none;
    }
</style>
<body>

    <div class="main">
            <div class="container-fluid" style="width: 12%; margin: auto;">
                <a href="../index.php"><img src="../img/logo-1.png" style="width: 40%;"></a>
            </div><br>
        <div class="container">
            <div class="signup-content">
                <div class="signup-img" style="background-color: #3FACE4">
                    <!-- <img src="images/form-img.jpg" alt=""> -->
                    <div class="signup-img-content">
                        <h2>Register now </h2>
                        <p>To stay healthy at all times !</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" enctype="multipart/form-data" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">First name</label>
                                    <input type="text" name="first_name" id="first_name"  pattern="[\sa-zA-Z]{3,25}"  required />
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">Last name</label>
                                    <input type="text" name="last_name" id="last_name"  pattern="[\sa-zA-Z]{3,25}"  required />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="email" id="email" pattern="[a-zA-Z0-9\.\-_]+@[a-zA-Z]+\.[a-zA-Z\.]{3,6}" required />
                                </div>
                                <div class="form-input">
                                    <label for="password" class="required">Password</label>
                                    <input type="password" name="password" id="password" pattern="(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{4,10}"  title="Password must contain 1 UpperCase and 1 number"  />
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">Phone number</label>
                                    <input type="text" name="phone_number" id="phone_number" pattern="[0-9]{11}" required  />
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-radio">
                                    <div class="label-flex">
                                        <label for="payment">Gender</label>
                                    </div>
                                    <div class="form-radio-group">            
                                        <div class="form-radio-item">
                                            <input type="radio" name="gender" value="male" id="male" checked>
                                            <label for="male">Male</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="gender" value="female" id="female">
                                            <label for="female">Female</label>
                                            <span class="check"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-input">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" name="dob" />
                                </div>
                                <div class="form-input">
                                    <label for="address">Address</label>
                                    <input type="text" name="address"pattern="[a-zA-Z]{3,30}" />
                                </div>

                                <div class="form-input">
                                    <label for="city">City</label>
                                    <input type="text" name="city"pattern="[a-zA-Z]{3,15}" />
                                </div>
                                <div class="form-input">
                                    <label for="country">Country</label>
                                    <input type="text" name="country"pattern="[a-zA-Z]{3,15}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label>Blood Group</label>                                                                        
                                    </div>
                                    <select class="custom-option" name="blood">
                                        <option>Select Option <i class="fas fa-caret-down"></i></option>
                                        <option value="a+">A+</option>
                                        <option value="a-">A-</option>
                                        <option value="b+">B+</option>
                                        <option value="b-">B-</option>
                                        <option value="ab+">AB+</option>
                                        <option value="ab-">AB-</option>
                                        <option value="o+">O+</option>
                                        <option value="o-">O-</option>
                                    </select>
                                </div>
                                <div class="form-input">
                                    <label for="patient">Patient</label>
                                    <input type="text" name="patient"pattern="[a-zA-Z]{3,15}" />
                                </div>
                                <div class="form-input">
                                    <label for="occupation">Occupation</label>
                                    <input type="text" name="occupation"pattern="[a-zA-Z]{3,15}" />
                        <input type="text" name="image" value="default.png" style="display: none;" />

                                </div>
                            </div>
                        </div>
                        <div class="form-submit">
                            <a href="../login/login.php"><input value="Login" class="submit" id="submit" style="background-color: #3FACE4; text-align: center;"  /></a>
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" style="background-color: #3FACE4" />
                            <input type="reset" value="Reset" class="submit" id="reset" name="reset" />
                        </div><br>
                        <p style="padding: 15px; background-color: red; color: white;" id="failure"><?php echo $message; ?></p>
                        <p style="padding: 15px; background-color: green; color: white;" id="success"><?php echo $message; ?></p>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

<?php 
        require '../connection.php';
        if(isset($_POST['submit'])){
            $fname = $_POST['first_name'];
            $lname = $_POST['last_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone_number = $_POST['phone_number'];
            $gender = $_POST['gender'];
            $blood = $_POST['blood'];
            $dob = $_POST['dob'];
            $patient = $_POST['patient'];
            $occupation = $_POST['occupation'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $country = $_POST['country'];
            
            $imagename = $_POST['image'];
            
            $validate_query = "SELECT * from patient where pat_email='$email'";
            $result = mysqli_query($con, $validate_query);
            $count = mysqli_num_rows($result);


            if($count==0){
                $insert = "INSERT into patient(pat_firstname, pat_lastname, pat_email, pat_password, pat_bloodgroup, pat_contactno, pat_address, pat_gender, pat_dob, pat_city, pat_country, pat_occupation, pat_image) values('$fname', '$lname', '$email', '$password', '$blood', '$phone_number', '$address', '$gender', '$dob', '$city', '$country', 'occupation', '$imagename')";
                mysqli_query($con, $insert) or die(mysqli_error($con));
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