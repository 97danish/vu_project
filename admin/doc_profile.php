<style type="text/css">
    
.sb2-12, .sb2-13{
    margin-left: 20px;
}
#select-options{
    background-color: white;
}
.dropdown-content li{
    background-color: white;
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
                        <img class="img-responsive" src="../img/doctor/<?php echo $_SESSION['doctor']['doc_image'] ?>" alt="">
                    </div>
                    <h2><?php echo ucfirst($_SESSION['doctor']['doc_firstname'])." ".ucfirst($_SESSION['doctor']['doc_lastname']); ?></h2>       
                
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <h3>About <?php echo ucfirst($_SESSION['doctor']['doc_firstname'])." ".ucfirst($_SESSION['doctor']['doc_lastname']); ?></h3>
                    <div class="row" style="margin-top: 15%;">
                         <div class="set_field" style="">
                            <div class="group">
                                <h5 class="left">Gender</h5>
                                <h5 class="right"><?php echo ucfirst($_SESSION['doctor']['doc_gender']) ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="set_field" style="">
                            <div class="group">
                                <h5 class="left">Contact</h5>
                                <h5 class="right"><?php echo ucfirst($_SESSION['doctor']['doc_contact']) ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="set_field" style="">
                            <div class="group">    
                                <h5 class="left">Email</h5>
                                <h5 class="right"><?php echo ucfirst($_SESSION['doctor']['doc_email']) ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="set_field" style="">
                            <div class="group">    
                                <h5 style="text-align: left;">Address</h5>
                                <h5><?php echo ucfirst($_SESSION['doctor']['doc_address']) ?></h5>
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
                                    <a href="#" class="tablinks" onclick="opentab(event, 'rating')"><h4>Rating</h4></a>
                                </div>
                                <div class="tab-inn tabcontent" id="profile" >
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">First Name</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="fname" value="<?php echo $_SESSION['doctor']['doc_firstname'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Last Name</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="lname" value="<?php echo $_SESSION['doctor']['doc_lastname'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Email</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="email" value="<?php echo $_SESSION['doctor']['doc_email'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Mobile</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="contact" value="<?php echo $_SESSION['doctor']['doc_contact'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Specialist</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="specialist" value="<?php echo $_SESSION['doctor']['doc_specialist'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Qualification</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="qualification" value="<?php echo $_SESSION['doctor']['doc_qualification'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Address</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="address" value="<?php echo $_SESSION['doctor']['doc_address'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">City</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="city" value="<?php echo $_SESSION['doctor']['doc_city'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Country</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="country" value="<?php echo $_SESSION['doctor']['doc_country'] ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Time Slot</label>
                                            <div class="col-md-10 col-sm-12">
                                                <select name="slot">
                                                    <option>Select Option</option>
                                                <?php $service_hours = mysqli_query($con, "SELECT * from service_hours") or die(mysqli_error($con));
                                                while($row = mysqli_fetch_assoc($service_hours)){ ?>
                                                    
                                                    <option value="<?php echo $row['ser_id'] ?>" style="background-color: white">   
                                                        <?php echo $row['ser_day'] ?>
                                                        <?php echo $row['ser_starttime'] ?> am - <?php echo $row['ser_endtime'] ?> pm
                                                    </option>
                                                <?php } ?>
                                                </select>
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
                                                    <th>Description</th>
                                                    <th>Fees</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php  
                                            include '../connection.php';
                                            $result = mysqli_query($con, "SELECT * from appointment where app_doc = ".$_SESSION['doctor']['doc_id']."") or die(mysqli_error($con));   
                                                while($row = mysqli_fetch_assoc($result)){
                                             ?>
                                             <form method="get">
                                                <tr>
                                                    <?php $patient = mysqli_query($con, "SELECT * from patient where pat_id = ".$row['app_pat'].""); 
                                                    $patient = mysqli_fetch_assoc($patient);?>
                                                    <td><a href="#"><span class="list-enq-name"><?php echo strtoupper($patient['pat_firstname']);?></span></a>
                                                    </td>
                                                    
                                                    <td><?php echo"Dr. ".strtoupper($_SESSION['doctor']['doc_firstname']);?></td>
                                                    <td><?php echo strtoupper($row['app_disease']);?></td>
                                                    <td><?php echo date("F", strtotime($row['app_date']))." ".date('d', strtotime($row['app_date']));?></td>

                                                    <?php $slot = mysqli_query($con, "SELECT * from service_hours where ser_id = ".$row['app_slot']."") or die(mysqli_error($con));
                                                    $slot = mysqli_fetch_assoc($slot); ?>
                                                    <td><?php echo date('h:i a', strtotime($slot['ser_starttime'])).' - '.date('h:i a', strtotime($slot['ser_endtime']))?></td>
                                                    <td><?php echo $row['app_message'];?></td>
                                                    <td><?php echo $row['app_fee'];?></td>
                                                    
                                                </tr>
                                            </form>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="tab-inn tabcontent" id="rating">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Patient Name</th>
                                                    <th>Comment</th>
                                                    <th>Rating</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php  
                                            include '../connection.php';
                                            $result = mysqli_query($con, "SELECT * from feedback where rev_doc_id = ".$_SESSION['doctor']['doc_id']."") or die(mysqli_error($con));   
                                                while($row = mysqli_fetch_assoc($result)){
                                             ?>
                                             <form method="get">
                                                <tr>
                                                    <?php $patient = mysqli_query($con, "SELECT * from patient where pat_id = ".$row['rev_pat_id'].""); 
                                                    $patient = mysqli_fetch_assoc($patient);?>
                                                    <td><a href="#"><span class="list-enq-name"><?php echo strtoupper($patient['pat_firstname']);?></span></a>
                                                    </td>
                                                    <td><?php echo ucfirst($row['rev_comment']);?></td>    
                                                    <td><?php for($i=1;$i<=5;$i++){
                                                        if($i<=$row['rev_rating']){?>
                                                        <span class="fa fa-star checked"></span>
                                                    <?php 
                                                        }
                                                        else{?>
                                                        <span class="fa fa-star"></span>
                                                    <?php
                                                        }
                                                    }?></td>
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
    .checked{color:orange;}
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
        $contact = mysqli_real_escape_string($con, $_POST['contact']);
        $specialist = mysqli_real_escape_string($con, $_POST['specialist']);
        $qualification = mysqli_real_escape_string($con, $_POST['qualification']);
        $city = mysqli_real_escape_string($con, $_POST['city']);
        $country = mysqli_real_escape_string($con, $_POST['country']);

            $imagename = $_FILES['image']['name'];
            $tempname = $_FILES['image']['tmp_name'];
            $location = '../img/doctor/'.$imagename;
            move_uploaded_file($tempname,$location);

        $update = "UPDATE doctor SET doc_firstname = '$fname', doc_lastname = '$lname', doc_email = '$email', doc_contact = '$contact', doc_city = '$city', doc_specialist = '$specialist', doc_qualification = '$qualification', doc_country = '$country', doc_image = '$imagename' where doc_id = ".$_SESSION['doctor']['doc_id']."";
        $result = mysqli_query($con, $update);
            echo mysqli_error($con);
        if($result){
            $result = mysqli_query($con, "SELECT * from doctor where doc_id=".$_SESSION['doctor']['doc_id']."");
            $_SESSION['doctor'] =  mysqli_fetch_assoc($result);
            echo "<script>window.location='doc_profile.php'</script>";
        }
        else{
            echo mysqli_error($con);
        }
    }
 ?>