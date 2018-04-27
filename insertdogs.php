<html>
<head>
<title>Add a Dog</title>
<link rel="stylesheet" type="text/css" href="css/data.css">
</head>
<body>

<?php
session_start();
if(isset($_SESSION['log']))
{
?>

<h1>Add a Dog</h1>
			<form action="searchdogs.php" method="post">
SEARCH Dogs: 	<input type="text" name="searchdogs">
				<input type="submit" value="Search">
			</form>

<?php

include 'config.php';

if ($result = mysqli_query($conn, "SELECT * FROM dogs ORDER by name")) {
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
	
    /* free result set */
    mysqli_free_result($result);
?>

<h3>Add a Dog here</h3>
<form action="insertdogtable.php" method="post">
	<table>
<tr><td>Name :</td><td> <input type="text" name="name"></td></tr>
<tr><td>Breed :</td><td> <input type="text" name="breed"></td></tr>
<tr><td>Colour :</td><td> <input type="text" name="colour"></td></tr>
<tr><td></td><td><input type="submit" value="Add"></td></tr>
	</form></table>

<p>
<a href="welcome.php">Welcome</a>
<br>
<a href="update.php">Update</a>
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
