<!DOCTYPE html>
<html>
<head>
<title>UD the Fruit</title>
<link rel="stylesheet" type="text/css" href="css/data.css">
</head>
<body>

<h1>Update the fruit</h1>

		<form action="searchfruit.php" method="post">
SEARCH Fruit: 	<input type="text" name="searchfruit">
			<input type="submit" value="Search">
		</form>

<?php

include 'config.php';

if ($result = mysqli_query($conn, "SELECT * FROM Fruit ORDER by name")) {
	printf("<p> Select returned %d rows.\n </p>", mysqli_num_rows($result));
}

	echo "<table border='1'>";	
	echo "<tr><th>". "NAME " ."</th>";
	echo "<th>". "TYPE" ."</th>";
	echo "<th>". "COLOUR" ."</th>";
	echo "<th>". " COUNTRY " ."</th></tr>";
while($row = mysqli_fetch_array($result)){
	echo "<tr><td>" . $row['name'] ."</td>";
	echo "<td>" . $row['type'] ."</td>";
	echo "<td>" . $row['colour'] ."</td>";
	echo "<td>" . $row['country'] ."</td></tr>";
	
	}
		echo "</table>";
	
    /* free result set */
    mysqli_free_result($result);
?>

<h3>Update Fruit Table</h3>
	<table>
		<form action="updatefruittable.php" method="post">
			<tr><td>Column :</td><td> <input type="text" name="Column"></td></tr>
			<tr><td>Value :</td><td> <input type="text" name="Value"></td></tr>
			<tr><td>Where :</td><td> <input type="text" name="Where"></td></tr>
			<tr><td> </td><td><input type="submit" value="Update"><td></tr>
		</form>
	</table>

<p>
<a href="welcome.php">Welcome</a>
<br>
<a href="update.php">Go Back</a>
<br>
<a href="index.php">LOGOUT</a>
</p>

</body>
</html>