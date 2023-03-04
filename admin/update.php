<?php 
include 'dbconnect.php';
print_r($_POST);

$id=$_POST['id'];
$name=$_POST['name'];
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

$conn->query("UPDATE `Products` SET `Name`='$name',`Image`='$image',`MRP`='$mrp',`Price`='$price',`Description`='$des',`Dimension`='$dimension',`weight`='$weight',`material`='$material',`color`='$color',`brand`='$brand',`instruction`='$ins',`warranty`='$warranty',`stock`='$stock' WHERE `id`='$id'");

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>