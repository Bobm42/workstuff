<?php

function bob() {
	$bob = array ("heightf"=>5,"heighti"=>10,"weight"=>101,"waist"=>36,"leglength"=>34,"speed"=>8,"arms"=>31);
	echo "<br>Height "; print_r ($bob['heightf']); echo " feet "; print_r ($bob['heighti']); echo " inches";
	echo "<br>Weight "; print_r ($bob['weight']); echo " kg.";
	echo "<br>Waist "; print_r ($bob['waist']); echo " cm.";
	echo "<br>Leg "; print_r ($bob['leglength']); echo " cm.";
	echo "<br>Arm "; print_r ($bob['arms']); echo " cm.";
	echo "<br>Speed "; print_r ($bob['speed']); echo " mph.";
}


function angela() {
	$angela = array ("witchness"=>10,"darkness"=>8,"spells"=>4,"powers"=>6,"flying"=>2);
	echo "<br>Witchness "; print_r ($angela['witchness']); echo "/10";
	echo "<br>Mood "; print_r ($angela['darkness']); echo "/10";
	echo "<br>Spells "; print_r ($angela['spells']); echo "/10";
	echo "<br>Powers ";print_r ($angela['powers']); echo "/10";
	echo "<br>Flying "; print_r ($angela['flying']); echo "/10";
}

function caleb() {
	$caleb = 10 * 50;
	print_r ($caleb);
} 

function joe () {
	$joe = "music";
	print_r ($joe);
}

$boba = array 	( array ("heightf", 5, 180),
				 array ("heighti", 10, 25),
				 array ("weight", 210, 95),
				 array ("waist", 36, 100),
				 array ("leglength", 34, 96),
				 array ("speed", 8, 12),
				 array ("arms", 31, 72)
				);

$angelab = array (
				array ("witchness", 10),
				array ("darkness", 8),
				array ("spells", 4),
				array ("powers", 6),
				array ("flying", 2)
				);

?>