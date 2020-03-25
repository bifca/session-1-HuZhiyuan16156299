<?php

require 'connection.php';

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<style>
		.center{
			text-align: center;
			border: 3px solid #65acfe;
			background:url(images/2.png);
		}

	</style>
	<title>POKEMON</title>
</head>
<body>
	<body background="images/1.jpg"
	      style=" background-repeat:no-repeat ;
	background-size:100% 100%;
	background-attachment: fixed;">
	<div class="container">
		<div class="row">
			<div class="col-12 center">
				<img src="images/logo.png" height="150px"><br/>
			</div>
		</div>
		<hr>
		<div class="row">
			<?php
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_assoc($result)){
						echo "<div class='col-12 col-md-4'>";
						echo "<a href='film.php?film=".$row['imdbID']."'><img src='poster/".$row['poster']."' width='100%' ></a></div>";

					}
				}

			?>
		</div>



	</div>
</body>
</html>
