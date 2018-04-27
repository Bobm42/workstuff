<?php

include 'config.php';

$name = $_POST['Where'];
$noname = true;
$notname = mysqli_query($conn, "SELECT name from dogs WHERE name = '$name'");


 if ($name != $noname) {
	echo "Please enter some data";
	header("refresh:1;url=deletedogs.php");
} elseif ($notname->num_rows == 0) {
	echo "Not on database";
	header("refresh:2;url=deletedogs.php");
} elseif ($result = mysqli_query($conn, "DELETE from dogs WHERE name = '$name'")) {
	echo "Processing delete..";
	header("refresh:2;url=deletedogs.php");
}	


?>