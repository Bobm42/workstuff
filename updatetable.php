<html>
<head>
<title>Updated</title>
<link rel="stylesheet" type="text/css" href="css/data.css">
</head>
<body>

<?php
   $option = isset($_POST['updatesql']) ? $_POST['updatesql'] : false;
		echo $option;
   if ($option == "fruit") {
      header("refresh:1;url=updatefruit.php");
   } elseif ($option == "dogs"){
		header("refresh:1;url=updatedogs.php");
   } elseif ($option == "cars") {
		header("refresh:1;url=updatecars.php");
   }

  
  
?>

  update now..

</body>
</html>
