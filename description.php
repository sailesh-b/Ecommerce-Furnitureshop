<?php 
include 'header.php'; 
$productid=$_GET['productid'];
if(isset($_COOKIE['UserName'])){
   $user=$_COOKIE['UserName'];
}

$product = $conn->query("SELECT * FROM `Products` WHERE id='$productid'");
$item = $product->fetch_assoc();
?>
      <!-- services -->
      <div class="services_main">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6">
                  <div class="titlepage">
                     <div class="pro-img text-center">
                        <img src="<?php echo $item['Image'];?>" alt="Sofa" height="400px" width="500px">
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <?php 
              if(isset($_COOKIE['UserName'])){ $wish = $conn->query("SELECT * FROM `wishlist` WHERE userid='$user' and productid='$productid'");
               if(!mysqli_num_rows($wish)){
                  ?>
                  <form action="wish.php" method="POST">
                  <span class="des-title"> <?php echo $item['Name']?></span>
                  <span>
                     <input type="text" name="id" value='<?php echo $item['id'];?>' hidden>
                     <button type="submit" style="background-color: white;"><i id="heart" class="ml-5 fa fa-heart-o fa-2x"></i></button>
                  </span></form>
                  <?php 
                  }
               
                  else{
                  ?>
                  
                  <span class="des-title"> <?php echo $item['Name']?></span>
                  <span>                    
                     <button type="submit" style="background-color: white;"><i id="heart" class="ml-5 fa fa-heart fa-2x"></i></button>
                  </span>
                  <?php 
}
}
else{
   ?>
                  <form action="wish.php" method="POST">
                  <span class="des-title"> <?php echo $item['Name']?></span>
                  <span>                    
                     <button type="submit" style="background-color: white;"><i id="heart" class="ml-5 fa fa-heart-o fa-2x"></i></button>
                  </span></form>
                  <?php 
}
                  ?>
                  <div class="star-rating">
                     <i class="fa fa-star">&nbsp;</i><i class="fa fa-star">&nbsp;</i><i class="fa fa-star"></i>&nbsp;<i class="fa fa-star"></i>&nbsp;<i class="fa fa-star-o"></i> &nbsp;&nbsp;&nbsp; <span><b>3.9 Star Ratings</b></span>
                  </div>
                  <hr>
                  <h4><b>Available offers</b></h4>
                  <div class="mt-2"></div>
                  <i class="fa fa-tags"></i> 5% Unlimited cashback on Axis bank Credit cards <br>
                  <i class="fa fa-tags"></i> 10% cashback upto 1000 on Axis bank Debit cards <br>
                  <i class="fa fa-tags"></i> Flat 500 cashback on HDFC cards <br>
                  <br>
                  <i class="fa fa-tags"></i> Use <b>VSMANTIS</b> coupon code for flat 20% discount <br>
                  <hr>
                  <div class="reg-price">
                     <s> MRP &#x20B9; <?php echo $item['MRP']?> /-</s>
                  </div>
                  <div class="off-price">
                     <b> Offer Price &#x20B9; <?php echo $item['Price']?> /-</b>
                  </div>
                  <div class="mt-2"></div>
                  
                  <form action="addcart.php" method="post">
                        <input type="text" name="id" value='<?php echo $productid;?>' hidden>
                 
                  <div class="mt-3"></div>
                  <span class="main-btn">
                     <button type="submit" class="btn btn-secondary btn-lg" style="width:30%">Add to Cart</button>
                     </form></span><br><span>
                     <form action="checkout.php" method="POST">
                     <input type="text" name="id[]" value='<?php echo $item['id'];?>' hidden>
                     <input type="text" name="cost" value='<?php echo $item['Price']+150;?>' hidden>
                     <button type="submit" class="btn btn-primary btn-lg" style="width:30%">Buy Now</button>
                     </form>
                  
               </div>
            </div>
            <div class="mt-5"></div>
            <div class="row">
               <div class="col-md-12">
                  <div class="ext-content">
                     <div class="row">
                        <div class="col-md-3">
                           <i class="fa fa-credit-card fa-2x"></i> &nbsp; EASY EMI OPTIONS
                        </div>
                        <div class="col-md-3">
                           <i class="fa fa-certificate fa-2x"></i>&nbsp; 1 YEAR WARRANTY
                        </div>
                        <div class="col-md-3">
                           <i class="fa fa-wrench fa-2x"></i> &nbsp; FREE ASSEMBLY
                        </div>
                        <div class="col-md-3">
                           <i class="fa fa-truck fa-2x"></i> &nbsp; FREE SHIPPING
                        </div>
                     </div>
                  </div>
                  <div class="des-box ml-5">
                     <div class="des">PRODUCT DESCRIPTION</div>
                     <h3><b>DESCRIPTION</b></h3><hr>
                     <p><?php echo $item['Description']?></p>
                     
                     
                     <div class="mt-5"></div>
                     <h3><b>OTHER INFORMATION</b></h3><hr>
                     <div><b>Material</b>&emsp; <?php echo $item['material']?></div>
                     <div><b>Dimension </b>&emsp; <?php echo $item['Dimension']?> inch</div>
                     <div><b>Weight</b>&emsp; <?php echo $item['weight']?></div>
                     <div><b>Colour</b>&emsp; <?php echo $item['color']?></div>
                     <div><b>Brand</b>&emsp; <?php echo $item['brand']?></div>
                     <div class="mt-5"></div>
                     <h3><b>Additional details</b></h3><hr>
                     <div><?php echo $item['instruction']?></div>
                  </div>

                  <div class="recommended-product mt-lg-5">
                     <h2>RECOMMENDED TO YOU</h2>
                     <div class="owl-carousel owl-theme mt-4">
                        <a href="#"><div class="item"><img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8aG9tZSUyMHV0aWxpdHl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                           <div class="caro-body">
                              <div class="pro-title">Dining Set 6 Seater</div>
                              <div class="price">&#x20B9; 28000</div>
                           </div>
                        </div></a>
                        <a href="#"><div class="item"><img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8aG9tZSUyMHV0aWxpdHl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                           <div class="caro-body">
                              <div class="pro-title">Dining Set 6 Seater</div>
                              <div class="price">&#x20B9; 28000</div>
                           </div>
                        </div></a>
                        <a href="#"><div class="item"><img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8aG9tZSUyMHV0aWxpdHl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                           <div class="caro-body">
                              <div class="pro-title">Dining Set 6 Seater</div>
                              <div class="price">&#x20B9; 28000</div>
                           </div>
                        </div></a>
                        <a href="#"><div class="item"><img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8aG9tZSUyMHV0aWxpdHl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                           <div class="caro-body">
                              <div class="pro-title">Dining Set 6 Seater</div>
                              <div class="price">&#x20B9; 28000</div>
                           </div>
                        </div></a>
                        <a href="#"><div class="item"><img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8aG9tZSUyMHV0aWxpdHl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                           <div class="caro-body">
                              <div class="pro-title">Dining Set 6 Seater</div>
                              <div class="price">&#x20B9; 28000</div>
                           </div>
                        </div></a>
                        <a href="#"><div class="item"><img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8aG9tZSUyMHV0aWxpdHl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                           <div class="caro-body">
                              <div class="pro-title">Dining Set 6 Seater</div>
                              <div class="price">&#x20B9; 28000</div>
                           </div>
                        </div></a>
                        <a href="#"><div class="item"><img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8aG9tZSUyMHV0aWxpdHl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                           <div class="caro-body">
                              <div class="pro-title">Dining Set 6 Seater</div>
                              <div class="price">&#x20B9; 28000</div>
                           </div>
                        </div></a>
                        <a href="#"><div class="item"><img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8aG9tZSUyMHV0aWxpdHl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                           <div class="caro-body">
                              <div class="pro-title">Dining Set 6 Seater</div>
                              <div class="price">&#x20B9; 28000</div>
                           </div>
                        </div></a>
                        <a href="#"><div class="item"><img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8aG9tZSUyMHV0aWxpdHl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                           <div class="caro-body">
                              <div class="pro-title">Dining Set 6 Seater</div>
                              <div class="price">&#x20B9; 28000</div>
                           </div>
                        </div></a>
                        <a href="#"><div class="item"><img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8aG9tZSUyMHV0aWxpdHl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                           <div class="caro-body">
                              <div class="pro-title">Dining Set 6 Seater</div>
                              <div class="price">&#x20B9; 28000</div>
                           </div>
                        </div></a>
                        <a href="#"><div class="item"><img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8aG9tZSUyMHV0aWxpdHl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                           <div class="caro-body">
                              <div class="pro-title">Dining Set 6 Seater</div>
                              <div class="price">&#x20B9; 28000</div>
                           </div>
                        </div></a>
                        <a href="#"><div class="item"><img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8aG9tZSUyMHV0aWxpdHl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                           <div class="caro-body">
                              <div class="pro-title">Dining Set 6 Seater</div>
                              <div class="price">&#x20B9; 28000</div>
                           </div>
                        </div></a>
                     </div>
                  </div>    
               </div>
            </div>
         </div>
      </div>
      <!-- end services -->
      <?php include 'footer.php'; ?>
      <script src="OwlCarousel2-2.3.4\dist\owl.carousel.min.js"></script>



      <script>
         $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
               0:{
                     items:1
               },
               600:{
                     items:3
               },
               1000:{
                     items:5
               }
            }
})
      </script>


<script>
function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 1 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 1 : value;
  value < 2 ? value = 2 : '';
  value--;
  document.getElementById('number').value = value;
}
</script>
   </body>
</html>
