<?php
session_start();
include 'config.php';


if(empty($_POST['Uname'])) {
	header("Location:index.php");
}

if(empty($_POST['Pword'])) {
	header("Location:index.php");
}

$Uname = $_POST['Uname'];
$Pword = mysqli_real_escape_string($conn, $_POST['Pword']);
$Pword = md5($Pword);


$result = mysqli_query($conn, "SELECT * FROM `login` WHERE `Uname` = '$Uname' AND `Pword` = '$Pword'");
$count = mysqli_num_rows($result);

if($count==1){
	echo "login success";
	$_SESSION['log']=1;
	header("refresh:2;url=welcome.php");
} elseif ($count==2){
	echo "login success";
	$_SESSION['log']=1;
	header("refresh:2;url=welcome2.php");
}else{
	echo "incorrect logon";
	header("refresh:2;url=index.php");
}
	
?>
