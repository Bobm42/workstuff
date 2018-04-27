<!DOCTYPE html>
<html>
<head>
<title>Page Reference</title>
<link rel="stylesheet" type="text/css" href="css/data.css">
<script>
/*	function push ()(
 windows.location = 'hangmanSee.php';
)*/
</script>
</head>
<body>

<?php

include 'hangmanData.php';

echo angela();
echo "<br>";
echo bob();
echo "<br>";
echo caleb();
echo "<br>";
echo joe();

if (isset ($_GET ['heightf'])) {
	echo "<br>";
	echo $boba[5][0];
	echo " total speed ";
	echo $boba[5][1];
	echo " mph ";
	echo $boba[5][2];
	echo " kph ";
}

?>
<br>
<a href="hangmanSee.php?<?php echo $boba[0][0]; ?>=<?php echo $boba[0][1]; ?>">Height</a>
<br>
<a href="hangmanSee.php?<?php echo $boba[2][0]; ?>=<?php echo $boba[2][1]; ?>">Weight</a>
<br>
<a href="hangmanSee.php?<?php echo $boba[3][0]; ?>=<?php echo $boba[3][1]; ?>">Waist</a>
<br>
<a href="hangmanSee.php?<?php echo $boba[4][0]; ?>=<?php echo $boba[4][1]; ?>">Legs</a>
<br>
<a href="hangmanSee.php?<?php echo $boba[6][0]; ?>=<?php echo $boba[6][1]; ?>">Arms</a>
<br>
<a href="hangmanSee.php?<?php echo $boba[5][0]; ?>=<?php echo $boba[5][1]; ?>">Speed</a>
<br>
<br>
<button class="button2" onclick="location.href='hangmanSee.php?<?php echo $boba[0][0]; ?>=<?php echo $boba[0][1]; ?>';">Height</button>
<button class="button2" onclick="location.href='hangmanSee.php?<?php echo $boba[2][0]; ?>=<?php echo $boba[2][1]; ?>';">Weight</button>
<button class="button2" onclick="location.href='hangmanSee.php?<?php echo $boba[3][0]; ?>=<?php echo $boba[3][1]; ?>';">Waist</button>
<button class="button2" onclick="location.href='hangmanSee.php?<?php echo $boba[4][0]; ?>=<?php echo $boba[4][1]; ?>';">Legs</button>
<button class="button2" onclick="location.href='hangmanSee.php?<?php echo $boba[6][0]; ?>=<?php echo $boba[6][1]; ?>';">Arms</button>
<button class="button2" onclick="location.href='hangmanSee.php?<?php echo $boba[5][0]; ?>=<?php echo $boba[5][1]; ?>';")>Speed</button>
<br><br>
<button class="button2" onclick="location.href='hangmanSee.php?<?php echo $angelab[0][0]; ?>=<?php echo $angelab[0][1]; ?>';")>Witch</button>
<button class="button2" onclick="location.href='hangmanSee.php?<?php echo $angelab[1][0]; ?>=<?php echo $angelab[1][1]; ?>';")>Dark</button>
<button class="button2" onclick="location.href='hangmanSee.php?<?php echo $angelab[2][0]; ?>=<?php echo $angelab[2][1]; ?>';")>Spells</button>
<button class="button2" onclick="location.href='hangmanSee.php?<?php echo $angelab[3][0]; ?>=<?php echo $angelab[3][1]; ?>';")>Powers</button>
<button class="button2" onclick="location.href='hangmanSee.php?<?php echo $angelab[4][0]; ?>=<?php echo $angelab[4][1]; ?>';")>Flying</button>
</body>
</html>