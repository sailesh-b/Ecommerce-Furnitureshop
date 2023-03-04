<?php 
   include 'header.php';
   $user=$_COOKIE['UserName'];
   $res = $conn->query("SELECT * from `user` where Email = '$user'");
   $row=mysqli_fetch_assoc($res); 

?>
      <!-- services -->
      <div class="services_main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>PROFILE</h2>
                  </div>
                  
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12 bgcolor">
                  <form action="validate.php" method="POST">
                     <div class="form-row">
                       <div class="form-group col-md-6">
                         <label for="inputText">Name</label>
                         <input type="hidden" class="form-control" id="inputEmail4" name="id" value="<?php echo $row['Userid'];?>">
                         <input type="text" class="form-control" id="inputEmail4" name="name" value="<?php echo $row['Name'];?>">
                       </div>
                       <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="email" value="<?php echo $row['Email'];?>">
                      </div>
                     </div>
                     <div class="form-group">
                       <label for="inputAddress">Phone</label>
                       <input type="text" class="form-control" id="inputAddress" name="phone"placeholder="Mobile num" value="<?php echo $row['phone'];?>">
                     </div>
                     <div class="form-group">
                       <label for="inputAddress2">Address</label>
                       <input type="text" class="form-control" id="inputAddress2" name="address"placeholder="Apartment, studio, or floor" <?php if(isset($row['Address'])){ ?>value="<?php echo $row['Address'];?>" <?php } ?> >
                     </div>
                     <div class="form-row">
                       <div class="form-group col-md-6">
                         <label for="inputCity">City</label>
                         <input type="text" class="form-control" id="inputCity" name="city" <?php if(isset($row['City'])){ ?>value="<?php echo $row['City'];?>" <?php } ?>>
                       </div>
                       <div class="form-group col-md-4">
                        <label for="inputCity">State</label>
                        <input type="text" class="form-control" id="inputCity" name="state" <?php if(isset($row['State'])){ ?>value="<?php echo $row['State'];?>" <?php } ?>>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputZip">Zip</label>
                         <input type="text" class="form-control" id="inputZip" name="zip" <?php if(isset($row['Pincode'])){ ?>value="<?php echo $row['Pincode'];?>" <?php } ?>>
                       </div>
                     </div>
                     <button type="submit" class="btn btn-dark" name="input" value="Update" style="float:right;">Save Changes</button>

                   </form>

               </div>
            </div>
         </div>
      </div>
      <!-- end services -->
  <?php include 'footer.php'; ?>
