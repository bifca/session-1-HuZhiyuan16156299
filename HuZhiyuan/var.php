
<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pokemon";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  // Selective database
  $sql2 = "SELECT * FROM pokedex";
  $sql = "SELECT * FROM pokedex WHERE ID = '".$id."'";
  $result = mysqli_query($conn, $sql);
  $result2 = mysqli_query($conn, $sql2);


  ?>
