<?php include 'header.php'; 
$product = $conn->query("SELECT * from `Products` ");
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
                                                <th style="width: 20%;">Name</th>
                                                <th style="width: 20%;">Description</th>
                                                <th>Category</th>
                                                <th>Price</th>
                                                <th>Brand</th>
                                                <th>Colour</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i=1;
                                            while($list = $product->fetch_assoc()){

                                            ?>
                                            <tr>
                                                <td><?php echo $i++ ?></td>
                                                <td><?php echo $list['Name'] ?></td>
                                                <td><?php echo $list['Description'] ?></td>
                                                <td><?php echo $list['category'].'|'.$list['subcategory'] ?></td>
                                                <td><?php echo $list['Price'] ?></td>
                                                <td><?php echo $list['brand'] ?></td>
                                                <td><?php echo $list['color'] ?></td>
                                                <td><a href="productupload.php?productid=<?php echo $list['id'] ?>"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>&ensp;<a href="delete.php?productid=<?php echo $list['id'] ?>"><button type="button" class="btn btn-primary btn-sm">Delete</button></a></td>
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
<script type="text/javascript">
    function redirect()
    {
    var url = "";
    window.location(url);
    }
    </script>
            
  <?php include 'footer.php'; ?>          