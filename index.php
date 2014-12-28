<?php include("login.php"); ?>

<!doctype html>
<html lang="en">
	<head>
		<title>Landing Page</title>
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
					<form class="navbar-form navbar-right">
						<div class="form-group">
							<input type="email" placeholder="Email" class="form-control">
							<input type="password" placeholder="Password" class="form-control">
							<button type="submit" class="btn btn-success">Log In</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="container contentContainer" id="background">
			<div class="row">
				<div class="col-md-6 col-md-offset-3" id="topRow">
					<h1 class="topMargin">Diary of a Mad Woman</h1>
					<p class="bold topMargin">Your own private diary. No, the NSA doesn't care enough.</p>

					<form class="topMargin" method="post">
						<div class="input-group">
							<label form="email">Email Address</label>
							<input type="email" class="form-control" placeholder="Your email" />
						</div>

						<div class="input-group">
							<label form="password">Password</label>
							<input type="password" class="form-control" placeholder="Password" />
						</div>
						
						<input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg topMargin" />

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