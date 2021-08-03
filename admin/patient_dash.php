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
                    <h2>Patient Dashboard</h2>
                    <p>The Statistic Record of all the Courses, Students, Amissions and Enquiries...</p>
                    <div class="db-2">
                        <ul>
                            <li>
                                <div class="dash-book dash-b-1">
                                    <h5>Total Patients</h5>
                                    <?php 
                                    $result = mysqli_query($con, "SELECT * from appointment where app_doc = ".$_SESSION['doctor']['doc_id']."");
                                    $count = mysqli_num_rows($result);
                                     ?>
                                    <h4><?php echo $count; ?></h4>
                                    <a href="pat_profile.php">View more</a>
                                </div>
                            </li>
                            <li>
                                <div class="dash-book dash-b-4">
                                    <?php $result = mysqli_query($con, "SELECT * from appointment where app_pat = ".$_SESSION['patient']['pat_id']."");
                                    $count = mysqli_num_rows($result); ?>
                                    <h5>Total Appointments</h5>
                                    <h4><?php echo $count; ?></h4>
                                    <a href="pat_profile.php">View more</a>
                                </div>
                            </li>
                            <li>
                                <div class="dash-book dash-b-4">
                                    <h5></h5>
                                    <h4>Profile</h4>
                                    <a href="pat_profile.php">Update</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>