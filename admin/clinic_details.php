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
                                                    <th>Clinic Id</th>
                                                    <th>Name</th>
                                                    <th>Contact</th>
                                                    <th>Address</th>
                                                    <th>City</th>
                                                    <th>Country</th>
													<th>View</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php  
                                            include '../connection.php';
                                            $result = mysqli_query($con, "SELECT * from clinic");   
                                                while($row = mysqli_fetch_assoc($result)){
                                             ?>
                                             <form method="get">
                                                <tr>
                                                    <td><?php echo $row['clinic_id'];?></td>
                                                    <td><a href="#"><span class="list-enq-name"><?php echo strtoupper( $row['clinic_name']);?></span></a>
                                                    </td>
                                                    <td><?php echo $row['clinic_contact'];?></td>
													<td><?php echo $row['clinic_address'];?></td>
                                                    <td><?php echo $row['clinic_city'];?></td>
                                                    <td><?php echo $row['clinic_country'];?></td>
													<td><a href="admin_student_details.php?email=<?php echo $row['doc_email']; ?>" class="ad-st-view">View</a></td>
                                                    <td><button type="submit" name="delete" value="<?php echo $row['doc_id'];?>" class="ad-st-view" onclick="return confirm('Do you really want to delete this Record?')">Delete</a></td>
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
                        $delete = "DELETE from clinic where clinic_id= '$id'";
                        mysqli_query($con, $delete);                    
                    }
                ?>