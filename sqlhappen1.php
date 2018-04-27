<?php

include 'config.php';

if ($result = mysqli_query($conn, "SELECT * FROM dogs order by name")) {
	printf("<p> Select returned %d rows.\n </p>", mysqli_num_rows($result));
}

	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>". "NAME" ."</th>";
	echo "<th>". "COLOUR" ."</th>";
	echo "<th>". "BREED" ."</th></tr>";
while($row = mysqli_fetch_array($result)){
	echo "<tr><td>" . $row['name'] ."</td>";	
	echo "<td>" . " ". $row['colour'] ."</td>";
	echo "<td>" . " ". $row['breed'] ."</td></tr>";
	}
		echo "</table>";

mysqli_free_result($result);

?>
