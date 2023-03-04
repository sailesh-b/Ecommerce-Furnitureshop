<?php 
include 'dbconnect.php';
if($conn){
	$input = $_POST['input'];
	if("$input"=="Login"){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$check=$conn->query("SELECT * FROM user where Email='$email' and Password = '$password'");
		if(mysqli_num_rows($check)){
			setcookie("UserName", $email, time() + (86400 * 30), "/");
			echo "<script>
			window.history.go(-2);
			</script>";
		}
		else{
			echo "<script>
			alert('invalid password!');
			window.location = (\"login.php\");
			</script>";
		}
	}
	elseif("$input"=="Signup"){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$password=$_POST['password'];
		$check=$conn->query("SELECT * FROM user where Email='$email' or phone='$phone'");
		if(mysqli_num_rows($check)){
			echo "<script>
			alert('User alredy exist!');
			window.location = (\"login.php\");
			</script>";
		}
		else{
			$conn->query("INSERT INTO `user`(`Name`, `Email`, `Password`, `phone`) VALUES ('$name', '$email', '$password', '$phone')");
			setcookie("UserName", $email, time() + (86400 * 30), "/");
			header('location: index.php');
		}	

	}
	elseif("$input"=="Update"){
		$id=$_POST['id'];
		$name=$_POST['name'];
		$email=$_COOKIE['UserName'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$pincode=$_POST['zip'];
		$state=$_POST['state'];
		$conn->query("UPDATE `user` SET `Name`= '$name', `Address`='$address',`City`='$city',`Pincode`='$pincode',`State`='$state' WHERE `Userid`='$id'");
			setcookie("UserName", $email, time() + (86400 * 30), "/");
			header('location: profile.php');
	}
}
else{
	header('location: index.php');
}
mysqli_close($conn);
?>