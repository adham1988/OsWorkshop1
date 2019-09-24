<?php
    include_once 'db.php';
?>

<html>
<head>
      <title>Car Info</title>
   </head>
   <h1 align="center">CAR INFO</h1>
   
<input type="button" value="GET DATA" onClick="location.href=location.href">
<?php
if ($result->num_rows > 0) {
  // Show each data returned by mysql
  while($row = $result->fetch_assoc()) {
?>


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
</html>
