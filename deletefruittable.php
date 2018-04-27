<?php

include 'config.php';

$name = $_POST['Where'];
$noname = true;
$notname = mysqli_query($conn, "SELECT name from fruit WHERE name = '$name'");


 if ($name != $noname) {
	echo "Please enter some data";
	header("refresh:1;url=deletefruit.php");
} elseif ($notname->num_rows == 0) {
	echo "not on database";
	header("refresh:2;url=deletefruit.php");
} elseif ($result = mysqli_query($conn, "DELETE from fruit WHERE name = '$name'")) {
	echo "Processing delete..";
	header("refresh:2;url=deletefruit.php");
}	else {
	echo "naaa";
	header("refresh:2;url=deletefruit.php");
}


?>
