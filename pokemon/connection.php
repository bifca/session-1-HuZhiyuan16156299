<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "pokemon";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	$sql = "SELECT * FROM films";

?>
