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
$sql = "SELECT * FROM car;";
$result = $conn->query($sql);
?>

<?php
if ($result->num_rows > 0) {
  // Show each data returned by mysql
  while($row = $result->fetch_assoc()) {
?>

	<!-- USING HTML HERE : Here I am using php within html tags -->
  <table width="400" border="2" cellpadding="2" cellspacing='1' align="center">

           <tr bgcolor="#2ECCFA">
                     <th> CarID</th>
                     <th>Position X/Y</th>
                     <th> Speed</th>
                     <th>Time</th>
           </tr>
<?php
           echo "<tr>";
              echo "<td>".$row['carID'],"</td>";
              echo "<td>".$row['position'],"</td>";
              echo "<td>".$row['speed'],"</td>";
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
