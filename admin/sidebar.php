<?php if(empty($_SESSION['admin'])){
    echo "<script>window.location='../index.php'</script>";
} ?>
 <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12" style="background-color: #3FACE4">
                    <ul>
                        <li><img src="../img/admin/<?php echo $_SESSION['admin']['admin_image'];?>" alt="">
                        </li>
                        <li><h5><?php echo strtoupper($_SESSION['admin']['admin_name']);?></h5></li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="admin.php" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                        </li>
                        
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Admin</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin_all_details.php">All Admin</a>
                                    </li>
                                    <li><a href="admin_add_new.php">Add New Admin</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="admin_patient_details.php" class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i> All Patients</a></li>
                        <li><a href="admin_patient_details.php" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> All Doctors</a></li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i> Clinics</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin_clinic_details.php">All Clinics</a></li>
                                    <li><a href="admin_new_clinic.php">Add New Cinic</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="admin_appointment_details.php" class="collapsible-header"><i class="fa fa-calendar" aria-hidden="true"></i> Appointments</a></li>
                        <li><a href="admin_feedback_details.php" class="collapsible-header"><i class="fa fa-bullhorn" aria-hidden="true"></i> Feedback</a></li>
                    
                    </ul>
                </div>
            </div>