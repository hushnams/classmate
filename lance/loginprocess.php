<!DOCTYPE html>
<head>
<body>
<title>Error page</title>
</body>
</head>
</html>
<?php

    session_start();

     
 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "activity";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if($row['username'] == $username && $row['password'] == $password){
	header("location:index1.php");
	session_start();
	$_SESSION['username'] = $username;
}else {
    echo "<script>alert('Please enter valid id and password')</script>";
	
    echo "<script>location.replace('login.php')</script>";
}



?>
