<?php
session_start();	
?>
<!DOCTYPE html>
<html>
<head>
<title>Please Logon</title>
<link rel="stylesheet" type="text/css" href="css/data.css">
</head>
<body>

<h1>Logon</h1>
		<table>	
			<form action="login.php" method="post">
					<tr><td>Username :</td><td>	<input type="text" name="Uname"></td></tr>
					<tr><td>Password :</td><td> <input type="password" name="Pword"></td></tr>
				<tr><td></td><td><input type="submit" value="Login"></td></tr>
			</form>
		</table>

</body>
</html>

<?php
session_destroy();	
?>