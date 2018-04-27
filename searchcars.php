<html>
<head>
<title>Search Cars</title>
<link rel="stylesheet" type="text/css" href="css/data.css">
</head>
<body>

<?php
session_start();
if(isset($_SESSION['log']))
{
?>

<h1>Search for a car</h1>

<?php

$search = $_POST['searchcars'];

include 'config.php';

if ($result = mysqli_query($conn, "SELECT * FROM cars where name like '%$search%'")) {
	printf("<p> Select returned %d rows.\n </p>", mysqli_num_rows($result));
}

	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>". "NAME" ."</th>";
	echo "<th>". "MAKE" ."</th>";
	echo "<th>". "COLOUR" ."</th>";
	echo "<th>". "COUNTRY" ."</th></tr>";

while($row = mysqli_fetch_array($result)){

	echo "<tr><td>" . $row['name'] ."</td>";	
	echo "<td>" . $row['make'] ."</td>";
	echo "<td>" . $row['colour'] ."</td>";
	echo "<td>" . $row['country'] ."</td></tr>";

	}
		echo "</table>";
	


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