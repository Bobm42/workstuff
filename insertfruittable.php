<?php

$name = $_POST['name'];
$type = $_POST['type'];
$colour = $_POST['colour'];
$country = $_POST['country'];

include 'config.php';


if (!empty($_POST['name']) == false) {
				echo "Please enter name!<br>";
		header("refresh:1;url=insertfruit.php");
} 

if (!empty($_POST['type']) == false) {
				echo "Please enter type!<br>";
		header("refresh:1;url=insertfruit.php");
} 

if (!empty($_POST['colour']) == false) {
				echo "Please give me a colour!<br>";
		header("refresh:1;url=insertfruit.php");
}

if (!empty($_POST['country']) == false) {
				echo "Please give me a country!";
		header("refresh:1;url=insertfruit.php");
}

	
if (!empty($_POST['name'] and $_POST['type'] and $_POST['colour'] and $_POST['country']) == true) {
		$result = mysqli_query($conn, "INSERT into fruit (name, type, colour, country) VALUES ('$name', '$type', '$colour', '$country')");
		echo "INSERTED";
	} 


header("refresh:1;url=insertfruit.php");

?>