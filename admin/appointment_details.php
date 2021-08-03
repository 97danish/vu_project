<!--== Patient Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Clinic Details</h4>
                                    <p>All about clinic like name, location, country, city and more</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Patient</th>
                                                    <th>Doctor</th>
                                                    <th>Clinic</th>
                                                    <th>Disease</th>
                                                    <th>Date</th>
                                                    <th>Time Slot</th>
                                                    <th>About</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php  
                                            include '../connection.php';
                                            $result = mysqli_query($con, "SELECT * from appointment");   
                                                while($row = mysqli_fetch_assoc($result)){
                                                    $patient = mysqli_query($con, "SELECT * from patient where pat_id = ".$row['app_pat']."");
                                                    $patient = mysqli_fetch_assoc($patient);
                                                    $doctor = mysqli_query($con, "SELECT * from doctor where doc_id = ".$row['app_doc']."");
                                                    $doctor = mysqli_fetch_assoc($doctor);
                                                    $clinic = mysqli_query($con, "SELECT * from clinic where clinic_id = ".$row['app_clinic']."");
                                                    $clinic = mysqli_fetch_assoc($clinic);
                                                    $service = mysqli_query($con, "SELECT * from service_hours where ser_id = ".$row['app_slot']."");
                                                    $service = mysqli_fetch_assoc($service);
                                             ?>
                                             <form method="get">
                                                <tr>
                                                    <td><?php echo $row['app_id'];?></td>
                                                    <td><?php echo ucfirst($patient['pat_firstname'])?></td>
                                                    <td><?php echo 'Dr. '.ucfirst($doctor['doc_firstname'])?></td>
													<td><?php echo ucfirst($clinic['clinic_name'])?></td>
                                                    <td><?php echo ucfirst($row['app_disease'])?></td>
                                                    <td><?php echo date("F", strtotime($row['app_date']))." ".date('d', strtotime($row['app_date']));?></td>
                                                    <td><?php echo date('h:i a', strtotime($service['ser_starttime'])).' - '.date('h:i a', strtotime($service['ser_endtime']))?></td>
                                                    <td><?php echo ucfirst($row['app_message'])?></td>
                                                    <td><button type="submit" name="delete" value="<?php echo $row['app_id'];?>" class="ad-st-view" onclick="return confirm('Do you really want to delete this Record?')">Delete</a></td>
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
                <?php  
                include '../connection.php';
                    if(isset($_GET['delete'])){
                        $id = $_GET['delete'];
                        $delete = "DELETE from appointment where app_id= '$id'";
                        mysqli_query($con, $delete);                    
                    }
                ?>