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
    #success, #failure{
        display: none;
    }
</style>
<body>
<?php require '../connection.php'; $message = '';?>
    <div class="main">
            <div class="container-fluid" style="width: 12%; margin: auto;">
                <a href="../index.php"><img src="../img/logo-1.png" style="width: 40%;"></a>
            </div><br>    
        <div class="container">
            <div class="signup-content">
                <div class="signup-img" style="background-color: #3FACE4">
                    <div class="signup-img-content">
                        <h2>Register now </h2>
                        <p>To serve humanity at all times !</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">First name</label>
                                    <input type="text" name="first_name" id="first_name"  pattern="[\sa-zA-Z]{3,25}"  required/>
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">Last name</label>
                                    <input type="text" name="last_name" id="last_name"  pattern="[\sa-zA-Z]{3,25}"  required/>
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="email" id="email" pattern="[a-zA-Z0-9\.\-_]+@[a-zA-Z]+\.[a-zA-Z\.]{3,6}" required />
                                </div>
                                <div class="form-input">
                                    <label for="password" class="required">Password</label>
                                    <input type="password" name="password" id="password" pattern="(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{4,10}"  title="Password must contain 1 UpperCase and 1 number" />
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">Phone number</label>
                                    <input type="text" name="phone_number" id="phone_number" pattern="[0-9]{11}" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label>Clinic</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="clinic" id="meal_preference">
                                            <option>Select Clinic</option>
                                            <?php $result = mysqli_query($con, "SELECT * from clinic");
                                            while ($row = mysqli_fetch_assoc($result)) {?>
                                            <option value="<?php echo $row['clinic_id'] ?>"><?php echo $row['clinic_name'] ?></option>
                                            <?php
                                             } ?>
                                            
                                        </select>
                                    </div>
                                </div>
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
                                    <label for="qualification">Qualification</label>
                                    <input type="text" name="qualification" pattern="[a-zA-Z]{3,15}"/>
                                </div>
                                <div class="form-input">
                                    <label for="specialist">Specialist</label>
                                    <input type="text" name="specialist" pattern="[a-zA-Z]{3,15}"/>
                                </div>
                                <div class="form-input">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" pattern="[a-zA-Z]{3,30}" />
                                </div>
                                <div class="form-input">
                                    <input type="file" name="image" value="default.png" style="display: none;" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="city">City</label>
                                    <input type="text" name="city"pattern="[a-zA-Z]{3,15}" />
                                </div>
                                <div class="form-input">
                                    <label for="country">Country</label>
                                    <input type="text" name="country"pattern="[a-zA-Z]{3,15}"/>
                                </div>

                                <div class="form-input">
                                    <label for="address">Experience</label>
                                    <input type="text" name="experience" pattern="[a-zA-Z0-9\s]{3,30}" />
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
        if(isset($_POST['submit'])){
            $fname = $_POST['first_name'];
            $lname = $_POST['last_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone_number = $_POST['phone_number'];
            $gender = $_POST['gender'];
            $clinic = $_POST['clinic'];
            $qualification = $_POST['qualification'];
            $specialist = $_POST['specialist'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $country = $_POST['country'];
            $experience = $_POST['experience'];
            $image = 'default.png';
            $validate_query = "SELECT * from doctor where doc_email='$email'";
            $result = mysqli_query($con, $validate_query);
            $count = mysqli_num_rows($result);


            if($count==0){
                $insert = "INSERT into doctor(doc_firstname, doc_lastname, doc_email, doc_password, doc_contact, doc_address, doc_gender, doc_specialist, doc_qualification, doc_clinic, doc_city, doc_country, doc_experience, doc_image) values('$fname', '$lname', '$email', '$password', '$phone_number', '$address', '$gender', '$specialist', '$qualification', '$clinic', '$city', '$country', '$experience', '$image')";

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