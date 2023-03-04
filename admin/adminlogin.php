<?php
include 'dbconnect.php';

		$name=$_POST['name'];
		$password=$_POST['password'];
		$check=$conn->query("SELECT * FROM admin where username='$name' and password = '$password'");
		if(mysqli_num_rows($check)){
			setcookie("Admin", $name, time() + (86400 * 30), "/");
			header('location: index.php');
		}
		else{
			echo "<script>
			alert('invalid password!');
			window.location = (\"login.php\");
			</script>";
		}
?>