<?php session_start();
// if(empty($_SESSION['admin'])){
//     header('location:count.php');
   
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Online Doctor Search and Appointment System</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EEducation master is one of the best eEducational html template, it's suitable for all eEducation websites like university,college,school,online eEducation,tution center,distance eEducation,computer eEducation">
    <meta name="keyword" content="eEducation html template, university template, college template, school template, online eEducation template, tution center template">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="css/materialize.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="css/style-mob.css" rel="stylesheet" />
    <link href="css/editing.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</head>
<body>
     <!--== Head CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-3 col-sm-3 col-xs-6 sb1-1">
                <a href="admin.php" class="logo"><img src="../img/favicon.png" alt="" style=" height: 7%; width: 10%; margin: 5%;" /><span style="margin-left: 10px;"> <b style="color: black;">Life Saver Mobile Doctor</b></span>
                </a>
            </div>
            <!--== SEARCH ==-->
            <div class="col-md-5 col-sm-6 mob-hide">
                
            </div>
            <!--== NOTIFICATION ==-->
            <?php require '../connection.php';
            $specializations = mysqli_query($con, "SELECT * from specializations"); $specializations = mysqli_num_rows($specializations);
            $locations = mysqli_query($con, "SELECT * from locations"); $locations = mysqli_num_rows($locations);
            $appointments = mysqli_query($con, "SELECT * from appointments"); $appointments = mysqli_num_rows($appointments);
            ?>
            <div class="col-md-2 tab-hide">
                <div class="top-not-cen">
                    <a class='waves-effect btn-noti' href="admin_messages.php" title="all enquiry messages"><i class="fa fa-commenting-o" aria-hidden="true"></i><span><?php echo $msg ?></span></a><!-- 
                    <a class='waves-effect btn-noti' href="contactus.php" title="course booking messages"><i class="fa fa-envelope-o" aria-hidden="true"></i><span></span></a> -->
                    <a class='waves-effect btn-noti' href="admin_appointment_details.php" title="admission enquiry"><i class="fa fa-tag" aria-hidden="true"></i><span><?php echo $app ?></span></a>
                </div>
            </div>
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-2 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img src="<?php if(!empty($_SESSION['doctor'])){echo '../img/doctor/'.$_SESSION['doctor']['doc_image']; }else{echo '../img/patient/'.$_SESSION['patient']['pat_image']; }?>" alt="" />My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>

                <!-- Dropdown Structure -->
                <ul id='top-menu' class='dropdown-content top-menu-sty'>
                    <li><a href="admin_info_edit.php" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Admin Setting</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="../logout.php" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>