<?php

$conn = mysqli_connect('localhost', 'root', '','test');
if (!$conn) {
	die('could not connect'. mysqli_error());
}

$conn2 = mysqli_connect('localhost', 'bob', '','test');
if (!$conn) {
	die('could not connect'. mysqli_error());	
}

?>
