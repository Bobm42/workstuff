<html>
<head>
<title>Insert</title>
<link rel="stylesheet" type="text/css" href="css/data.css">
</head>
<body>

<?php
   $option = isset($_POST['deletesql']) ? $_POST['deletesql'] : false;
   echo $option;
   if ($option == "fruit") {
      header("refresh:1;url=deletefruit.php");
   } elseif ($option == "dogs"){
		header("refresh:1;url=deletedogs.php");
   } elseif ($option == "cars") {
		header("refresh:1;url=deletecars.php");
   }

?>

 delete now.. 

</body>
</html>