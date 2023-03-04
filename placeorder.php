<?php 
include 'header.php';
if(!isset($_COOKIE['UserName'])){
   header('Location: login.php');
}
$user=$_COOKIE['UserName'];
$id=$_GET['payid'];
?>
<!-- about-->
<div class="about">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <div class="titlepage">
               <h2>Payment</h2>
            </div>
            <h1>Place Order</h1>

            <div class="column-labels">
               <label class="product-image">Image</label>
               <label class="product-details">Product</label>
               <label class="product-price">category</label>
               <label class="product-price">MRP</label>
               <label class="product-line-price">Offer Price</label>
            </div>
            <?php 
            $place = $conn->query("SELECT * FROM `orders` WHERE paymentid='$id'");
            while($list = $place->fetch_assoc())
            {
               $pid=$list['productid'];
               $product=$conn->query("SELECT * FROM `Products` WHERE id='$pid'");
               $item=$product->fetch_assoc();
               ?>
               <div class="product">
                  <div class="product-image">
                     <img src="<?php echo $item['Image']?>">
                  </div>
                  <div class="product-details">
                     <div class="product-title"><h2> <?php echo $item['Name']?></h2></div>
                     <p class="product-description"><?php echo $item['Description']?></p>
                  </div>
                  <div class="product-removal"><?php echo $item['subcategory']?></div>
                  <div class="product-line-price"><del><?php echo $item['MRP']; ?></del></div>
                  <div class="product-line-price"><?php echo $item['Price']; ?></div>

                  <?php 
                  $cost= $list['totalcost'];
                  
                  ?>
               </div>
               <?php 
            }

            if($cost){
               ?>

               <div class="totals">
                  <div class="totals-item">
                     <label>Subtotal</label>
                     <div class="totals-value" id="cart-subtotal"><?php echo $cost-150;?></div>
                  </div>

                  <div class="totals-item">
                     <label>Shipping</label>
                     <div class="totals-value" id="cart-shipping">150</div>
                  </div>

                  <div class="totals-item totals-item-total">
                     <label>Grand Total</label>
                     <div class="totals-value" id="cart-total"><?php echo $cost;?></div>
                  </div>
               </div>
               
            </div>
            </div>
    <div id="paypal-payment-button" style="width:30%;float:right;"></div>
</div>






         </div>
      <?php }
      
         ?>
      </div>
   </div>
</div>

<!-- end about-->
<?php include 'footer.php'; ?>
<script src="https://www.paypal.com/sdk/js?client-id=AbOm8YZ9bpjApp9rLx1AbtilYE37lLyUkPt8WYKhrg3xOWISvLL0Re-jUE5J_Mk6q2mTy4wZQyWrEDiT&disable-funding=credit,card"></script>
<script src="index.js">
    
</script>