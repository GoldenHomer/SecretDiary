<?php
	
	session_start();

	if ($_GET["logout"]==1 AND $_SESSION['id']) {
		session_destroy();

		$message = "You have been logged out.";
	}

	include("connection.php");

	if ($_POST['submit']=="Sign Up") {
		if (!$_POST['email']) {
			$error.="Please enter your email.";
		}
		else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$error.="Please enter a valid email address.";
		}

		if (!$_POST['password']) {
			$error.="Please enter your password.";
		}
		else {
			if (strlen($_POST['password']) < 8) {
				$error.="Please enter a password.";
			}

			if (!preg_match('`[A-Z]`', $_POST['password'])) {
				$error.="Include at least one capital letter in your password.";
			}
		}

		if ($error) {
			$error = "There were error(s) in your signup info: ".$error;
		}
		else {
			$query="SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."'"; // Whoa, all these double and single quotes look nasty.

			$result = mysqli_query($link, $query);

			echo $results = mysqli_num_rows($result);

			if ($results) {
				$error = "That email address is already registered. Perhaps you want to log in?";
			}
			else {
				$query="INSERT INTO 'users' ('email', 'password') VALUES('".mysqli_real_escape_string($link, $_POST['email'])."', '"md5(md5($_POST['email']).$_POST['password'])."')";

				mysqli_query($link, $query);

				echo "You have signed up.";

				$_SESSION['id']=mysqli_insert_id($link);


				header("Location:mainpage.php");
			}
		}
	}

	if ($_POST['submit']=="Log In") {
		$query="SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['loginemail'])."' AND password='".md5(md5($_POST['email']).$_POST['loginpassword'])."' LIMIT 1";

		mysqli_query($link, $query);

		$result = mysqli_query($link, $query);

		$row = mysqli_fetch_array($result);

		if ($row) {
			$_SESSION['id']=$row['id'];

			header("Location:mainpage.php");
		}
		else {
			$error = "Could not find a user with that email and password.";
		}
	}
?>