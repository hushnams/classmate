<?php 
	
session_start ();
$username = $_SESSION['username'];

if(!isset($_SESSION["login"])) {
}else {
	header("location:login.php");
}

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "activity";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
$sql = "SELECT * FROM user WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$username = $row['username'];
$address = $row['address'];
$number = $row['number'];
	
?>
<head>
<title>Main Page</title>
</head>
<center><h1>Hello! Welcome to Main Page, <ins><?php echo $username ?></ins></h1></center>
<?php echo $address ?><br>
<?php echo $number ?>
<a href="page1.php"><h2><font color="blue">PAGE 1</font></h2>
<a href="page2.php"><h2><font color="blue">PAGE 2</font></h2>
<a href="page3.php"><h2><font color="blue">PAGE 3</font></h2><br>
<a href="logout.php"><h2><font color="red">Logout</font></h2>
