<?php 
include 'dbconnect.php';

if(!isset($_COOKIE['UserName'])){
	header('Location: login.php');
}
else{
$product=$_POST['id'];
$user=$_COOKIE['UserName'];


$check = $conn->query("SELECT * from `cart` where user='$user' and productid='$product'");
$row=mysqli_fetch_assoc($check);
if(mysqli_num_rows($check)){
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}
else{
	$conn->query("INSERT INTO `cart`(`user`, `productid`) VALUES ('$user','$product')");
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}
}


?>