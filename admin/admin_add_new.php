<style type="text/css">
    #btn1, #btn2{
        display: none;
    }
</style>
<?php require 'admin_head.php'; ?>
        
  <!--== BODY INNER CONTAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
             <?php include 'sidebar.php'; ?>
                 <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="admin.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="admin.php"> Add new admin</a>
                        </li>
                        <li class="page-back"><a href="../index.php"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>
    <?php require '../connection.php';
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        
        $result = mysqli_query($con, "SELECT * from admin where admin_email = '$admin_email'");
        
        if(mysqli_num_rows($result)>0){ 
             ?> <style>
             #btn2 {display: inline-block;}#btn1{display: none;}</style>
             <?php
        }
        else{
            $name = $_POST['name'];
            $city = $_POST['city'];
            $imagename = $_FILES['image']['name'];
            $tempname = $_FILES['image']['tmp_name'];
            $location = '../img/admin/'.$imagename;
            move_uploaded_file($tempname,$location);

            mysqli_query($con, "INSERT into admin(admin_name, admin_email, admin_city, admin_image) values('$name', '$email', '$city', '$imagename')") or die("Error : ".mysqli_error($con));
            ?> <style>
             #btn1 { display: inline-block;}#btn2{display: none;}</style>
             <?php
        }
    } ?>
    <style type="text/css">
        .showmsg{
            display: inline-block;
        }
    </style>
                <!--== User Details ==-->
                <div class="sb2-2-3" id="yes">
                    <div class="row">
                        <div class="col-md-12">
						<div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Add New Admin Informations</h4>
                                   
                                </div>
                                <div class="tab-inn">
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="text" value="" class="validate"  pattern="[\sa-zA-Z]{3,20}" name="name" required>
                                                <label class="">Admin name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="text" value="" class="validate" pattern="[0-9]{11}" name="contact" required>
                                                <label class="">Email</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="input-field col s6">
                                                <input type="text" class="validate" pattern="[\sa-zA-Z]{3,15}" name="city" required>
                                                <label class="">City</label>
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
                                        <div class="row">
                                            <div class="input-field col s2">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" name="submit" class="waves-button-input"></i>
                                            </div>
                                            <div class="input-field col s2">
                                                <button class="btn btn-lg btn-success" id="btn1" style="height:auto; border-radius: 0;">Entered Successfully!</button>
                                                <button class="btn btn-lg btn-danger" id="btn2" style="height:auto; border-radius: 0;">Entering Failed!</button>
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