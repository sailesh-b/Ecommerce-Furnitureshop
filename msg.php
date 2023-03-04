<?php 
include 'dbconnect.php';
$name=$_POST['Name'];
$email=$_POST['Email'];
$phone=$_POST['Phone'];
$message=$_POST['Message'];

$conn->query("INSERT INTO `contact`(`Name`, `Email`, `Phone`, `Message`) VALUES ('$name','$email','$phone','$message')");

echo "<script>
	alert('Message received!');
	window.location = (\"contact.php\");
	</script>";
?>