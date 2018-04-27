<?php
session_start();
if(isset($_SESSION['log']))
{
	
//$selectOption = $_POST['grabsql'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome 222</title>
<link rel="stylesheet" type="text/css" href="css/data.css">
</head>
<body>

<h1>Please select data here</h1>

<form action="data2.php" method="post">

Make your selection : <select name="grabsql">
		<option value="fruit" name="fruit">Fruit</option>
		<option value="cars" name="cars">Cars</option>
		<option value="dogs" name="dogs">Dogs</option>
						</select><br><br>
	<input type="submit" value="Select">
</form><br>

<p><a href="index.php">LOGOUT</a></p>

</body>
</html>

<?php

}
else
{
	echo "Please logon first";
	header("refresh:2;url=index.php");
}
?>