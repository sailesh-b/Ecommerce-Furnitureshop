<?php
include 'dbconnect.php';

$name=$_POST['name'];
$email=$_COOKIE['UserName'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$totalcost=$_POST['cost'];
$idlist=$_POST['id'];


$fulladdress=$address.','.$city.','.$state;

$check=$conn->query("SELECT * FROM user where Email='$email'");
$row=mysqli_fetch_assoc($check);
		if(!$row['Address']){
			$conn->query("UPDATE `user` SET `Address`='$address',`City`='$city',`Pincode`='$zip',`State`='$state' WHERE Email='$email'");
		}

$conn->query("INSERT INTO `payment`(`email`,`totalamount`) VALUES ('$email', '$totalcost')");
$res = $conn->query("SELECT * FROM `payment` ORDER BY id DESC LIMIT 1");
$pay=mysqli_fetch_assoc($res);

$payid=$pay['id'];

foreach ($idlist as $arr){
   $conn->query("INSERT INTO `orders`(`Name`, `Email`, `Address`, `Zip`, `Phone`, `productid`, `totalcost`, `paymentid`, `status`) VALUES ('$name', '$email', '$fulladdress', '$zip', '$phone', '$arr', '$totalcost','$payid','Cancelled')");
   $conn->query("DELETE FROM cart WHERE `cart`.`productid` = '$arr' and `cart`.`user`='$email'");

}

header("location: placeorder.php?payid=$payid");

?>