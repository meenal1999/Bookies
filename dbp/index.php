<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: signin.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: project.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
	<div class="center-container" style="min-height: 700px">
		<div class="header-w3l">
			<a href="project.php"><h1 style="font-size: 50px;">Bookies Home Page</h1></a>
		</div>
	
		<div class="main-content-agile">
			<div class="wthree-pro">
				<h2>Logged In</h2>
			</div>
			<br><br><br>
			<?php if (isset($_SESSION['success'])) : ?>
			<div  >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<br><br>
			<p  style="font-size: 50px;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<br>
			<p  style="font-size: 20px;"> <a href="index.php?logout='1'" style="color: White;">logout</a> </p>
		<?php endif ?>



<br>
<br><br>
<br>
<br><br>
</div></div>
<br>
<br><br><br>
<br><br>

</body>
</html>
