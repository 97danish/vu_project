 <?php 
 include '../connection.php';
  ?>
  <style type="text/css">
      
      .dash-book{
        height: 250px;
      }

  </style>
 <!--== DASHBOARD INFO ==-->
                <div class="sb2-2-1">
                    <h2>Admin Dashboard</h2>
                    <p>The Statistic Record of all the Courses, Students, Amissions and Enquiries...</p>
                    <div class="db-2">
                        <ul>
                            <li>
                                <div class="dash-book dash-b-1">
                                    <h5>Total Patients</h5>
                                    <?php 
                                    $result = mysqli_query($con, "SELECT * from patient");
                                    $count = mysqli_num_rows($result);
                                     ?>
                                    <h4><?php echo $count; ?></h4>
                                    <a href="admin_patient_details.php">View more</a>
                                </div>
                            </li>
                            <li>
                                <div class="dash-book dash-b-2">
                                    <?php $result = mysqli_query($con, "SELECT * from doctor");
                                    $count = mysqli_num_rows($result); ?>
                                    <h5>Total Doctors</h5>
                                    <h4><?php echo $count; ?></h4>
                                    <a href="admin_doctor_details.php">View more</a>
                                </div>
                            </li>
                            <li>
                                <div class="dash-book dash-b-3">
                                    <?php $result = mysqli_query($con, "SELECT * from clinic");
                                    $count = mysqli_num_rows($result); ?>
                                    <h5>Total Clinics</h5>
                                    <h4><?php echo $count; ?></h4>
                                    <a href="admin_clinic_details.php">View more</a>
                                </div>
                            </li>
                            <li>
                                <div class="dash-book dash-b-4">
                                    <?php $result = mysqli_query($con, "SELECT * from appointment");
                                    $count = mysqli_num_rows($result); ?>
                                    <h5>Total Appointments</h5>
                                    <h4><?php echo $count; ?></h4>
                                    <a href="admin_appointment_details.php">View more</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>