<?php require 'admin_head.php'; ?>
 <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <?php require 'sidebar.php' ?>
             <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2" >
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
                <?php require 'patient_details.php' ?>
            </div>
        </div>
    </div>
</body>
               