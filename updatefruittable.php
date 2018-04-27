<?php

$column = $_POST['Column'];
$value = $_POST['Value'];
$where = $_POST['Where'];


include 'config.php';

$noname = true;
$notname = mysqli_query($conn, "SELECT * from fruit WHERE name = '$where'");
$nodata = mysqli_query($conn, "SELECT * from fruit WHERE name = $column or type = $column or colour = $column or country = $column");

	if ($where != $noname) {
		echo "Please enter some data!!";
		header("refresh:1;url=updatefruit.php");
}	elseif ($column != $noname){
		echo "Please enter a data type!";
		header("refresh:1;url=updatefruit.php");
}	elseif ($notname->num_rows == 0) {
		echo "Not on database";
		header("refresh:2;url=updatefruit.php");
}	elseif ($nodata != $noname) {
		echo "No such datatype";
		header("refresh:10;url=updatefruit.php");
} 	elseif ($result = mysqli_query($conn, "UPDATE Fruit SET $column = '$value' WHERE name = '$where'")) {
		echo "UPDATED";
		header("refresh:1;url=updatefruit.php");
}


?>