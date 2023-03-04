<?php 
include 'header.php';
if(!isset($_COOKIE['UserName'])){
   header('Location: login.php');
}
$user=$_COOKIE['UserName'];

?>
<div class="about">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="titlepage">
                     <h2>MY ORDERS</h2>
                  </div>
                  

                  <div class="column-labels">
                     <label class="product-image">Image</label>
                     <label class="product-details">Product</label>
                     <label class="product-price">Price</label>
                     <label class="product-quantity">Category</label>
                     <label class="product-removal">Date orderd</label>
                     <label class="product-line-price">Status</label>
                  </div>
            <?php 
            $order = $conn->query("SELECT * FROM `orders` WHERE Email='$user'");
            while($list = $order->fetch_assoc())
            {
               $pid=$list['productid'];
               $product=$conn->query("SELECT * FROM `Products` WHERE id='$pid'");
               $item=$product->fetch_assoc();
               ?>

                  <div class="product">
                     <a href="description.php?productid=<?php echo $item['id']?>"><div class="product-image">
                        <img src="<?php echo $item['Image']?>">
                     </div>
                     <div class="product-details">
                        <div class="product-title"><h2> <?php echo $item['Name']?> </h2></div>
                        <p class="product-description"><?php echo $item['Description']?></p>
                     </div>
                     <div class="product-price"><?php echo $item['Price']?></div>
                     <div class="product-quantity">
                        <?php echo $item['subcategory']?>
                     </div>
                  </a>
                     <div class="product-removal">
                        <?php echo $list['date']?>
                     </div>
                     <?php 
                     $status=$list['status'];
                     if($status=='Cancelled'){
                        ?>
                        <div class="product-line" style="color:red"> <?php echo $list['status']?></div>
                        <?
                     }
                     else{
                        ?>
                        <div class="product-line" style="color:green"> <?php echo $list['status']?></div>
                        <?
                     }
                     ?>

                  </div>
                  <?php 
            }
?>

                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about-->
<?php include 'footer.php'; ?>