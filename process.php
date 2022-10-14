<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "newlogin";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$username = $_POST['username'];
$password = $_POST['upass'];

$sql = "SELECT * FROM user WHERE username = '$username' AND upass = '$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if($row['username'] == $username && $row['upass'] == $password){
    echo "Welcome ".$username. " you are successfully logged in !!";
}else {
    echo "<script>alert('Check your Credentials')</script>";
    echo "<script>location.replace('index.html)</script>";
}



?>