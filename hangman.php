<?php

function hour() {
	$gdate = getdate();
	print_r ($gdate['hours']);
}

function mins() {
	$gdate = getdate();
	print_r ($gdate['minutes']);
}

function secs() {
	$gdate = getdate();
	print_r ($gdate['seconds']);
}

echo hour();
echo ":";
echo mins();
echo ":";
echo secs();


function roll () {
    return mt_rand(1,6);
}

echo "<br>";
echo roll();
echo "<br>";

$male = file_get_contents('male.txt');
$male = explode (',', $male);

$last = file_get_contents('last.txt');
$last = explode (',', $last);


//$male = explode('\n', file_get_contents('male.txt'));
//$last = explode('\n', file_get_contents('last.txt'));
 
shuffle($male);
shuffle($last);
for ($i = 0; $i <= 6; $i++) {
	echo "<br>";
    echo $male[$i] . ' ' . $last[$i];
}

	echo "<br>";
		echo "<br>";

$settings = file_get_contents('settings.txt');
$settings = explode(',', $settings);

$objectives = file_get_contents('objectives.txt');
$objectives = explode(',', $objectives);

$antagonists = file_get_contents('antagonists.txt');
$antagonists = explode(',', $antagonists);

$complications = file_get_contents('complications.txt');
$complications = explode(',', $complications);
 
shuffle($settings);
shuffle($objectives);
shuffle($antagonists);
shuffle($complications);
 
echo $settings[0] . ' ' . $objectives[0] . ' ' . $antagonists[0] . ' ' 
. $complications[0] . "<br />\n";

	echo "<br>";
	echo "<br>";

	$x = 1;
	while ($x <= 5) {
$suits = array (
    "Spades", "Hearts", "Clubs", "Diamonds"
);
 
$faces = array (
    "Two", "Three", "Four", "Five", "Six", "Seven", "Eight",
    "Nine", "Ten", "Jack", "Queen", "King", "Ace"
);

$deck = array();
 
foreach ($suits as $suit) {
    foreach ($faces as $face) {
        $deck[] = array ("face"=>$face, "suit"=>$suit);
    }
}

shuffle($deck);
 
$card = array_shift($deck);

echo $card['face'] . ' of ' . $card['suit'];
	echo "<br>";
$x++;
}

function bob() {
	$bob = array ("heightf"=>5,"heighti"=>10,"weight"=>101,"waist"=>36,"leglength"=>34,"speed"=>8,"arms"=>31);
	echo "<br>Height "; print_r ($bob['heightf']); echo " feet "; print_r ($bob['heighti']); echo " inches";
	echo "<br>Weight "; print_r ($bob['weight']); echo " kg.";
	echo "<br>Waist "; print_r ($bob['waist']); echo " cm.";
	echo "<br>Leg "; print_r ($bob['leglength']); echo " cm.";
	echo "<br>Arm "; print_r ($bob['arms']); echo " cm.";
	echo "<br>Speed "; print_r ($bob['speed']); echo " mph.";
}

echo bob();

function angela() {
	$angela = array ("witchness"=>10,"darkness"=>8,"spells"=>4,"powers"=>6,"flying"=>2);
	echo "<br>Witchness "; print_r ($angela['witchness']); echo "/10";
	echo "<br>Mood "; print_r ($angela['darkness']); echo "/10";
	echo "<br>Spells "; print_r ($angela['spells']); echo "/10";
	echo "<br>Powers ";print_r ($angela['powers']); echo "/10";
	echo "<br>Flying "; print_r ($angela['flying']); echo "/10";
}

echo "<br>";
echo angela();

function caleb() {
	$caleb = 10 * 50;
} 

?>