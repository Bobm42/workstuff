<html>
<head>
<title>Add a Fruit</title>
<link rel="stylesheet" type="text/css" href="css/data.css">
</head>
<body>

<h1>Update the fruit</h1>

<form action="searchfruit.php" method="post">
SEARCH Fruit: <input type="text" name="searchfruit">
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
	echo "<td>" . " ". $row['colour'] ."</td>";
	echo "<td>" . $row['country'] ."</td></tr>";
	
	}
		echo "</table>";
    /* free result set */
    mysqli_free_result($result);
?>

<h3>Add a fruit</h3>
	<table>
			<form action="insertfruittable.php" method="post">
<tr><td>Name :</td><td> <input type="text" name="name"></td></tr>
<tr><td>Type :</td><td> <input type="text" name="type"></td></tr>
<tr><td>Colour :</td><td> 		<input type="text" name="colour"></td></tr>
<tr><td>Country :</td><td> 		<input type="text" name="country"></td></tr>
			<tr><td></td><td>	<input type="submit" value="Add"></td></tr>
			</form></table>

<p>
<a href="welcome.php">Welcome</a>
<br>
<a href="update.php">Update</a>
<br>
<a href="index.php">LOGOUT</a>

</p>

</body>
</html>
