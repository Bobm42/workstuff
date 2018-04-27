<html>
<head>
</head>
<body>

<form action="function.php" method="post">
MPH <input type="number" name="speed" value="0">
<br>Miles <input type="number" name="distance" value="0">
<input type="submit" value="submit">
</form>

<?php

echo md5('jengba');
	echo "<br>";
echo md5('JENGbA');
	echo "<br>";

$pepper = "foIwUVmkKGrGucNJMOkxkvcQ79iPNzP5OKlbIdGPCMTjJcDYnR";

// Generate Hash
$password = "Wow. This is a super secret and super, super long password. Let's add some special ch4r4ct3rs a#d everything is fine :)";
$password_peppered = hash_hmac('sha256', $password, $pepper);
$hash = password_hash($password_peppered, PASSWORD_BCRYPT);

// Check
$input = substr($password, 0, 72);
$input_peppered = hash_hmac('sha256', $input, $pepper);

var_dump(password_verify($input_peppered, $hash));


$speede = $_POST['speed'];
$distancee = $_POST['distance'];

function bobtest($speed, $distance) {	
$dist = $distance / $speed;
return $dist;
}

if (bobtest(5, 2) > 9) {
	echo "<br>The speed of 5mph over 2 miles will take 10 minutes</br>";
} else {
	echo "<br>00h Jer corbyn<br>";
}
if (bobtest(10, 3) > 19) {
	echo "The speed of 10mph over 2 miles will take 20 minutes</br>";
}

echo bobtest($speede/60, $distancee);
echo " minutes";

bobtest(20, 2);

//echo $distancee / $speede;

function bobtesta($lenght, $width, $height) {	
$areaofcube = $lenght * $width * $height ;
return $areaofcube;
}

echo "<br> the area of a cube 5l 2w 1h is = ";
echo bobtesta(5, 2, 1);
echo "cm<sup>2</sup>";
echo "<br> the area of a cube 10l 2w 2h is = ";
echo bobtesta(10, 2, 2);
echo "cm<sup>2</sup>";
echo "<br> the area of a cube 15l 2w 3h is = ";;
echo bobtesta(15, 2, 3);
echo "cm<sup>2</sup>";
echo "<br> the area of a cube 20l 2w 4h is = ";
echo bobtesta(20, 2, 4);
echo "cm<sup>2</sup>";

$name[]='bob';
$name[]='bert';
$name[]='frank';
$name[]='goodle';

foreach ($name as $names) {
	echo "<br>";
	echo $names;

}

?>

</body>
</html>