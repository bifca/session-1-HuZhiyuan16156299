<!DOCTYPE html>
<html>
<head>
	<title>API Showcase</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
	<?php
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		//API KEY AND CITY NAME
		$q = array(
			"appid" => 'b7dbe7c915e7b706d960a1973f5215c8',
			"q" => $_POST['city']
		);

curl_setopt($curl, CURLOPT_URL, "http://api.openweathermap.org/data/2.5/weather"."?".http_build_query($q));

/*$url = "http://api.openweathermap.org/data/2.5/weather"."?".http_build_query($q);
echo $url;
*/
$city_weather = json_decode(curl_exec($curl));

$count = 0;

echo '<div class="container">
		    <div class="row">';
				foreach ($city_weather->weather as $city){
					if ($count == 2){
						echo "</div><div class='row'>";
						$count = 0;
					}
				  echo
					//CITY NAME AND COUNTRY AND COORD
					"<div class='col-12 col-md-12'>"
					."<h1>".$city_weather->name."</h1>"
					."<h2>".$city_weather->sys->country."</h2>"
					."<h3>".$city->main."</h3>"
					."<h5>Lon:".$city_weather->coord->lon."</h5>"
					."<h5>Lat:".$city_weather->coord->lat."</h5>"
					."<br>"
					."</div>"
          // CITY Feels_like ,Description AND Humidity
					."<div class='col-xs-12 col-md-6'>"
					."<h4>Feels like:".$city_weather->main->feels_like."</4>"
					."<h4>Description:".$city->description."</h4>"
					."<h4>Humidity:".$city_weather->main->humidity."</h4>"
					."</div>"
          // CITY_TEMP
					."<div class='col-xs-12 col-md-6'>"
					."<h4>Temp:".$city_weather->main->temp."</h4>"
					."<h4>Temp min:".$city_weather->main->temp_min."</h4>"
					."<h4>Temp max:".$city_weather->main->temp_max."</h4>"
					."</div>";
			  	$count = $count+1;


}
			  echo"</div>";
?>
<hr>
<!-- GO BACK -->
<div class="back">
	<form action="index.php" >
	<input type="submit" value="Back">
	</form>

</body>

</html>
