<?php include 'admin_head.php'; ?>
<?php if(empty($_SESSION['doctor'])){
    echo "<script>window.location='../index.php'</script>";
} ?>
<body>

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2" style="margin-left: 0; width: 100%;">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="doctor.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="doctor_dash.php">Dashboard</a>
                        </li>
                        <li class="page-back"><a href="../index.php"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>
               <?php include 'doctor_dash.php'; ?>
               <?php //include 'student_details.php'; ?>
               <?php// include 'course_details.php'; ?>
               <?php //include 'teacher_details.php'; ?>
               
            </div>
        </div>
    </div>
</body>