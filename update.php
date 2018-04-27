<html>
<head>
<title>Update pages</title>
<link rel="stylesheet" type="text/css" href="css/data.css">
</head>
<body>

<h1>Update Table</h1>
<form action="updatetable.php" method="post">
Which Table? : <select name="updatesql">
		<option value="fruit" name="fruit">Fruit</option>
		<option value="cars" name="cars">Cars</option>
		<option value="dogs" name="dogs">Dogs</option>
	</select><br><br>
<input type="submit" value="Update">
</form>

<h1>Add new</h1>
<form action="inserttable.php" method="post">
Which Table? : <select name="insertsql">
		<option value="fruit" name="fruit">Fruit</option>
		<option value="cars" name="cars">Cars</option>
		<option value="dogs" name="dogs">Dogs</option>
	</select><br><br>
<input type="submit" value="Insert">
</form>

<h1>Delete</h1>
<form action="deletedata.php" method="post">
Which Table? : <select name="deletesql">
		<option value="fruit" name="fruit">Fruit</option>
		<option value="cars" name="cars">Cars</option>
		<option value="dogs" name="dogs">Dogs</option>
	</select><br><br>
<input type="submit" value="Delete">
</form>

<p><a href="index.php">LOGOUT</a></p>

</body>
</html>
