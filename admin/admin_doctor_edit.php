
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

                $result = mysqli_query($con, "SELECT * from doctor where doc_id = '$user'") or die("Error : ". mysqli_error($con));
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
                                    <h4>Doctor Informations</h4>
                                </div>

                                <div class="tab-inn tabcontent" id="profile" >
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">First Name</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="name" value="<?php echo $row['doc_firstname'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Last Name</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="lname" value="<?php echo $row['doc_lastname'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Email</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="email" value="<?php echo $row['doc_email'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Mobile</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="contact" value="<?php echo $row['doc_contact'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Specialist</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="specialist" value="<?php echo $row['doc_specialist'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Qualification</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="qualification" value="<?php echo $row['doc_qualification'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Address</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="address" value="<?php echo $row['doc_address']?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">City</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="city" value="<?php echo $row['doc_city'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Country</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="country" value="<?php echo $row['doc_country'] ?>">
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
        $contact = mysqli_real_escape_string($con, $_POST['contact']);
        $specialist = mysqli_real_escape_string($con, $_POST['specialist']);
        $qualification = mysqli_real_escape_string($con, $_POST['qualification']);
        $city = mysqli_real_escape_string($con, $_POST['city']);
        $country = mysqli_real_escape_string($con, $_POST['country']);

            $imagename = $_FILES['image']['name'];
            $tempname = $_FILES['image']['tmp_name'];
            $location = '../img/doctor/'.$imagename;
            move_uploaded_file($tempname,$location);

        $update = "UPDATE doctor SET doc_firstname = '$fname', doc_lastname = '$lname', doc_email = '$email', doc_contact = '$contact', doc_city = '$city', doc_specialist = '$specialist', doc_qualification = '$qualification', doc_country = '$country', doc_image = '$imagename' where doc_id = '$user'";
        $result = mysqli_query($con, $update);
            echo mysqli_error($con);
        if($result){
            // $result = mysqli_query($con, "SELECT * from doctor where doc_id='$user'");
            // $_SESSION['doctor'] =  mysqli_fetch_assoc($result);
            // echo "<script>window.location='doc_profile.php'</script>";
        }
        else{
            echo mysqli_error($con);
        }
    }