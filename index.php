<!DOCTYPE html>
<?php
require_once('konfiguration.php');
$db_link = mysqli_connect (
    MYSQL_HOST, 
    MYSQL_BENUTZER, 
    MYSQL_KENNWORT, 
    MYSQL_DATENBANK
);

if ( $db_link )
{
	echo "Datenbank funktioniert";
	$sql = "SELECT * FROM users";
	$result = $db_link->query($sql);
    if($result->num_rows >0){
    	while($row = $result->fetch_assoc()){
    	}
    }

}else{
	echo "Datenbank funktioniert nicht";
}
?>
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
</head>
<body>
	<div class="main-container">
		<form class="form-signin">
			<label for="inputEmail"></label>
			<div class="inner-addon left-addon">
				<i class="glyphicon glyphicon-user"></i>
				<input type="text" class="form-control" placeholder="Benutzername" required=""/>
			</div>
			<div class="inner-addon left-addon">
				<i class="glyphicon glyphicon-lock"></i>
				<input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" maxlength="4" pattern="[0-9]*">
			</div>
			<button class="btn weihnachtsbutton btn-lg btn-block " type="submit">Login</button>
		</form>
	</div>
</body>
</html>
