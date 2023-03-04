<?php include 'header.php';
if(!isset($_COOKIE['UserName'])){
   header('Location: login.php');
}
$user=$_COOKIE['UserName'];
?>
      <!-- services -->
      <div class="services_main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>WISH LIST</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="row">
                     <?php 
                     $wish = $conn->query("SELECT * FROM `wishlist` WHERE userid='$user'");
                     while($list = $wish->fetch_assoc())
                     {
                        $pid=$list['productid'];
                        $product=$conn->query("SELECT * FROM `Products` WHERE id='$pid'");
                        $item=$product->fetch_assoc();

                     ?>
                     <div class="col-4 mt-5">
                              <a href="description.php?productid=<?php echo $item['id']?>" class="card" style="width: 20rem;">
                                 <img src="<?php echo $item['Image']?>" class="card-img-top" alt="...">
                                 <div class="card-body">
                                 <h3 class="card-title"><?php echo $item['Name']?></h3>
                                 <p class="card-text"><s> &#x20B9; <?php echo $item['MRP']?></s> &nbsp;</p>
                                 <p class="card-text"><b> &#x20B9; <?php echo $item['Price']?></b></p>
                                 </div>
                              </a>
                           </div>
                  <?php 
               }
                  ?>
                     
                  </div>
               </div>
            </div>

            
      </div>
<br><br>
      <!-- end services -->
      <?php include 'footer.php';?>
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
   </body>
</html>
