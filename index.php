<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();

if ($_POST['submit']){

	include_once("php/connection.php");
	$name = strip_tags($_POST['name']);
	$password = strip_tags($_POST['password']);
	$sql = "SELECT * FROM users WHERE name = '$name'";
	$query = mysqli_query($dbCon, $sql);
	
	if ($query){
		echo("HALLO");
		$row = mysqli_fetch_row($query);

		$userId = $row[0];
		$dbName = $row[1];
		$db_Password = $row[2];
	}
	if ($name == $dbName && $password == $dbPassword) {
		$_SESSION['name'] = $username;
		$_SESSION['id'] = $userId;
		header('Location: php/user.php');
	} else {
		echo "Incorrect username or password.";
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<!--http://paletton.com/#uid=15C0u0kllllcz++gXw0pJaGu700-->
	<title>Wichteln - Weihnachten 2016</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/stylesheet.css">


	<!-- Latest compiled and minified CSS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="styles/stylesheet.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="scripts/logic.js"></script>

	<!--FONT-->
	<link href="https://fonts.googleapis.com/css?family=Mountains+of+Christmas" rel="stylesheet">

</head>
<body>
	<div class="main-container">
		<div class="form-signin">
			<div class="wichtel_header">
				<h1>Wichteln</h1>
				<h3>2016</h3>
			</div>
			<div class="input-elements">
				<form action="index.php" method="post">	
					<div class="inner-addon left-addon">
						<i class="glyphicon glyphicon-user"></i>
						<input type="text" class="form-control" placeholder="Benutzername" required="" name="name"/>
					</div>
					<div class="inner-addon left-addon">
						<i class="glyphicon glyphicon-lock"></i>
						<input type="password" class="form-control" placeholder="Password" required="" maxlength="4" pattern="[0-9]*" name="password">
					</div>
					<input class="btn weihnachtsbutton btn-lg btn-block" name="submit" value="Login" type="submit"></input>
				</form>
			</div>
		</div>

		<!--img id="candle" src="img/candle_preset.png"-->
	</div>
</body>
</html>
