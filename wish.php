<?php
include 'dbconnect.php';

if(!isset($_COOKIE['UserName'])){
	header('Location: login.php');
}
else{
	$product=$_POST['id'];
$user=$_COOKIE['UserName'];

$conn->query("INSERT INTO `wishlist`(`userid`, `productid`) VALUES ('$user','$product')");

header('Location: ' . $_SERVER['HTTP_REFERER']);

}

?>