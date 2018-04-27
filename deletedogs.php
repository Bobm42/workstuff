<html>
<head>
<title>Delete a car</title>
<link rel="stylesheet" type="text/css" href="css/data.css">
</head>
<body>

<?php
session_start();
if(isset($_SESSION['log']))
{
?>

<h1>Search a dog</h1>
<form action="searchdogs.php" method="post">
SEARCH Dogs: <input type="text" name="searchdogs">
		<input type="submit" value="Search">
		</form>

<?php

include 'config.php';

if ($result = mysqli_query($conn, "SELECT * FROM dogs ORDER by name")) {
	printf("<p> Select returned %d rows.\n </p>", mysqli_num_rows($result));
}


	echo "<table border='1'>";
	echo "<tr><th>". "NAME" ."</th>";
	echo "<th>". "COLOUR" ."</th>";
	echo "<th>". "BREED" ."</th></tr>";
while($row = mysqli_fetch_array($result)){	
	echo "<td>" . $row['name'] ."</td>";
	echo "<td>" . $row['colour'] ."</td>";
	echo "<td>" . $row['breed'] ."</td></tr>";
	}
	echo "</table>";
	
    /* free result set */
    mysqli_free_result($result);
?>	


<h3>Delete a Dog</h3>
	<table>
		<form action="deletedogstable.php" method="post">
			<tr><td>Where name = :</td><td> <input type="text" name="Where"></td></tr>
			<tr><td></td><td><input type="submit" value="Delete"></td></tr>
		</form>
	</table>

<p>
<a href="welcome.php">Welcome</a>
<br>
<a href="update.php">Update</a>
<br>
<button onclick="goBack()">Go Back</button>


<script>
function goBack() {
    window.history.back();
}
</script>
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