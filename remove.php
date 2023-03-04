<?php
include 'dbconnect.php';

$email=$_COOKIE['UserName'];
$id=$_POST['id'];

$res = $conn->query("DELETE FROM cart WHERE `cart`.`productid` = '$id' and `cart`.`user`='$email'");

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>