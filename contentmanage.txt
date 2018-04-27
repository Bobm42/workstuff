<html>
<body>
<?php

$cmdir = "./CM/";
$scancm = scandir($cmdir);
$scancmb = scandir($cmdir, 1);

$count = 0;
if ($handle = opendir('./CM/')) {
while (false !== ($file = readdir($handle))) {
    if ($file != "." && $file != ".." 
//    && $file != "NOT-TO-BE-IN-1.php"
    && $file != "NOT-TO-BE-IN-2.html"
    && $file != "NOT-TO-BE-IN-3.jpg"
	&& substr($file,-strlen(".php")) != ".php" //if you don't want to include .html files, for instance
    && substr($file,-strlen(".html")) != ".html" //if you don't want to include .html files, for instance
    && substr($file,-strlen(".js")) != ".js" //if you don't want to include .js files, for instance
    && $file != ""
    ) {$count++;
//        print("<a href=CM\"".$file."\">".$file."</a><br />\n");
			echo "click here: "?><a href="./CM/<?php echo $file; ?>"><?php echo "filename: " . $file . "<br>"; ?></a><?php
    }
}
echo '<br /><br /><a href="..">Return</a>';
closedir($handle);
}

print_r($scancm);
echo "<br>";
print_r($scancmb);
echo "<br>";
if (is_dir($cmdir)){
  if ($dh = opendir($cmdir)){
    while (($file = readdir($dh)) !== false){
      echo "click here: "?><a href="./CM/<?php echo $file; ?>"><?php echo "filename: " . $file . "<br>"; ?></a><?php
    }
    closedir($dh);
  }
}
echo "<br>";
echo "Hello world ";
echo "<br>";

?>
</body>
</html>