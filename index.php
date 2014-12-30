<?php include("login.php"); ?>

<!doctype html>
<html lang="en">
	<head>
		<title>Diary Sign In</title>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="myStyle.css">
		<!--[if lt IE 9]>
 			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
 			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
 		<![endif]-->

	</head>

	<body data-spy="scroll" data-target=".navbar-collapse">
		<div id="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand">Diary</a>
				</div>

				<div class="collapse navbar-collapse">
					<form class="navbar-form navbar-right" method="post">
						<div class="form-group">
							<input type="email" name="loginemail" placeholder="Email" class="form-control" value="<?php echo addslashes($_POST['loginemail']); ?>" />
							<input type="password" name="loginpassword" placeholder="Password" class="form-control" value="<?php echo addslashes($_POST['loginpassword']); ?>" />
							<input type="submit" name="submit" class="btn btn-success" value="Log In" />
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="container contentContainer" id="background">
			<div class="row">
				<div class="col-md-6 col-md-offset-3" id="topRow">
					<h1 class="topMargin">Secret Diary</h1>
					<p class="lead">Your own private diary. No, the NSA doesn't care enough.</p>

					<?php 
						if ($error) {
							echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
						}

						if ($message) {
							echo '<div class="alert alert-success">'.addslashes($message).'</div>';
							
						}
					?>

					<!-- There might be a missing div or one that's needed around here-->
					<p class="bold topMargin">Interested yet? Sign up below.</p>

					<form class="topMargin" method="post">
						<div class="form-group">
							<label for="email">Email Address</label>
							<input type="email" class="form-control" placeholder="Your email" value="<?php echo addslashes($_POST['email']); ?>" />
						</div>

						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" placeholder="Password" value="<?php echo addslashes($_POST['password']); ?>"/>
						</div>
						
						<input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg topMargin" />

					</form>
					
					<form method="post">
						<input type="email" name="email" id="email" value="<?php echo addslashes($_POST['email']); ?>"/>
						<input type="password" name="password" value="<?php echo addslashes($_POST['password']); ?>" />
						<input type="submit" name="submit" value="Sign Up" />
					</form>

					<form method="post">
						<input type="email" name="loginemail" id="loginemail" value="<?php echo addslashes($_POST['email']); ?>"/>
						<input type="password" name="loginpassword" value="<?php echo addslashes($_POST['password']); ?>" />
						<input type="submit" name="submit" value="Log In" />
					</form>
				</div>
			</div>
		</div>

		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

		<script>
			$(".contentContainer").css("min-height", $(window).height()); // Set height to window
		</script>
	</body>
</html>