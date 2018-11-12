<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$phoneno  = "";
	$errors = array(); 

	$_SESSION['success'] = "";

	// connect to database

	$db = new mysqli("localhost","root","","book_webpage");
	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		$phoneno = mysqli_real_escape_string($db, $_POST['phoneno']);
		

		// form validation: ensure that the form is correctly filled
		if (empty($phoneno)) { array_push($errors, "Phone no. is required"); }

		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
		// $query1 ="SELECT MAX(Acc_Id) FROM account;"

		// mysqli_query($db, $query1);


		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = ($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO account (Acc_Id,Name, Email,Phone_no, Password) 
					  VALUES(1,'$username',0,0,200, '$email', 'phoneno', $password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE Name='$username' AND Password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>