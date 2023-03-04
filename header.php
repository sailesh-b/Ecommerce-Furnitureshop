<?php
$title = basename($_SERVER['PHP_SELF'],".php");
include 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>basco - <?php echo ucwords($title); ?></title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- Owl carousel -->
      <link rel="stylesheet" href="OwlCarousel2-2.3.4\dist\assets\owl.carousel.min.css">
<link rel="stylesheet" href="OwlCarousel2-2.3.4\dist\assets\owl.theme.default.min.css">
      <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>


   <body class="main-layout inner_page">
      <!-- loader  -->
      
      <!-- end loader -->
      
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="head-top">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-3">
                     <div class="logo">
                        <a href="index.php"><img src="images/logo_footer.png" /></a>
                     </div>
                  </div>
                  <div class="col-sm-9">
                     <ul class="email text_align_right">
                        <li class="d_none"> <a href="furniture.php">Furniture</a></li>
                        <li class="d_none"><a href="kitchen.php">Kitchen</a></li>
                        <li class="d_none"><a href="bath.php">Bath</a></li>
                        <li class="d_none"><a href="dining.php">Dining</a></li>
                        <li class="d_none"><a href="matress.php">Matress</a></li>
                        <li class="d_none"><a href="decor.php">Decor</a></li>

                        <?php if(isset($_COOKIE['UserName'])){
    ?>
                        <li class="d_none"><a href="myorders.php">My Orders</a></li>
                        <li class="d_none"><a href="wishlist.php"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                        <li class="d_none"><a href="cart.php"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
                        <div class="dropdow">
                           <a class="dropdown-toggle" style="color: #fff;" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                              <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
                           </a>
                        
                           <div class="dropdown-menu">
                             <a class="dropdown-item" href="profile.php">Profile</a>
                             <a class="dropdown-item" href="logout.php">Log Out</a>
                           </div>
                         </div>
<?php } 
else{?>
                        <li class="d_none"> <a href="login.php">Login/Signup <i class="fa fa-user" aria-hidden="true"></i></a> </li>
<?php } ?>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>

