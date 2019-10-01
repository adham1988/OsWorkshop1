<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "CarInfo";

// Creating mysql connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Checking mysql connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Writing a mysql query to retrieve data
$sql = "SELECT * FROM car WHERE carID = 2;";
$result = $conn->query($sql);
?>

<html>
<head>
      <title>Car Info</title>
   </head>
    <h1 align="center">CAR ID 2</h1>


   <table width="400" border="2" cellpadding="2" cellspacing='1' align="center">

            <tr bgcolor="#2ECCFA">

              <th>[X]</th>
              <th>[Y]</th>
              <th>Time</th>

            </tr>

<input type="button" value="GET DATA"  onClick="location.href=location.href"  style="float: right;>

<div id="button"><a href="index.php">HOME</a></div>
<div id="button"><a href="graph2.php">graph</a></div>


<?php
if ($result->num_rows > 0) {
  // Show each data returned by mysql
  while($row = $result->fetch_assoc()) {
?>


  <table width="480" border="2" cellpadding="2" cellspacing='1' align="center">


<?php
           echo "<tr>";

           echo "<td>".$row['x'],"</td>";
           echo "<td>".$row['y'],"</td>";
           echo "<td>".$row['time'],"</td>";

          echo "</tr>";
	?>
</table>

<?php
  }
} else {
  echo "0 results";
}

// Closing mysql connection
$conn->close();
?>
</html>
