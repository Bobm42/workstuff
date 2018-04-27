<?php

$name = $_POST['name'];
$breed = $_POST['breed'];
$colour = $_POST['colour'];


include 'config.php';

if (!empty($_POST['name']) == false) {
				echo "Please enter name!<br>";
		header("refresh:1;url=insertdogs.php");
} 

if (!empty($_POST['breed']) == false) {
				echo "Please enter type!<br>";
		header("refresh:1;url=insertdogs.php");
} 

if (!empty($_POST['colour']) == false) {
				echo "Please give me a colour!<br>";
		header("refresh:1;url=insertdogs.php");
}


if (!empty($_POST['name'] and $_POST['breed'] and $_POST['colour']) == true) {
	$result = mysqli_query($conn, "INSERT into dogs (name, breed, colour) VALUES ('$name', '$breed', '$colour')");
	echo "INSERTED";
	
}

header("refresh:1;url=insertdogs.php");

?>