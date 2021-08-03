
  <?php require 'admin_head.php'; ?>
     <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <?php include 'sidebar.php'; ?>
             <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="admin.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="admin.php">Dashboard</a>
                        </li>
                        <li class="page-back"><a href="../index.php"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>
                <?php require '../connection.php';
                $user = $_GET['id'];
                
                $result = mysqli_query($con, "SELECT * from patient where pat_id = '$user'") or die("Error : ". mysqli_error($con));
                $row = mysqli_fetch_assoc($result) or die("Error: ".mysqli_error($con)); ?>
                   <style type="text/css">
                        #btn1, #btn2{
                            display: none;
                        }
                    </style>
                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
						<div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Patient Informations</h4>
                                </div>
                                <div class="tab-inn tabcontent" id="profile" >
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">First Name</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="fname" value="<?php echo $row['pat_firstname'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Last Name</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="lname" value="<?php echo $row['pat_lastname']  ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Email</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="email" value="<?php echo $row['pat_email']  ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Mobile</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="contact" value="<?php echo $row['pat_contactno']  ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Date of Birth</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="date" class="form-control" name="dob" value="<?php echo $row['pat_dob']  ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Occupation</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="occupation" value="<?php echo $row['pat_occupation']  ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Blood Group</label>
                                            <div class="col-md-10 col-sm-12">
                                                <?php $blood = $row['pat_bloodgroup'] ; ?>
                                                <select name="blood">
                                                    <option>Select Option</option>
                                                    <option <?php if ($blood == 'A+'||'a+' ) echo 'selected' ; ?>  value="A+">A+</option>
                                                    <option <?php if ($blood == 'A-'||'a-' ) echo 'selected' ; ?>  value="A-">A-</option>
                                                    <option <?php if ($blood == 'B+'||'b+' ) echo 'selected' ; ?>  value="B+">B+</option>
                                                    <option <?php if ($blood == 'B-'||'b-' ) echo 'selected' ; ?>  value="B-">B-</option>
                                                    <option <?php if ($blood == 'AB+'||'ab+' ) echo 'selected' ; ?>  value="AB+">AB+</option>
                                                    <option <?php if ($blood == 'AB-'||'ab-' ) echo 'selected' ; ?>  value="AB-">AB-</option>
                                                    <option <?php if ($blood == 'O+'||'o+' ) echo 'selected' ; ?>  value="O+">O+</option>
                                                    <option <?php if ($blood == 'O-'||'o-' ) echo 'selected' ; ?>  value="O-">O-</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Gender</label>
                                            <div class="col-md-10 col-sm-12">
                                                <?php $gender = $row['pat_gender'] ; ?>
                                                <select name="gender">
                                                    <option <?php if (empty($gender)) echo 'selected' ; ?> >Select Option</option>
                                                    <option <?php if ($gender == 'Male'||'male' ) echo 'selected' ; ?>  value="Male">Male</option>
                                                    <option <?php if ($gender == 'Female'||'female') echo 'selected' ; ?>  value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Address</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="address" value="<?php echo $row['pat_address']  ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">City</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="city" value="<?php echo $row['pat_city']  ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Country</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="country" value="<?php echo $row['pat_country']  ?>">
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="file-field input-field col s12">
                                                <div class="btn admin-upload-btn">
                                                    <span>File</span>
                                                    <input type="file" name="image">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" value="" type="text" name="image" placeholder="Profile image">
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="form-group row">
                                            <div class="col-md-offset-9 col-md-2 col-sm-12">
                                              <button class="btn btn-succes" type="submit" name="update">Update</button>
                                            </div>
                                            
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
if(isset($_POST['update'])){
        $fname = mysqli_real_escape_string($con, $_POST['fname']);
        $lname = mysqli_real_escape_string($con, $_POST['lname']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $gender = mysqli_real_escape_string($con, $_POST['gender']);
        $dob = mysqli_real_escape_string($con, $_POST['dob']);
        $occupation = mysqli_real_escape_string($con, $_POST['occupation']);
        $blood = mysqli_real_escape_string($con, $_POST['blood']);
        $contact = mysqli_real_escape_string($con, $_POST['contact']);
        $city = mysqli_real_escape_string($con, $_POST['city']);
        $country = mysqli_real_escape_string($con, $_POST['country']);

            $imagename = $_FILES['image']['name'];
            $tempname = $_FILES['image']['tmp_name'];
            $location = '../img/patient/'.$imagename;
            move_uploaded_file($tempname,$location);

        $update = "UPDATE patient SET pat_firstname = '$fname', pat_lastname = '$lname', pat_email = '$email', pat_contact = '$contact', pat_city = '$city', pat_country = '$country', pat_image = '$imagename',  pat_address = '$address', pat_gender = '$gender', pat_dob = '$dob', pat_occupation = '$occupation', pat_bloodgroup = '$blood' where pat_id = ".$_SESSION['patient']['pat_id']."";
        $result = mysqli_query($con, $update);
            echo mysqli_error($con);
        if($result){
            $result = mysqli_query($con, "SELECT * from patient where pat_id=".$_SESSION['patient']['pat_id']."");
            $_SESSION['patient'] =  mysqli_fetch_assoc($result);
            echo "<script>window.location='pat_profile.php'</script>";
        }
        else{
            echo mysqli_error($con);
        }
    }