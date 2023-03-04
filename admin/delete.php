<?php 
$id=$_GET['productid'];
include 'dbconnect.php';
$conn->query("DELETE FROM Products WHERE `Products`.`id` = '$id'");
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>