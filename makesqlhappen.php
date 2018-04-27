<?php
session_start();
if(isset($_SESSION['log']))
{
	
//$selectOption = $_POST['grabsql'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Generate SQL</title>
<link rel="stylesheet" type="text/css" href="css/data.css">
<script>
console.log('Roberting'.length);
console.log(Math.floor((50 * 2) / (4 + 10)));
console.log(Math.abs((50 * 100) / (25 * 10)));
console.log(Math.tan(54));
console.log(Math.floor(Math.random() * Math.floor(100)));

function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}
console.log(getRandomInt(100));

Math.gcd = function() {
    if (arguments.length == 2) {
        if (arguments[1] == 0)
            return arguments[0];
        else
            return Math.gcd(arguments[1], arguments[0] % arguments[1]);
    } else if (arguments.length > 2) {
        var result = Math.gcd(arguments[0], arguments[1]);
        for (var i = 2; i < arguments.length; i++)
            result = Math.gcd(result, arguments[i]);
        return result;
    }
};

console.log(Math.gcd(28, 34, 42, 70, 96));
</script>
</head>

<body>

<h1>Make SQL happen</h1>

<form action="sqlhappen.php" method="post">
	<input type="hidden" name="sqlhappen1" value="sqlhappen1">
	<input type="submit" value="GO DOGS">
</form><br>

<form action="sqlhappen.php" method="post">
	<input type="hidden" name="sqlhappen2" value="sqlhappen2">
	<input type="submit" value="GO CARS">
</form><br>

<form action="sqlhappen.php" method="post">
	<input type="hidden" name="sqlhappen3" value="sqlhappen3">
	<input type="submit" value="GO FRUIT">
</form><br>

<p><a href="index.php">LOGOUT</a></p>

</body>
</html>

<?php

}
else
{
	echo "Please logon first";
	header("refresh:2;url=index.php");
}

?>