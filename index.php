<?php
	
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
				$error.="Please enter a password."
			}

			if (!preg_match('`[A-Z]`', $_POST['password'])) {
				$error.="Include at least one capital letter in your password."
			}
		}

		if ($error) {
			echo "There were error(s) in your signup info: ".$error;
		}
		else {
			
		}
	}

?>

<form method="post">
	<input type="email" name="email" id="email" />
	<input type="password" name="password" />
	<input type="submit" name="submit" value="Sign up" />
</form>