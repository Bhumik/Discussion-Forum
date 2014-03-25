<?php


require("mhead.php");

$pass=$_POST['pass'];
$name=$_SESSION["name"];

$date=date("d/m/Y");
date_default_timezone_set('Asia/Kolkata');
$time = date('h:i:s a', time())."  ".$date;

$tbl_name="users"; // Table name

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$sql="UPDATE users SET password=$pass WHERE username='$name'"; 


$result=mysql_query($sql);

$_SESSION['error']=6;

echo "name : ".$name."  Pass : ".$pass;
header('location:profile.php');
?>