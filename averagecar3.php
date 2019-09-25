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
$sql = "SELECT carID, AVG(speed) AS 'AVERAGE SPEED' FROM car WHERE carID = 3";
$result = $conn->query($sql);
?>

<html>
<head>
      <title>Car3 Speed average</title>
   </head>
    <h1 align="center">CAR ID 3 Speed AVG</h1>


   <table width="400" border="2" cellpadding="2" cellspacing='1' align="center">

            <tr bgcolor="#2ECCFA">

                      <th>Speed AVG</th>
            </tr>

<input type="button" value="GET DATA"  onClick="location.href=location.href"  style="float: right;>

<div id="button"><a href="index.php">HOME</a></div>
<br></br>
<div id="button"><a href="car3.php"= 1">Car ID = 3</a></div>

<?php
if ($result->num_rows > 0) {
  // Show each data returned by mysql
  while($row = $result->fetch_assoc()) {
?>


  <table width="480" border="2" cellpadding="2" cellspacing='1' align="center">


<?php
           echo "<tr>";

              echo "<td>".$row['AVERAGE SPEED'],"</td>";


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
