<?php include 'header.php'; 
$user = $conn->query("SELECT * from `user` ");

?>
        
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Manage Users</h3>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Manage Users</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone no</th>
                                                <th>Address</th>
                                                <th>City & State</th>
                                                <th>Pincode</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i=1;
                                            while($list = $user->fetch_assoc()){
                                            ?>
                                            <tr>
                                                <td><?php echo $i++ ?></td>
                                                <td><?php echo $list['Name'] ?></td>
                                                <td><?php echo $list['Email'] ?></td>
                                                <td><?php echo $list['phone'] ?></td>
                                                <td><?php if(isset($list['Address'])){  echo $list['Address']; } else { echo "-";}?></td>
                                                <td><?php if(isset($list['City'])){ echo $list['City'].','.$list['State']; } else { echo "-";}?></td>
                                                <td><?php if(isset($list['Pincode'])){ echo $list['Pincode']; } else { echo "-";}?></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            
  <?php include 'footer.php'; ?>          