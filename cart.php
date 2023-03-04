<?php 
include 'header.php';
if(!isset($_COOKIE['UserName'])){
   header('Location: login.php');
}
$user=$_COOKIE['UserName'];




?>
<!-- about-->
<div class="about">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <div class="titlepage">
               <h2>CART</h2>
            </div>
            <h1>Shopping Cart</h1>
            <?php 
            $cart = $conn->query("SELECT * FROM `cart` WHERE user='$user'");
            if(mysqli_num_rows($cart)){
               ?>
               <div class="column-labels">
                  <label class="product-image">Image</label>
                  <label class="product-details">Product</label>
                  <label class="product-price">Price</label>
                  <label class="product-quantity">Remove</label>

                  <label class="product-line-price">Total</label>
               </div>
               <?php 

               $cost=0;
               $cartlist=array();
               while($list = $cart->fetch_assoc())
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
                     <div class="product-price"><?php echo $item['Price']?></div>
                     <form action="remove.php" method="POST">
                        <div class="product-removal">
                           <input type="text" name="id" value="<?php echo $item['id']?>" hidden>
                           <button type="submit" class="remove-product">
                              Remove
                           </button>
                        </div>
                     </form>
                     <div class="product-line-price"><?php echo $item['Price']; ?></div>

                     <?php 
                     $cost= $cost+$item['Price'];
                     array_push($cartlist,$item['id']);
                     ?>
                  </div>
                  <?php 
               }


               ?>

               <div class="totals">
                  <div class="totals-item">
                     <label>Subtotal</label>
                     <div class="totals-value" id="cart-subtotal"><?php echo $cost;?></div>
                  </div>

                  <div class="totals-item">
                     <label>Shipping</label>
                     <div class="totals-value" id="cart-shipping">150</div>
                  </div>

                  <div class="totals-item totals-item-total">
                     <label>Grand Total</label>
                     <div class="totals-value" id="cart-total"><?php echo $cost+150;?></div>
                  </div>
               </div>
               <form action="checkout.php" method="POST">
                  <input type="text" name="cost" value="<?php echo $cost+150;?>" hidden>
                  
                  <?php foreach ($cartlist as $array)
                  { ?>
                     <input type="hidden" name="id[]" value="<?php echo $array; ?>"/>
                     <?php 
                  }
                  ?>
                  <button type="submit" class="checkout">Checkout</button>
               </form> 
            </div>


         </div>
      <?php }
      else{
         ?>

         
         <br><br><br><br><br><br><h2 align="center">Shopping cart is empty <a href="furniture.php" style="color: blue">Continue Shopping</a></h3><br><br><br><br><br><br>
</div>
            <?php 
         }
         ?>
      </div>
   </div>
</div>

<?php include 'footer.php'; ?>