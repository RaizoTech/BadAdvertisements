<?php 

session_start();

if(isset($_SESSION['client-id']) && isset($_SESSION['subs-stats'])){
	header("Location: index.php");
	exit();
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="newLogin/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="badads_image/ICON SHAPE (WHITE).png" type="image/png" />
	<title>BAD ADVERTISEMENTS</title>
</head>
<body style="background: #000000;">
	<img class="wave" src="newLogin/img/339789804_245691227840982_2412361979842394990_n.png">
	<div class="container">
		<div class="img">
			<img src="newLogin/img/MAIN (WHITE).png">
		</div>
		<div class="login-content">
			<form action="client_sign.php" method="POST">
				<div class="mobile-shit">
					<img src="newLogin/img/MAIN (WHITE).png">
				</div>
				<h2 class="title"></h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="username" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="newLogin/js/main.js"></script>
</body>
</html>