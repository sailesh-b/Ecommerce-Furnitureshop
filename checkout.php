<?php
include 'header.php';
if(!isset($_COOKIE['UserName'])){
   header('Location: login.php');
}
   $user=$_COOKIE['UserName'];
   $res = $conn->query("SELECT * from `user` where Email = '$user'");
   $row=mysqli_fetch_assoc($res);

   if(!isset($_POST['cost'])){
   header('Location: cart.php');
}

$idlist=$_POST['id'];
$cost=$_POST['cost'];
$scost=$cost-150;
$cart=array();
foreach ($idlist as $array){
   array_push($cart,$array);
}
?>
      <!-- services -->
      <div class="services_main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>CHECKOUT</h2>
                  </div>
                  
               </div>
            </div>
            <div class="row">
               <div class="col-sm-6">
                  <form action="proceed.php" method="POST">
                     
                       <div class="form-group">
                         <label for="inputText">Name</label>
                         <input type="text" class="form-control" id="inputEmail4" name="name" value="<?php echo $row['Name'];?>" required>
                       </div>
                       <div class="form-group">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="email" value="<?php echo $row['Email'];?>" required>
                      </div>
                     
                     <div class="form-group">
                       <label for="inputAddress">Phone No</label>
                       <input type="number" class="form-control" id="inputAddress" name="phone" value="<?php echo $row['phone'];?>" required>
                     </div>
                     <div class="form-group">
                       <label for="inputAddress">Address</label>
                       <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" <?php if(isset($row['Address'])){ ?>value="<?php echo $row['Address'];?>" <?php } ?> required>
                     </div>
                     
                     <div class="form-row">
                       <div class="form-group col-md-5">
                         <label for="inputCity">City</label>
                         <input type="text" class="form-control" id="inputCity" name="city" <?php if(isset($row['Address'])){ ?>value="<?php echo $row['City'];?>" <?php } ?> required>
                       </div>
                       <div class="form-group col-md-4">
                        <label for="inputCity">State</label>
                        <input type="text" class="form-control" id="inputCity" name="state" <?php if(isset($row['Address'])){ ?>value="<?php echo $row['State'];?>" <?php } ?>>
                       </div>
                       <div class="form-group col-md-3">
                         <label for="inputZip">Zip</label>
                         <input type="text" class="form-control" id="inputZip" name="zip" <?php if(isset($row['Address'])){ ?>value="<?php echo $row['Pincode'];?>" <?php } ?> required>
                       </div>
                     </div>
                     
                   

               </div>
               <div class="col-sm-6">
                  <div class="column-labels">
                     <label class="product-image">Image</label>
                     <label class="product-details">Product</label>
                     <label class="product-price">MRP</label>
                     <label class="product-line-price" style="padding-left: 5rem;">Total</label>
                  </div>

                <?php 
                  foreach ($cart as $pid){
                  $product=$conn->query("SELECT * FROM `Products` WHERE id='$pid'");
                  $item=$product->fetch_assoc();
                ?>
                  <div class="product">
                     <div class="product-image">
                        <img src="<?php echo $item['Image']?>">
                     </div>
                     <div class="product-details">
                        <div class="product-title"><h2> <?php echo $item['Name']?> </h2></div>
                        <p class="product-description" ><?php echo $item['subcategory']?></p>
                     </div>
                     <div class="product-price"><del><?php echo $item['MRP']?></del></div>
                     <div class="product-line-price space" style="margin-left: 5rem;"><?php echo $item['Price']?></div>
                  </div>
                  <?php 
               }
               ?>

                  <div class="totals">
                     <div class="totals-item">
                        <label>Subtotal</label>
                        <div class="totals-value" id="cart-subtotal"><?php echo $scost?></div>
                     </div>
                     <div class="totals-item">
                        <label>Inclusive Tax (18%)</label>
                        <div class="totals-value" id="cart-tax"><?php echo $scost*0.18;?></div>
                     </div>
                     <div class="totals-item">
                        <label>Shipping</label>
                        <div class="totals-value" id="cart-shipping">150.00</div>
                     </div>
                     <div class="totals-item totals-item-total">
                        <label>Grand Total</label>
                        <div class="totals-value" id="cart-total"><?php echo $cost; ?></div>
                        <input type="hidden" name="cost" value="<?php echo $cost; ?>" >
                        
                        <?php foreach ($cart as $array)
                  { ?>
                     <input type="hidden" name="id[]" value="<?php echo $array; ?>"/>
                  <?php 
               }
                  ?>
                     </div>
                     <button type="submit" class="btn btn-danger btn-lg" style="float: right">Make Payement</button>
               </div>
               </form>
            </div>
         </div>
      </div>
      <div class="mb-5"></div>
      <!-- end services -->
    <?php include 'footer.php'; ?>