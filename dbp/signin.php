<?php include('server.php') ?>

<html lang="en">
<head>
<title>User Sign In</title>
<!-- To set Favicon-->
<link rel="icon" href="../cropped-favicon.png" type="image/gif">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>

<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/mystyle.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link href="fonts/font1.css" rel="stylesheet">
<link href="fonts/font2.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.10/css/mdb.min.css" rel="stylesheet">

<?php
	if(isset($_REQUEST["a"]))
	{
		echo "<script>alert('Wrong Credentials');</script>";
	}
?>
</head>
<body>
<div data-vide-bg="video/color1">


      



	<div class="center-container">
		<div class="header-w3l">
			<a href="project.php"><h1 style="font-size: 50px;">Bookies</h1></a>
		</div>
	
		<div class="main-content-agile">
			<div class="wthree-pro">
				<h2>Sign In</h2>
			</div>
			<div class="sub-main-w3">
				<form action="index.php" method="post">
							<?php include('errors.php'); ?>

					<div class="icon1">
						<i>Username</i>
						<input placeholder=" " name="id" type="text" required="">
					</div>
					
					<div class="icon2">
						<i>Password</i>
						<input  placeholder=" " name="password" type="password" required="">
					</div>
					<!-- <div class="rem-w3">
						<span class="check-w3"><input type="checkbox" name="rem"/>Remember Me</span>
						<a href="resetpassword.php" >Forgot Password?</a>
						<div class="clear"></div>
					</div> -->
					<input type="submit" value="Sign in" class="btn btn-secondary" >
				</form>

				<form action="signup.php" method="post">

					<h6>New to Bookies? Sign Up Here</h6>
					<input type="submit" value="Sign Up" class="btn btn-secondary" >

					<!-- <div class="navbar-right social-icons"> 
						<a href="#" class="one-w3ls" ><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
						<a href="#" class="two-w3ls" ><i class="fa fa-google-plus" aria-hidden="true"></i>Google+</a>
						<div class="clear"></div>
					</div>
 -->				</form>
			</div>
		</div>
		<div class="footer">
			<p>&copy; 2018 Sign In Form. All rights reserved</p>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery.vide.min.js"></script>
</body>
</html>