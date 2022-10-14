<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $db = 'newlogin';

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

    $username = $_POST['username'];
    $passowrd = $_POST['password'];
    //echo $username;
    //echo $password;




    $sql ="SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = msqli_fetch_array($result);

    if($user == "" && $password== ""){
        header('location:new.html');
    }

    if($row['username'] == $username && $row['password'] == $password){
        echo "Welcome ".$username. " you are succesfully Logged in !!";

    }else{
        echo "Thankyou and try again";
    }




?>