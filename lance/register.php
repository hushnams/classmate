<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Login Form" />
   
	
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@;400;500;600&display=swap" rel="stylesheet">

   
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    

    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

	
</head>
<body>
<section class="w3l-mockup-form">
        <div class="container">
            
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="alert-close">
                        <span class="fa fa-close"></span>
                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/image2.svg" alt="">
                        </div>
                    </div>
                    <div class="content-wthree">
	<center>
		<h1><font color="green">Registration</font></h1>
		<form action="insert.php" method="post">
			<p>
               <label for="firstName"><font color="green">Username</font></label>
               <input type="text" name="username" id="username" required>
            </p>
 
             
<p>
               <label for="lastName"><font color="green">Password</font></label>
               <input type="password" name="password" id="password"required>
            </p>
 <p>
               <label for="confirmpassword"><font color="green">Confirm Password</font></label>
               <input type="password" name="confirmpassword" id="confirmpassword"required>
            </p>
             
<p>
               <label for="Gender"><font color="green">Address</font></label>
               <input type="text" name="address" id="address"required>
            </p>	
 
             
<p>
               <label for="Address"><font color="green">Contact No.</font></label>
               <input type="text" name="number" id="number"required>
            </p>
 
      

          <button name="submit" class="btn" type="submit">Register</button>
			
                        <div class="social-icons"> <br>
		 <h2><p>Have an account? <a href="login.php"><font color="blue"> Login</font></a>.</p></h2>
		</form>
		</div>
		</section>
		
	</center>
</body>
</html>
