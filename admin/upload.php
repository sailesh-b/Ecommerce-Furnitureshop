<?php 
include 'dbconnect.php';
print_r($_POST);

$name=$_POST['name'];
$cat=$_POST['cat'];
$subcat=$_POST['subcat'];
$image=$_POST['image'];
$mrp=$_POST['mrp'];
$price=$_POST['price'];
$des=$_POST['des'];
$brand=$_POST['brand'];
$dimension=$_POST['dimension'];
$weight=$_POST['weight'];
$color=$_POST['color'];
$material=$_POST['material'];
$ins=$_POST['ins'];
$warranty=$_POST['warranty'];
$stock=$_POST['stock'];

$conn->query("INSERT INTO `Products`(`Name`, `Image`, `category`, `subcategory`, `MRP`, `Price`, `Description`, `Dimension`, `weight`, `material`, `color`, `brand`, `instruction`, `warranty`, `stock`) VALUES ('$name', '$image', '$cat', '$subcat', '$mrp', '$price', '$des', '$dimension', 'weight', '$material', '$color', '$brand', '$ins', '$warranty','$stock') ");

header('location: manageproduct.php');

?>