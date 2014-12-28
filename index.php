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
					<a class="navbar-brand">ThisApp</a>
				</div>

				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#background">Home</a></li>
						<li><a href="#details">About</a></li>
						<li><a href="#footer">Download the app</a></li>
					</ul>
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
					<h1 class="topMargin">SV World-Changing App #41903457</h1>
					<p class="lead">This will not make any money.</p>
					<p>Product Hunt hosts many examples.</p>
					<p class="bold topMargin">Interested in reality? Join the mailing list.</p>

					<form class="topMargin">
						<div class="input-group">
							<span class="input-group-addon">@</span>
							<input type="email" class="form-control" placeholder="Your email" />
						</div>
						
						<input type="submit" class="btn btn-success btn-lg topMargin" />

					</form>
				</div>
			</div>
		</div>

		<div class="container contentContainer" id="details">
			<div class="row center">
				<h1 class="center title">This app is a bigger failure than paying $3000+ rent to temporarily forget homeless people live outside your SOMA closet.</h1>
				<p class="lead center">But what makes it sweet is you can order $4 toast and bagels flown in from NY.</p>
			</div>

			<div class="row marginBottom">
				<div class="col-md-4 topMargin">
					<h2><span class="glyphicon glyphicon-ban-circle"></span>Header</h2>
					Can't forget what Austin is like now.
					<button class="btn btn-success topMargin">Sign me up please.</button> 
				</div>

				<div class="col-md-4 topMargin">
 	 	 			<h2><span class="glyphicon glyphicon-off"></span>Header</h2>
 	 	 			<p>Live-music-capital-of-the-world title does not mean the music is good. What does it take to get a gig? An acoustic guitar and your band being named Fedora Cuff Chukka and the Magnesium Whistleblowers?</p>
 	 	 			
 	 	 			<button class="btn btn-success marginTop">Sign Up!</button>
 	 	 	
 	 	 		</div>

 	 	 		<div class="col-md-4 marginTop">
 	 	 			<h2><span class="glyphicon glyphicon-pencil"></span> Header</h2>
 	 	 			<p>But Austin is slightly better than College Station. Junny Foosball.</p>
 	 	 			
 	 	 			<button class="btn btn-success marginTop">Sign Up!</button>
 	 	 		</div>
			</div>
		</div>

		<div class="container contentContainer" id="footer">
			<div class="row">
				<h1 class="center">Download the app</h1>
				<p class="lead">Only for Windows smartphones.</p>
				<p class="center"><img src="win_store.png" class="appStoreImg"></p>
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