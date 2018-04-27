<?php

$column = $_POST['Column'];
$value = $_POST['Value'];
$where = $_POST['Where'];


include 'config.php';

$noname = true;
$notname = mysqli_query($conn, "SELECT * from dogs WHERE name = '$where'");
$nodata = mysqli_query($conn, "SELECT * from dogs WHERE name = $column or breed = $column or colour = $column");

	if ($where != $noname) {
		echo "Please enter some data!!";
		header("refresh:1;url=updatedogs.php");
}	elseif ($column != $noname){
		echo "Please enter a data type!";
		header("refresh:1;url=updatedogs.php");
}	elseif ($notname->num_rows == 0) {
		echo "Not on database";
		header("refresh:2;url=updatedogs.php");
}	elseif ($nodata != $noname) {
		echo "No such datatype";
		header("refresh:3;url=updatedogs.php");
} 	elseif ($result = mysqli_query($conn, "UPDATE dogs SET $column = '$value' WHERE name = '$where'")) {
		echo "UPDATED";
		header("refresh:1;url=updatedogs.php");
}

?>