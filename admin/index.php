<?php 
include 'header.php';
$user = $conn->query("SELECT * from `user` "); 
$scat = $conn->query("SELECT subCategory FROM Category");
$product = $conn->query("SELECT * from `Products`");
$stock = $conn->query("SELECT SUM(stock) from `Products`");
$income = $conn->query("SELECT SUM(totalamount) from `payment` where status='1'");
$sold = $conn->query("SELECT Count(Name) from `orders`");
$cancel = $conn->query("SELECT Count(id) from `orders` where `status`='Cancelled'");
$count=mysqli_num_rows($user);
$count1=mysqli_num_rows($scat);
$count2=mysqli_num_rows($product);
$count3=$stock->fetch_assoc();
$count4=$income->fetch_assoc();
$count5=$sold->fetch_assoc();
$count6=$cancel->fetch_assoc();
?>
        
                <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
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
                        <h3 class="text-themecolor">Dashboard</h3>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Sales overview chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <div class="card" style="background-color: skyblue;">
                            <div class="card-body">
                                <h4 class="card-title"><span class="lstick"></span>Registered Users</h4><hr>
                                <div style="height:160px; width:100%; text-align: center; font-size: 6rem"><?php echo $count;?></div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- visit charts-->
                    <!-- ============================================================== -->
                    <div class="col-lg-3 col-md-12">
                        <div class="card" style="background-color: rgb(135, 235, 175);">
                            <div class="card-body">
                                <h4 class="card-title"><span class="lstick"></span>Categories</h4><hr>
                                <div style="height:160px; width:100%; text-align: center; font-size: 6rem"><?php echo $count1;?></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="card" style="background-color: rgb(188, 135, 235);">
                            <div class="card-body">
                                <h4 class="card-title"><span class="lstick"></span>Products</h4><hr>
                                <div style="height:160px; width:100%; text-align: center; font-size: 6rem"><?php echo $count2;?></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="card" style="background-color: rgb(235, 135, 135);">
                            <div class="card-body">
                                <h4 class="card-title"><span class="lstick"></span>Total Stocks</h4><hr>
                                <div style="height:160px; width:100%; text-align: center; font-size: 6rem"><?php echo $count3['SUM(stock)'];?></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="card" style="background-color: rgb(235, 135, 235);">
                            <div class="card-body">
                                <h4 class="card-title"><span class="lstick"></span>Total Income</h4><hr>
                                <div style="height:160px; width:100%; text-align: center; font-size: 5rem"><?php echo $count4['SUM(totalamount)'];?></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="card" style="background-color: rgb(220, 235, 135);">
                            <div class="card-body">
                                <h4 class="card-title"><span class="lstick"></span>Products Sold</h4><hr>
                                <div style="height:160px; width:100%; text-align: center; font-size: 6rem"><?php echo $count5['Count(Name)']-$count6['Count(id)'];?></div>
                                
                            </div>
                        </div>
                    </div>
                
            
        <?php include 'footer.php'; ?>