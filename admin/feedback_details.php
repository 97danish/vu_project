<!--== Patient Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Feedback Details</h4>
                                    <p></p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Doctor</th>
                                                    <th>Patient</th>
                                                    <th>Comment</th>
                                                    <th>Rating</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php  
                                            include '../connection.php';
                                            $result = mysqli_query($con, "SELECT * from feedback");   
                                                while($row = mysqli_fetch_assoc($result)){
                                                    $doctor = mysqli_query($con, "SELECT * from doctor where doc_id = ".$row['rev_doc_id']."");
                                                    $doctor = mysqli_fetch_assoc($doctor);
                                                    $patient = mysqli_query($con, "SELECT * from patient where pat_id = ".$row['rev_pat_id']."");
                                                    $patient = mysqli_fetch_assoc($patient);
                                             ?>
                                             <form method="get">
                                                <tr>
                                                    <td><?php echo $row['rev_id'];?></td>
                                                    <td><?php echo ucfirst($doctor['doc_firstname']);?></td>
                                                    <td><?php echo ucfirst($patient['pat_firstname']);?></td>
                                                    <td><?php echo $row['rev_comment'];?></td>
													<td><?php echo $row['rev_rating'];?></td>
                                                    <td><button type="submit" name="delete" value="<?php echo $row['rev_id'];?>" class="ad-st-view" onclick="return confirm('Do you really want to delete this Record?')">Delete</a></td>
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
                        $delete = "DELETE from feedback where rev_id= '$id'";
                        mysqli_query($con, $delete);                    
                    }
                ?>