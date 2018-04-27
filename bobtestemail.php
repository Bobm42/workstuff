<html>
<title>Bobtest email</title>
<body>

<?php
session_start();
if(isset($_SESSION['log']))
{
?>

<h1>Bobtest email</h1>

<?php

$conn = mysqli_connect('localhost', 'root', '', 'test');
if (!$conn) {
	die('could not connect'. mysqli_error());
}


if ($result = mysqli_query($conn, "SELECT * FROM bobtest ORDER by 'name'")) {
	printf("<p> Select returned %d rows.\n </p>", mysqli_num_rows($result));
}

	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>". "NAME" ."</th>";
	echo "<th>". "Firstname" ."</th>";
	echo "<th>". "Lastname" ."</th>";
	echo "<th>". "Age" ."</th>";
	echo "<th>". "Email" ."</th></tr>";

while($row = mysqli_fetch_array($result)){

	echo '<tr><td>' . $row['name'] .'</td>';	
	echo '<td>' . $row['fname'] .'</td>';
	echo '<td>' . $row['sname'] .'</td>';
	echo '<td>' . $row['age'] . '</td>';
	echo '<td>' .'<a href=mailto:>'. $row['email'] .'</a></td></tr>';
//	echo '<td>' '<a href = "mailto:'.$row['email'].'">'. $row['email'] .'</a></td></tr>';

	}
		echo "</table>";
		

?>



<br>
<a href="welcome.php">Welcome</a>
<br>
<a href="update.php">Update</a>

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