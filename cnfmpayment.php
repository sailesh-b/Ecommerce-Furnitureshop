<?php 
include 'dbconnect.php';

$res = $conn->query("SELECT * FROM `payment` ORDER BY id DESC LIMIT 1");
$pay=mysqli_fetch_assoc($res);
$payid=$pay['id'];
$conn->query("UPDATE `payment` SET `status`='1' WHERE id='$payid'");

$conn->query("UPDATE `orders` SET `status`='Order Placed' WHERE paymentid='$payid'");

$product=$conn->query("SELECT productid from orders ORDER BY id DESC LIMIT 1");
$list = $product->fetch_assoc();
$id=$list['productid'];

$conn->query("UPDATE `Products` SET `stock`= stock-1 WHERE `id`='$id'");

echo "<script>
	window.location = (\"myorders.php\");
	</script>";
?>