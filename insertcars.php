<html>
<head>
<title>Add a new car</title>
<link rel="stylesheet" type="text/css" href="css/data.css">
</head>
<body>

<?php
session_start();
if(isset($_SESSION['log']))
{
?>

<h1>Add a car</h1>

			<form action="searchcars.php" method="post">
SEARCH Cars: <input type="text" name="searchcars">
			<input type="submit" value="Search">
			</form>

<?php

include 'config.php';

if ($result = mysqli_query($conn, "SELECT * FROM CARS ORDER by name")) {
	printf("<p> Select returned %d rows.\n </p>", mysqli_num_rows($result));
}


	echo "<table border='1'>";
	echo "<tr><th>". "NAME" ."</th>";
	echo "<th>". "MAKE" ."</th>";
	echo "<th>". "COLOUR" ."</th>";
	echo "<th>". " COUNTRY " ."</th></tr>";
while($row = mysqli_fetch_array($result)){	
	echo "<td>" . $row['name'] ."</td>";
	echo "<td>" . $row['make'] ."</td>";
	echo "<td>" . " ". $row['colour'] ."</td>";
	echo "<td>" . $row['country'] ."</td></tr>";
	}
	echo "</table>";
	
    /* free result set */
    mysqli_free_result($result);
?>	


<h3>Add a Car</h3>
		<table>
			<form action="insertcarstable.php" method="post">
<tr><td>Name :</td><td> <input type="text" name="name"></td></tr>
<tr><td>Make :</td><td> <input type="text" name="make"></td></tr>
<tr><td>Colour :</td><td> <input type="text" name="colour"></td></tr>
<tr><td>Country :</td><td> <input type="text" name="country"></td></tr>
<tr><td></td><td><input type="submit" value="Add"></td><tr>
			</form></table>

<p>
<a href="welcome.php">Welcome</a>
<br>
<a href="update.php">Update</a>
<br>
<a href="index.php">LOGOUT</a>
</p>

<?php

}
else
{
	echo "Please logon first";
	header("refresh:2;url=index.php");
}

?>

</body>
</html>
