<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="css/data.css"></head>
<body>

<?php

include 'hangmanData.php';


if  (isset ($_GET['waist'])) {
	echo $boba[3][0];
	echo " size is ";
	echo $boba[3][1];
	echo " inches or ";
	echo $boba[3][2];
	echo " cm ";
} 

if  (isset ($_GET['weight'])) {
	echo $boba[2][0];
	echo " total ";
	echo $boba[2][1];
	echo " lbs or ";
	echo $boba[2][2];
	echo " kgs ";
}	
	
if (isset ($_GET ['heightf'])) {
	echo " Height ";
	echo $boba[0][1];
	echo " feet ";
	echo $boba[1][1];
	echo " inches ";
	echo $boba[0][2];
	echo " cm ";
}

if (isset ($_GET ['leglength'])) {
	echo $boba[4][0];
	echo " feet ";
	echo $boba[4][1];
	echo " inches ";
	echo $boba[4][2];
	echo " cm ";
}

if (isset ($_GET ['speed'])) {
	echo $boba[5][0];
	echo " total speed ";
	echo $boba[5][1];
	echo " mph ";
	echo $boba[5][2];
	echo " kph ";
}

if (isset ($_GET ['arms'])) {
	echo $boba[6][0];
	echo " feet ";
	echo $boba[6][1];
	echo " inches ";
	echo $boba[6][2];
	echo " cm ";
}

if (isset ($_GET ['witchness'])) {
	echo $angelab[0][0];
	echo " points ";
	echo $angelab[0][1];
	echo "/10 ";
}

if (isset ($_GET ['darkness'])) {
	echo $angelab[1][0];
	echo " points ";
	echo $angelab[1][1];
	echo "/10 ";
}

if (isset ($_GET ['spells'])) {
	echo $angelab[2][0];
	echo " points ";
	echo $angelab[2][1];
	echo "/10 ";
}

if (isset ($_GET ['powers'])) {
	echo $angelab[3][0];
	echo " points ";
	echo $angelab[3][1];
	echo "/10 ";
}

if (isset ($_GET ['flying'])) {
	echo $angelab[4][0];
	echo " points ";
	echo $angelab[4][1];
	echo "/10 ";
}

?>

<input type="button" value="back" onclick="back()">
<script>
function back() {
	window.history.back()
}
</script>
</body>
</html>