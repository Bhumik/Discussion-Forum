<?php

session_start();

if(!isset($_SESSION["name"]))
header("location:logreg.php");


$name=$_SESSION['name'];
$feed=$_GET['feed'];


$date=date("d/m/Y");
date_default_timezone_set('Asia/Kolkata');
$time = date('h:i:s a', time())."  ".$date;


$data="Name : ".$name."\r\nDate :  ".$time."\r\nFeed : ".$feed."\r\n\r\n";
$my_file = 'feedback.txt';
$handle = fopen($my_file, 'a+') or die('Cannot open file:  '.$my_file);
fwrite($handle, $data);
fwrite($handle,"\n");
$_SESSION['error']=3;

header("location:contact.php");
?>
