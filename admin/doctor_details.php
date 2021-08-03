<!--== Patient Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Doctor Details</h4>
                                    <p>All about doctors like name, spacialist id, phone, email, country, city and more</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Doctor</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>City</th>
                                                    <th>Country</th>
                                                    <th>Experience</th>
													<th>Specialist</th>
                                                    <th>Earnings</th>
													<th>View</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php  
                                            include '../connection.php';
                                            $result = mysqli_query($con, "SELECT * from doctor");   
                                                while($row = mysqli_fetch_assoc($result)){
                                             ?>
                                             <form method="get">
                                                <tr>
                                                    <td><span class="list-img"><img src="<?php echo "../img/doctor/".$row['doc_image'] ?>" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name"><?php echo strtoupper( $row['doc_firstname']);?></span><span class="list-enq-city"><?php echo $row['doc_lastname'];?></span></a>
                                                    </td>
                                                    <td><?php echo $row['doc_contact'];?></td>
                                                    <td><?php echo $row['doc_email'];?></td>
													<td><?php echo $row['doc_city'];?></td>
                                                    <td><?php echo $row['doc_country'];?></td>
                                                    <td><?php echo $row['doc_experience'];?></td>
                                                    <td><?php echo $row['doc_specialist'];  ?></td>
                                                    <td><?php echo $row['doc_earning'];  ?></td>
													<td><a href="admin_doctor_edit.php?id=<?php echo $row['doc_id']; ?>" class="ad-st-view">View</a></td>
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
                        $delete = "DELETE from doctor where doc_id= '$id'";
                        mysqli_query($con, $delete);                    
                    }
                ?>