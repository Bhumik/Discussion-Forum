<?php


require("mhead.php");


$que=$_GET['question'];
$name=$_SESSION['name'];
$topic=$_GET['topic'];


$date=date("d/m/Y");
date_default_timezone_set('Asia/Kolkata');
$time = date('h:i:s a', time());



$tbl_name="questions"; // Table name
$sql="INSERT INTO $tbl_name (topic,detail,username,datetime)
VALUES ('$topic','$que','$name','$date')";

$result=mysql_query($sql);


//echo "que: ".$que."  name: ".$name."  topic: ".$topic."  date: ".$date;

$sql=mysql_query("SELECT COUNT(id) FROM questions WHERE topic='$topic'");
$k=mysql_fetch_array($sql);
$k=floor(($k[0]-1)/10)+1;
echo $sql;

header('location:question.php?topic='.$topic.'&pg='.$k);  
?>