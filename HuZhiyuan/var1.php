<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pokemon";
$pokeid = 1;
$turl = "index.php?pokeid=";

if(isset($_GET["pokeid"])){
    $pokeid = $_GET["pokeid"];
}

 if ($pokeid - 1 > 0 ) {
   $last = $pokeid - 1 ;
 }else {
   $last = 1 ;
 }

 if ($pokeid < 151 ) {
   $next = $pokeid + 1;
 } else {
   $next = 1;
 }

$lastURL = $turl.$last;
$nextURL = $turl.$next;

$conn = mysqli_connect($servername, $username, $password, $dbname);
?>
<center>
<?php

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM pokedex WHERE ID = $pokeid";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "<a href=".$lastURL."><img src='http://localhost/HuZhiyuan/icons/last.png' class='pic'></a>";
    echo "<table border='1' style='display:inline; margin:10'>";
     while($row = mysqli_fetch_assoc($result)) {
   echo "<tr><td> " . $row["ID"]. "</td><td>". $row["name"] .
   "</td><td>".'<img src="'. $row["icon"].'" width="100px">'."</td></tr>";
     }
    echo "</table>";

} else {
    echo "0 results";
}

echo
"<a href=".$nextURL."><img src='http://localhost/HuZhiyuan/icons/next.png' class='pic'></a>";
   mysqli_close($conn);
?>
</center>
