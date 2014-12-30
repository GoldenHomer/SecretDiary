<?php 
	session_start();

	include("connection.php");

	$query="SELECT diary FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";

	$result = mysqli_query($link, $query);

	$row = mysqli_fetch_array($result);

	$diary = $row['diary'];
?>

<!doctype html>
<html lang="en">
	<head>
		<title>Sekret Diary</title>
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
				<div class="navbar-header pull-left">
					<a class="navbar-brand">Diary</a>
				</div>

				<div class="pull-right">
					<ul class="navbar-nav nav">
						<li><a href="index.php?logout=1">Log Out</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="container contentContainer" id="background">
			<div class="row">
				<div class="col-md-6 col-md-offset-3" id="topRow">
					<textarea class="form-control">
						<?php echo $diary: ?>
					</textarea>
				</div>
			</div>
		</div>

		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

		<script>
			$(".contentContainer").css("min-height", $(window).height()); // Set height to window
			$("textarea").css("height", $(window).height()-110);

			$("textarea").keyup(function() {
				$.post("updatediary.php", {diary:$("textarea").val()} ); // diary entry automatically update using AJAX function post as seen in this line.
			});
		</script>
	</body>
</html>