<html>
<head>
<title>Insert</title>
<link rel="stylesheet" type="text/css" href="css/data.css">
</head>
<body>

<?php
   $option = isset($_POST['insertsql']) ? $_POST['insertsql'] : false;
   echo $option;
   if ($option == "fruit") {
      header("refresh:1;url=insertfruit.php");
   } elseif ($option == "dogs"){
		header("refresh:1;url=insertdogs.php");
   } elseif ($option == "cars") {
		header("refresh:1;url=insertcars.php");
   }

?>

 add now.. 

</body>
</html>