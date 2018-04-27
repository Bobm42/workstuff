<?php
session_start();
if(isset($_SESSION['log']))
{

?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<link rel="stylesheet" type="text/css" href="css/data.css">
</head>
<body>


<h1>Data selected</h1> 

<?php 
echo "<p>". "You Selected ";

   $option = isset($_POST['grabsql']) ? $_POST['grabsql'] : false;
   if ($option) {
      echo htmlentities($_POST['grabsql'], ENT_QUOTES, "UTF-8");
   } else {
     echo "task option is required";
     exit; 
   }

echo "<br>";

include 'config.php';

if ($result = mysqli_query($conn, "SELECT * FROM $option ORDER by name")) {
	printf("<p> Select returned %d rows.\n </p>", mysqli_num_rows($result));
	
echo "</p>";

	echo "<table border='1'>";
	echo "<tr><th>". "NAME" ."</td>";
	echo "<th>". "COLOUR" ."</th></tr>";
while($row = mysqli_fetch_array($result)){	
	echo "<tr><td>" . $row['name'] ."</td>";
	echo "<td>" . $row['colour'] ."</td></tr>";

	}
	echo "</table>";
	
    /* free result set */
    mysqli_free_result($result);
}

//	$sql = "SELECT 'name' FROM fruit WHERE colour = 'Orange' ";
//	echo $sql;
//	$mydata = mysqli_query($sql, $conn) or die(mysqli_error());;
//	while ($record=mysqli_fetch_array($mydata)){
		
//		echo $record['name'];
//		echo "</br> ";
		
//	}
	
	
//		if ($stmt = mysqlii_prepare($conn, $sql)){
			
//			mysqlii_stmt_execute(£stmt);
			
//      }

?>

<p></br></br>
<a href ="update.php">UPDATE or ADD</a>
</br></br>
<a href="index.php">LOGOUT</a></p>

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