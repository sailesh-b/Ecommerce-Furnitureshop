<?php include 'header.php'; 
$contact = $conn->query("SELECT * from `contact` ");
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
                                                <th>Phone</th>
                                                <th style="width: 20%;">Message</th>
                                                <th style="width: 30%;">Reply</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i=1;
                                            while($list = $contact->fetch_assoc()){
                                            ?>
                                            <tr>
                                                <td><?php echo $i++ ?></td>
                                                <td><?php echo $list['Name'] ?></td>
                                                <td><?php echo $list['Email'] ?></td>
                                                
                                                <td><?php echo $list['Phone'] ?></td>
                                                <td><?php echo $list['Message'] ?></td>
                                                <?php if($list['Reply']){ ?>
                                                <td><?php echo $list['Reply'] ?></td>
                                            <?php } else { ?>
                                                <td><form action="reply.php" method="post">
                                                <input type="hidden" name="id" value="<?php echo $list['id'] ?>">
                                                <input type="hidden" name="email" value="<?php echo $list['Email'] ?>">
                                                <input type="text" name="reply" style="width:80%"></input><button type="submit" class="btn btn-primary btn-sm">Send</button></form></td>
                                                </tr>
                                            <?php
                                        }
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