
<!--== patient Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Patient Details</h4>
                                    
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Patient Name</th>
                                                    <th>Contact</th>
                                                    <th>Email</th>
                                                    <th>Age</th>
                                                    <th>Address</th>
													<th>View</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php  
                                            include '../connection.php';
                                            $result = mysqli_query($con, "SELECT * from patient");   
                                                while($row = mysqli_fetch_assoc($result)){
                                             ?>
                                             <form method="get">
                                                <tr>
                                                    <td><a href="#"><span class="list-enq-name"><?php echo strtoupper( $row['pat_firstname']);?></span><span class="list-enq-city"><?php echo $row['pat_lastname'];?></span></a>
                                                    <td><?php echo $row['pat_contact'];?></td>
                                                    <td><?php echo $row['pat_email'];?></td>
                                                    <td><?php echo $row['pat_age'];?></td>
                                                    <td><?php echo $row['pat_address'];?></td>
													<td><a href="admin_patient_edit.php?id=<?php echo $row['pat_id']; ?>" class="ad-st-view">View</a></td>
                                                    <td><button type="submit" name="delete" value="<?php echo $row['pat_id'];?>" class="ad-st-view" onclick="return confirm('Do you really want to delete this Record?')">Delete</a></td>
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
                </div
                 <?php  
                include '../connection.php';
                    if(isset($_GET['delete'])){
                        $id = $_GET['delete'];
                        $delete = "DELETE from patient where pat_id= '$id'";
                        mysqli_query($con, $delete);                    
                    }
                ?>