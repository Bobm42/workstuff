<html>
<head>
<title>Search All</title>
<link rel="stylesheet" type="text/css" href="css/data.css">
</head>
<body>

<?php
session_start();
if(isset($_SESSION['log']))
{
	
?>

<h1>Search All Colour</h1>

				<form action="searchall.php" method="post">
SEARCH Fruit: 		<input type="text" name="searchall">
					<input type="submit" name="submit" value="submit">
				</form>
				

<?php

if (isset($_POST['submit'])){
$search = $_POST['searchall'];

include 'config.php';

if ($count = mysqli_query($conn2, "SELECT * from cars INNER JOIN fruit on fruit.colour = cars.colour")) {
	printf("<p> Select returned %d rows.\n </p>", mysqli_num_rows($count));
}

if ($result = mysqli_query($conn, "SELECT name, colour FROM cars where colour like '%$search%' 
union SELECT name, colour FROM fruit where colour like '%$search%'
union SELECT name, colour FROM dogs where colour like '%$search%'")) {
	printf("<p> Select returned %d rows.\n </p>", mysqli_num_rows($result));
}


	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>". "NAME" ."</th>";
	echo "<th>". "COLOUR" ."</th></tr>";

while($row = mysqli_fetch_array($result)){

	echo "<tr><td>" . $row['name'] ."</td>";	
	echo "<td>" . $row['colour'] . "</td></tr>";

	}
		echo "</table>";
}	

?>

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