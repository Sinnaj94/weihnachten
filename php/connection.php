<?php
$dbCon = mysqli_connect("localhost", "root", "", "weihnachten");
if (mysqli_connect_errno()){
	echo "Could not connect to the database: " . mysqli_connect_error();
}else{
	echo "Connection to the Database worked.<br>";
}
?>