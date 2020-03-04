<html>


<body>
<div class="all">
		<?php
		// Insert the config.php page
		include 'config.php';
		// Get the id
		$id = $_GET["id"];
		// Selective database
		$sql2 = "SELECT * FROM pokedex WHERE ID = '$id' ";
    $result = mysqli_query($conn, $sql2);
   if (mysqli_num_rows($result) > 0) {
		 // output data of each row
		 // Assign values to each variable
       while($row = mysqli_fetch_assoc($result)) {
       $PokemonId = $row['ID'];
			 $Name = $row["name"];


       }
   	}
   ?>
	 <!-- Select what needs to be modified -->
	 <form action="updateinfo.php" method="POST">
		<br>
		<br>
		<span>ID </span><input type="text" value="<?php echo $PokemonId;?>" name="ID">
		<br>
		<span>Name </span><input type="text" value="<?php echo $Name;?>" name="name">
		<br>

		<br>
		<!-- The submit button -->
		<div class="submit">
			<input type="submit" value="Submit">
		</div>
	</form>
</div>


	</body>
	</html>
