
<!--== admin Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Admin Details</h4>
                                    
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Admin</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
													<th>View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php  
                                            include '../connection.php';
                                            $result = mysqli_query($con, "SELECT * from admin");   
                                                while($row = mysqli_fetch_assoc($result)){
                                             ?>
                                             <form method="get">
                                                <tr>
                                                    <td><span class="list-img"><img src="<?php echo "../img/admin/".$row['admin_image'] ?>" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name"><?php echo strtoupper( $row['admin_name']);?></span></a>
                                                    </td>
                                                    <td><?php echo $row['admin_email'];?></td>
													<td><a href="admin_info_edit.php?id=<?php echo $row['admin_id']; ?>" class="ad-st-view">View</a></td>
                                                    
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
                        $delete = "DELETE from admin where admin_id= '$id'";
                        mysqli_query($con, $delete);                    
                    }
                ?>
                