<!DOCTYPE html>
<html>

<head>
	<title>I</title>
</head>

<body>
	<center>
		<?php
session_start();

		$conn = mysqli_connect("localhost", "root", "", "activity");
		
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$confirmpassword = $_REQUEST['confirmpassword'];
		$address = $_REQUEST['address'];
		$number = $_REQUEST['number'];
		
		$usernamechecker = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
				
				if(mysqli_num_rows($usernamechecker) > 0){
					echo "<script> alert('Username already exists');</script>";
					echo "<script>location.replace('register.php')</script>";
					
				}else{
		
		if($password == $confirmpassword){
				
		$sql = "INSERT INTO user (username, password,address,number) VALUES ('$username','$password','$address','$number') ";
		 mysqli_query($conn, $sql);
			
			echo "<script> alert('Registration success'); </script>";
			echo "<script>location.replace('login.php')</script>";
			
		}else{
				echo "<script> alert('Password does not match'); </script>";
				echo "<script>location.replace('register.php')</script>";
		}
				}
				
		
		?>
	
	</center>
</body>

</html>
