<style type="text/css">
    
.sb2-12, .sb2-13{
    margin-left: 20px;
}
</style>

  <?php require 'admin_head.php'; ?>
     <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <div>
                        <img class="img-responsive" src="../img/patient/<?php echo $_SESSION['patient']['pat_image'] ?>" alt="">
                    </div>
                    <h2><?php echo ucfirst($_SESSION['patient']['pat_firstname'])." ".ucfirst($_SESSION['patient']['pat_lastname']); ?></h2>       
                
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <h3>About <?php echo ucfirst($_SESSION['patient']['pat_firstname'])." ".ucfirst($_SESSION['patient']['pat_lastname']); ?></h3>
                    <div class="row" style="margin-top: 15%;">
                         <div class="set_field" style="">
                            <div class="group">
                                <h5 class="left">Gender</h5>
                                <h5 class="right"><?php echo ucfirst($_SESSION['patient']['pat_gender']) ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="set_field" style="">
                            <div class="group">
                                <h5 class="left">Contact</h5>
                                <h5 class="right"><?php echo ucfirst($_SESSION['patient']['pat_contactno']) ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="set_field" style="">
                            <div class="group">    
                                <h5 class="left">Email</h5>
                                <h5 class="right"><?php echo ucfirst($_SESSION['patient']['pat_email']) ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="set_field" style="">
                            <div class="group">    
                                <h5 style="text-align: left;">Address</h5>
                                <h5><?php echo ucfirst($_SESSION['patient']['pat_address']) ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="set_field" style="">
                            <div class="group">    
                                <h5 class="left">Status</h5>
                                <h5 class="right button btn-success">Active</h5>
                            </div>
                        </div>
                    </div>
                        
                </div>
            </div>
             <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="admin.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="page-back"><a href="../index.php"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>
                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
						<div class="box-inn-sp admin-form">
                                <div class="inn-title tab">
                                    <a href="#" class="tablinks" onclick="opentab(event, 'profile')"><h4>Update Profile</h4></a>
                                    <a href="#" class="tablinks" onclick="opentab(event, 'appointments')"><h4>Appointments</h4></a>
                                </div>
                                <div class="tab-inn tabcontent" id="profile" >
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">First Name</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="fname" value="<?php echo $_SESSION['patient']['pat_firstname'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Last Name</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="lname" value="<?php echo $_SESSION['patient']['pat_lastname'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Email</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="email" value="<?php echo $_SESSION['patient']['pat_email'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Mobile</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="contact" value="<?php echo $_SESSION['patient']['pat_contactno'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Date of Birth</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="date" class="form-control" name="dob" value="<?php echo $_SESSION['patient']['pat_dob'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Occupation</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="occupation" value="<?php echo $_SESSION['patient']['pat_occupation'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Blood Group</label>
                                            <div class="col-md-10 col-sm-12">
                                                <?php $blood = $_SESSION['patient']['pat_bloodgroup']; ?>
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
                                                <?php $gender = $_SESSION['patient']['pat_gender']; ?>
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
                                              <input type="text" class="form-control" name="address" value="<?php echo $_SESSION['patient']['pat_address'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">City</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="city" value="<?php echo $_SESSION['patient']['pat_city'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Country</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="country" value="<?php echo $_SESSION['patient']['pat_country'] ?>">
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

                                <div class="tab-inn tabcontent" id="appointments">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Patient Name</th>
                                                    <th>Doctor Name</th>
                                                    <th>Disease</th>
                                                    <th>Appointment Date</th>
                                                    <th>Time Slot</th>
                                                    <th>Fees</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php  
                                            include '../connection.php';
                                            $result = mysqli_query($con, "SELECT * from appointment where app_pat = ".$_SESSION['patient']['pat_id']."") or die(mysqli_error($con));   
                                                while($row = mysqli_fetch_assoc($result)){
                                             ?>
                                             <form method="get">
                                                <tr>
                                                    <td><a href="#"><span class="list-enq-name"><?php echo strtoupper($_SESSION['patient']['pat_firstname']);?></span></a></td>
                                                    <?php $doctor = mysqli_query($con, "SELECT * from doctor where doc_id = ".$row['app_doc'].""); 
                                                    $doctor = mysqli_fetch_assoc($doctor);?>
                                                    <td><?php echo"Dr. ".strtoupper($doctor['doc_firstname']);?></td>
                                                    <td><?php echo strtoupper($row['app_disease']);?></td>
                                                    <td><?php echo date("F", strtotime($row['app_date']))." ".date('d', strtotime($row['app_date']));?></td>

                                                    <?php $slot = mysqli_query($con, "SELECT * from service_hours where ser_id = ".$row['app_slot']."") or die(mysqli_error($con));
                                                    $slot = mysqli_fetch_assoc($slot); ?>
                                                    <td><?php echo date('h:i a', strtotime($slot['ser_starttime'])).' - '.date('h:i a', strtotime($slot['ser_endtime']))?></td>
                                                    <td><?php echo $row['app_fee'];?></td>
                                                    <td><?php echo $row['app_message'];?></td>
                                                </tr>
                                            </form>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<style type="text/css">
    .active{
        background: #04335F; padding: 14px;
    }
    .tab h4{
        padding: 10px;
    }
</style>
<script type="text/javascript">
    $(document).ready(function(){
        opentab(event, 'profile');
    })
    function opentab(evt, tabname) {
      // Declare all variables
      var i, tabcontent, tablinks;

      // Get all elements with class="tabcontent" and hide them
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }

      // Get all elements with class="tablinks" and remove the class "active"
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }

      // Show the current tab, and add an "active" class to the button that opened the tab
      document.getElementById(tabname).style.display = "block";
      evt.currentTarget.className += " active";
    }
</script>

<?php

require '../connection.php';

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

        $update = "UPDATE patient SET pat_firstname = '$fname', pat_lastname = '$lname', pat_email = '$email', pat_contactno = '$contact', pat_city = '$city', pat_country = '$country', pat_image = '$imagename',  pat_address = '$address', pat_gender = '$gender', pat_dob = '$dob', pat_occupation = '$occupation', pat_bloodgroup = '$blood' where pat_id = ".$_SESSION['patient']['pat_id']."";
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
 ?>