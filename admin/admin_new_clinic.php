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
                        <li class="active-bre"><a href="admin.php"> Add new course</a>
                        </li>
                        <li class="page-back"><a href="../index.php"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>
    <?php require '../connection.php';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $country = $_POST['country'];


        $result = mysqli_query($con, "SELECT * from clinic where clinic_name = '$name'");
        
        if(mysqli_num_rows($result)>0){ 
             ?> <style>
             #btn2 {display: inline-block;}#btn1{display: none;}</style>
             <?php
        }
        else{
            mysqli_query($con, "INSERT into clinic(clinic_name, clinic_contact, clinic_address, clinic_city, clinic_country) values('$name', '$contact', '$address', '$city', '$country')") or die("Error : ".mysqli_error($con));
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
                                    <h4>Add New Clinic Informations</h4>
                                   
                                </div>
                                <div class="tab-inn">
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="text" value="" class="validate"  pattern="[\sa-zA-Z]{3,20}" name="name" required>
                                                <label class="">Clinic name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="text" value="" class="validate" pattern="[0-9]{11}" name="contact" required>
                                                <label class="">Contact</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="text" value="" class="validate" pattern="[\sa-zA-Z]{3,30}" name="address" required>
                                                <label class="">Address</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="text" class="validate" pattern="[\sa-zA-Z]{3,15}" name="city" required>
                                                <label class="">City</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" value="" name="country" pattern="[\sa-zA-Z]{3,15}" class="validate">
                                                <label class="">Country</label>
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