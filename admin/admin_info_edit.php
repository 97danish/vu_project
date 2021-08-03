
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
                
                if($_GET['id']){
                    $user = $_GET['id'];    
                }
                else if(!empty($_SESSION['admin'])){
                    $user = $_SESSION['admin']['admin_id'];
                }
                
                $result = mysqli_query($con, "SELECT * from admin where admin_id = '$user'") or die("Error : ". mysqli_error($con));
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
                                    <h4>Admin Informations</h4>
                                </div>

                                <div class="tab-inn tabcontent" id="profile" >
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Name</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="name" value="<?php echo $row['admin_name'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">Email</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="email" value="<?php echo $row['admin_email'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2 col-sm-12">City</label>
                                            <div class="col-md-10 col-sm-12">
                                              <input type="text" class="form-control" name="city" value="<?php echo $row['admin_city'] ?>">
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
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $city = mysqli_real_escape_string($con, $_POST['city']);

            $imagename = $_FILES['image']['name'];
            $tempname = $_FILES['image']['tmp_name'];
            $location = '../img/admin/'.$imagename;
            move_uploaded_file($tempname,$location);

        $update = "UPDATE admin SET admin_name = '$name', admin_email = '$email', admin_city = '$city', admin_image = '$imagename' where admin_id = '$user'";
        $result = mysqli_query($con, $update);
            echo mysqli_error($con);
        if($result){
            $result = mysqli_query($con, "SELECT * from admin where admin_id=".$_SESSION['admin']['admin_id']."");
            $_SESSION['admin'] =  mysqli_fetch_assoc($result);
        }
        else{
            echo mysqli_error($con);
        }
    }