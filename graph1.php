<?php
	/* Database connection settings */
	$host = 'localhost';
	$user = 'username';
	$pass = 'password';
	$db = 'CarInfo';
	$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

	$data1 = '';
	$data2 = '';

	//query to get data from the table
	$sql = "SELECT * FROM `car` WHERE carID = 1";
    $result = mysqli_query($mysqli, $sql);

	//loop through the returned data
	while ($row = mysqli_fetch_array($result)) {

		$data1 = $data1 . '"'. $row['x'].'",';
		$data2 = $data2 . '"'. $row['y'] .'",';
	}

	$data1 = trim($data1,",");
	$data2 = trim($data2,",");
?>

<!DOCTYPE html>
<html>
	<head>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
		<title>Accelerometer data</title>



	</head>

	<body>
			<script>


var d = [<?php echo $data1; ?>]
console.log(d);
var c = [<?php echo $data2; ?>]
console.log(d);

			</script>
	    </div>

	</body>
</html>
<!DOCTYPE HTML>
<html>
<head>
  <script type="text/javascript">


    window.onload = function () {
var d = [<?php echo $data1; ?>]
var c = [<?php echo $data2; ?>]
console.log(d);
var limit = d.length;
var data = [];
var dataSeries = { type: "line" };
var dataPoints = [];
for (var i = 0; i < limit; i += 1) {
	dataPoints.push({
		x: parseInt(d[i]),
		y: parseInt(c[i])
	});
}
dataSeries.dataPoints = dataPoints;
data.push(dataSeries);

//Better to construct options first and then pass it as a parameter
var options = {
	zoomEnabled: true,
	animationEnabled: true,
	title: {
		text: "Car 1 movements"
	},
	axisY: {
		includeZero: true,
		lineThickness: 1
	},
	data: data  // random data
};

var chart = new CanvasJS.Chart("chartContainer", options);
chart.render();

}
</script>

<style>
	.graf {
		height: 90vh;
		width: 100%;
		border: 1px solid black;
	}
</style>

</head>
<body>
<div id="chartContainer" class="graf"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</body>
</html>
