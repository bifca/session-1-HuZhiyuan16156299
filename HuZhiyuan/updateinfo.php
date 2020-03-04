<?php

//Get the SQL Server Configuration File
include 'config.php';

if(!$conn){
	die("Connection Failed");

}

//Write a SQL query that updates the database below.
//The SQL will start INSERT INTO...
$sql2 = "
	UPDATE pokedex
	SET
	ID = '".$_POST['ID']."',
	name = '".$_POST['name']."'


	WHERE
	ID = ".$_POST['ID']."
	";



//If it is successful it will redirect you to the home page.
if (mysqli_query($conn, $sql2)){
header("Location: index.php");
}
//If it fails, it will tell you it has failed.
else{
	echo "user creation failed".$sql2."<br>".mysqli_error($conn);

}
?>
