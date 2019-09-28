<?php
    include_once 'db.php';
?>

<html>
<head>
      <title>Car Info</title>
   </head>
    <h1 align="center">CAR INFO</h1>


   <table width="420" border="2" cellpadding="2" cellspacing='1' align="center">

            <tr bgcolor="#2ECCFA">
                      <th> CarID</th>
                      <th>[X]</th>
                      <th>[Y]</th>
                      <th>Time</th>

            </tr>

<input type="button" value="GET DATA"  onClick="location.href=location.href"  style="float: right;>

<div id="button"><a href="car1.php">Car ID = 1</a></div>
<br></br>
<div id="button"><a href="car2.php">Car ID = 2</a></div>
<br></br>
<div id="button"><a href="car3.php">Car ID = 3</a></div>
<?php
if ($result->num_rows > 0) {
  // Show each data returned by mysql
  while($row = $result->fetch_assoc()) {
?>


  <table width="420" border="2" cellpadding="2" cellspacing='1' align="center">


<?php
           echo "<tr>";
              echo "<td>".$row['carID'],"</td>";
              echo "<td>".$row['[x]'],"</td>";
              echo "<td>".$row['[y]'],"</td>";
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
