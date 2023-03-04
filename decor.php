<?php include 'header.php'; ?>
      <!-- services -->
      <div class="services_main">
         <div class="container">
            <div class="row">
               <div class="col-md-13">
                  <div class="titlepage">
                     <h2><?php echo ucwords($title); ?></h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <ul class="nav nav-tabs md-tabs border_none" id="myTabMD" role="tablist">
                     <?php
                     $name = $conn->query("SELECT * FROM `Category` WHERE Category='$title'");
                     $i=1;
                     while($row = $name->fetch_assoc()){
                     ?>
                     <li class="nav-item lisertab">
                        <a class="nav-link servi_tab" id="living-tab-md" data-toggle="tab" href="#<?php echo $i++;?>" role="tab" aria-controls="home-md"
                           aria-selected="true"><?php echo $row['subCategory']?></a>
                     </li>
                     <?php 
                     ;
                  }
                  ?>
                    
                  </ul>
                  
                  <div class="tab-content card back_bg" id="myTabContentMD">
                     <div class="tab-pane fade show active" id="1" role="tabpanel" aria-labelledby="living-tab-md">
                        <div class="row">
                           <?php 
                           $name1 = $conn->query("SELECT * FROM `Category` WHERE Category='$title'");
                           $row1 = $name1->fetch_assoc();
                           $subcat= $row1['subCategory'];

                           $product = $conn->query("SELECT * FROM `Products` WHERE category='$title' and subcategory='$subcat'");
                           while($item = $product->fetch_assoc()){
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
                     <div class="tab-pane fade" id="2" role="tabpanel" aria-labelledby="bedroom-tab-md">
                        <div class="row">
                           <?php 
                           
                           $row1 = $name1->fetch_assoc();
                           $subcat= $row1['subCategory'];

                           $product = $conn->query("SELECT * FROM `Products` WHERE category='$title' and subcategory='$subcat'");
                           while($item = $product->fetch_assoc()){
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
                     <div class="tab-pane fade" id="3" role="tabpanel" aria-labelledby="dining-tab-md">
                        <div class="row">
                           <?php 
                           
                           $row1 = $name1->fetch_assoc();
                           $subcat= $row1['subCategory'];

                           $product = $conn->query("SELECT * FROM `Products` WHERE category='$title' and subcategory='$subcat'");
                           while($item = $product->fetch_assoc()){
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
                     <div class="tab-pane fade" id="4" role="tabpanel" aria-labelledby="utility-tab-md">
                        <div class="row">
                           <?php 
                           
                           $row1 = $name1->fetch_assoc();
                           $subcat= $row1['subCategory'];

                           $product = $conn->query("SELECT * FROM `Products` WHERE category='$title' and subcategory='$subcat'");
                           while($item = $product->fetch_assoc()){
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
            </div>
         </div>
      </div>
      <!-- end services -->
      <!-- footer -->
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
   </body>
</html>
