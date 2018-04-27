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

<form action="countfruit.php" method="post">
How many? <select name="countfruitcolour">
		<option value="orange" name="orange">orange</option>
		<option value="yellow" name="yellow">yellow</option>
		<option value="green" name="green">green</option>
		<option value="red" name="red">red</option>
		<option value="blue" name="blue">blue</option>
		<option value="brown" name="brown">brown</option>
		<option value="plum" name="plum">plum</option>
						</select><br><br>
	<input type="submit" value="Select">
</form><br>

<?php

$search = $_POST['countfruitcolour'];
echo "</br>";

include 'config.php';

$sql = "SELECT count(colour) as total from fruit where colour = '$search'";
$resultc = mysqli_query($conn, $sql);
$values = mysqli_fetch_assoc($resultc);
$num_rows = $values['total'];
echo $search;
echo " appears on is own ";
echo $num_rows;
echo " times";
echo "</br>";

$sqla = "SELECT count(colour) as totalall from fruit where colour like '%$search%'";
$resulta = mysqli_query($conn, $sqla);
$valuesa = mysqli_fetch_assoc($resulta);
$num_rowsa = $valuesa['totalall'];
echo $search;
echo " appears in total " ;
echo $num_rowsa;
echo " times";

if ($result = mysqli_query($conn, "SELECT colour FROM fruit where colour like '%$search%'"));

	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>". "COLOUR" ."</th></tr>";

while($row = mysqli_fetch_array($result)){

	echo "<td>" . $row['colour'] . "</td></tr>";

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