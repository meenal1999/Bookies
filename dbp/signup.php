<?php include('server.php') ?>
<html lang="en">
<head>
<title>User Sign Up</title>
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
				<h2>Sign Up</h2>
			</div>
		<div class="sub-main-w3">

			 <form method="post" action="register.php">

					<?php include('errors.php'); ?>


					<div class="icon2">
						<i>Username</i>
						<input placeholder=" "  required="" type="text" name="username" value="<?php echo $username; ?>">
					</div>
					
					<div class="icon2">
						<i>Email</i>
						<input type="text" name="email" value="<?php echo $email; ?>" required="">

					</div>
					<div class="icon2">
						<i>Phonne No.</i>
						<input placeholder=" "  required="" type="text" name="phoneno" value="<?php echo $phoneno; ?>">
					</div>
					
					<div class="icon2">
						<i>Password</i>
						<input  placeholder=" " name="password_1" type="password" required="">
					</div>
					<div class="icon2">
						<i>Confirm Password</i>
						<input  placeholder=" " name="password_2" type="password" required="">
					</div>
				
					
					<div class="input-group">
						<button type="submit" class="btn btn-secondary" name="reg_user" style="border-radius: 30px;width: 100%; font-size: 16px">Sign Up</button>
					</div>
</form>
<form method="post" action="signin.php">
					<p style="color: white;"><br>
						Already a member?<br>
						 <input type="submit" value="Sign in" class="btn btn-secondary" >

					</p>
				</form>


<!-- 
	<div class="center-container">
		<div class="header-w3l">
			<a href="project.php"><h1 style="font-size: 50px;">Bookies</h1></a>
		</div>
	
		<div class="main-content-agile">
			<div class="wthree-pro">
				<h2>Sign Up</h2>
			</div>
			<div class="sub-main-w3">	
				<form action="loginall/register.php" method="post">
					<div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fa fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" name="username" value="<?php echo $username; ?>">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Your username</label>
        </div>
        <div class="md-form mb-5">
          <i class="fa fa-envelope prefix grey-text"></i>
          <input type="email" id="orangeForm-email" class="form-control validate" name="email" value="<?php echo $email; ?>">
          <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
        </div>
        <div class="input-group">
			<label>Phone No.</label>
			<input type="text" name="phoneno" value="<?php echo $phoneno; ?>">
		</div>
        <div class="md-form mb-4">
          <i class="fa fa-lock prefix grey-text"></i>
          <input type="password" id="orangeForm-pass" class="form-control validate" name="password_1">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
        </div>
        <div class="md-form mb-4">
          <i class="fa fa-lock prefix grey-text"></i>
          <input type="password" id="orangeForm-pass" class="form-control validate" name="password_2">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Retype password</label>
        </div>

      </div>

					
					<input type="submit" value="Sign Up" class="btn btn-secondary" >

					<h6>or sign in with</h6>

					<div class="navbar-right social-icons"> 
						<a href="#" class="one-w3ls" ><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
						<a href="#" class="two-w3ls" ><i class="fa fa-google-plus" aria-hidden="true"></i>Google+</a>
						<div class="clear"></div>
					</div>
				</form>
			</div>
		</div>
		<div class="footer">
			<p>&copy; 2018 Sign In Form. All rights reserved</p>
		</div>
	</div>
</div> -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery.vide.min.js"></script>
</body>
</html>