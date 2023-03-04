<?php include 'header.php'; 
$order = $conn->query("SELECT * from `orders` ");
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
                                        <th style="width:20%">Product</th>
                                        <th style="width:20%">Address</th>
                                        <th>Price</th>
                                        <th>Payment id</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i=1;
                                    while($list = $order->fetch_assoc()){
                                        $id=$list['productid'];
                                        $product = $conn->query("SELECT Name,Price from `Products` where id='$id'");
                                        $name = $product->fetch_assoc();
                                        ?>
                                        <tr>
                                            <td><?php echo $i++ ?></td>
                                            <td><?php echo $list['Name'] ?></td>
                                            <td><?php echo $name['Name'] ?></td>
                                            <td><?php echo $list['Address'].','.$list['Zip'] ?><br><?php echo $list['Phone'] ?></td>
                                            <td><?php echo $name['Price'] ?></td>
                                            <td><?php echo $list['paymentid'] ?></td>
                                            <td><?php echo $list['date'] ?></td>
                                            <?php 
                                            $status=$list['status'];
                                            if($status=='Cancelled'){?>
                                                <td style="color:red"><?php echo $status ?></td>
                                                <?php 
                                            }
                                            else{
                                                ?>
                                                <td style="color:green"><?php echo $status ?></td>
                                                <?php
                                            }
                                            ?>

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