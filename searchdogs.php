<html>
<head>
<title>Search Dogs</title>
<link rel="stylesheet" type="text/css" href="css/data.css">
</head>
<body>

<?php
session_start();
if(isset($_SESSION['log']))
{
?>

<h1>Search for Dogs</h1>

<?php

$search = $_POST['searchdogs'];

include 'config.php';

if ($result = mysqli_query($conn, "SELECT * FROM dogs where name like '%$search%'")) {
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