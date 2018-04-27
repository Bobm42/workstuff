<?php


include 'config.php';

if ($result = mysqli_query($conn, "SELECT * from cars INNER JOIN fruit on fruit.country = cars.country")) {
	printf("<p> Select returned %d rows.\n </p>", mysqli_num_rows($result));
}

while($row = mysqli_fetch_array($result)){
	echo "<table>";
	echo "<tr><td>";
	echo $row ['name'];
	echo "</td><td>";
	echo $row ['colour'];
	echo "</td><td>";
	echo $row ['country'];
	echo "</td></tr>";

}

?>