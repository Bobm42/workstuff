<?php

include 'config.php';

$name = $_POST['Where'];
$noname = true;
$notname = mysqli_query($conn, "SELECT name from cars WHERE name = '$name'");


 if ($name != $noname) {
	echo "Please enter some data";
	header("refresh:1;url=deletecars.php");
} elseif ($notname->num_rows == 0) {
	echo "Not on database";
	header("refresh:2;url=deletecars.php");
} elseif ($result = mysqli_query($conn, "DELETE from cars WHERE name = '$name'")) {
	echo "Processing delete..";
	header("refresh:2;url=deletecars.php");
}	


?>