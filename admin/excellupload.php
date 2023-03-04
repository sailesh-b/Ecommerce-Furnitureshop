<?php
include 'dbconnect.php';

if(isset($_POST["submit_file"]))
{
   $file = $_FILES["file"]["tmp_name"];
   $file_open = fopen($file,"r");
   $count=0;
   while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
   {
      if(!$count){
         $count++;
     }
     else{
         $name=$csv[0];
         $cat=$csv[2];
         $subcat=$csv[3];
         $image=$csv[1];
         $mrp=$csv[4];
         $price=$csv[5];
         $des=$csv[6];
         $brand=$csv[11];
         $dimension=$csv[7];
         $weight=$csv[8];
         $color=$csv[10];
         $material=$csv[9];
         $ins=$csv[12];
         $warranty=$csv[13];
         $stock=$csv[14];

         $conn->query("INSERT INTO `Products`(`Name`, `Image`, `category`, `subcategory`, `MRP`, `Price`, `Description`, `Dimension`, `weight`, `material`, `color`, `brand`, `instruction`, `warranty`, `stock`) VALUES ('$name', '$image', '$cat', '$subcat', '$mrp', '$price', '$des', '$dimension', 'weight', '$material', '$color', '$brand', '$ins', '$warranty','$stock') ");
     }


 }
}

header('location: manageproduct.php');
?>