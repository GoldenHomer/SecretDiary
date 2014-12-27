<?php
	
	session_start();

	if ($_POST['submit']) {
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
			echo "There were error(s) in your signup info: ".$error;
		}
		else {
			$link = mysqli_connect("localhost", "cl54-firstdb-2oe", "9DuSsSk_4MjNFEk", "cl54-firstdb-2oe");
			$query="SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."'"; // Whoa, all these double and single quotes look nasty.

			$result = mysqli_query($link, $query);

			echo $results = mysqli_num_rows($result);

			if ($results) {
				echo "That email address is already registered. Perhaps you want to log in?";
			}
			else {
				$query="INSERT INTO 'users' ('email', 'password') VALUES('".mysqli_real_escape_string($link, $_POST['email'])."', md5(md5(%_POST['email']).$_POST['password']))";

				mysqli_query($link, $query);

				echo "You have signed up.";

				$_SESSION['id']=mysqli_insert_id($link);

				print_r($_SESSION);

				//Redirect to logged-in page.
			}
		}
	}

?>

<form method="post">
	<input type="email" name="email" id="email" />
	<input type="password" name="password" />
	<input type="submit" name="submit" value="Sign up" />
</form>