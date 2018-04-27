<html>
<head>
<title>Delete a fruit</title>
<link rel="stylesheet" type="text/css" href="css/data.css">
</head>
<body>

<?php
session_start();
if(isset($_SESSION['log']))
{
?>

<h1>Search fruit</h1>
<form action="searchfruit.php" method="post">
SEARCH Fruit: <input type="text" name="searchfruit">
		<input type="submit" value="Search">
		</form>
		
<?php

include 'config.php';


if ($result = mysqli_query($conn, "SELECT * FROM fruit ORDER by name")) {
	printf("<p> Select returned %d rows.\n ", mysqli_num_rows($result));
	echo "</p>";
}


	echo "<table border='1'>";
	echo "<tr><th>". "NAME" ."</th>";
	echo "<th>". "TYPE" ."</th>";
	echo "<th>". "COLOUR" ."</th>";
	echo "<th>". " COUNTRY " ."</th></tr>";
while($row = mysqli_fetch_array($result)){	
	echo "<td>" . $row['name'] ."</td>";
	echo "<td>" . $row['type'] ."</td>";
	echo "<td>" . $row['colour'] ."</td>";
	echo "<td>" . $row['country'] ."</td></tr>";
	}
	echo "</table>";
	
    /* free result set */
    mysqli_free_result($result);
?>	


<h3>Delete Fruit Table</h3>
	<table>
		<form action="deletefruittable.php" method="post">
			<tr><td>Where name :</td><td> <input type="text" name="Where"></td></tr>
			<tr><td></td><td><input type="submit" value="Delete"></td></tr>
	</form></table>

<p>
<a href="welcome.php">Welcome</a>
<br>
<a href="update.php">GO BACK</a>
<br>
<a href="index.php">LOGOUT</a>

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