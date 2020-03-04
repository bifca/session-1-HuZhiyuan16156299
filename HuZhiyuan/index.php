<html>
<head>
	<title>Pokemon</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>



		<div style="width:100%; text-align:center;"><img src='http://localhost/HuZhiyuan/icons/a.png' class='pic'></div>
		<hr>
<div class="top" style="text-align:center">

<?php

   include "var1.php";
	 ?>
<hr>
		<?php

		 include "config.php";

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
		// Selective database
    $sql = "SELECT * FROM pokedex";
    $result = mysqli_query($conn, $sql);


		if(mysqli_num_rows($result)>0){
			echo "<div class='container'<h1  style='font-size:30px;'>Pokemon Updat</h1><div class='row'>";
			$count = 0;
			while($row = mysqli_fetch_assoc($result)){
				$count = $count + 2;
				echo "<div class='col-12 col-sm-6 col-md-4 col-lg-2'>";
				echo "<img class='icon' src='".$row['icon']."' alt='Icon'<h3>".$row["name"]."</h3><p>".$row["classfication"]."</p>";
				echo "<a href='editinfo.php?id=".$row["ID"]."'><button class='button'>Edit</button></a></div>";
				if ($count == 12){
					echo "</div><div class='row'>";
					$count = 0;
				}
			}
			echo "</div>";
		} else {
        echo "0 results";
    }
    mysqli_close($conn);
		?>


</body>
</html>
