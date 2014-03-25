<?php


require("mhead.php");


$tbl_name="users"; // Table name

$name=$_SESSION['name'];
$age=$_POST['age'];
$mail=$_POST['mail'];
$contact=$_POST['contact'];
$area=$_POST['area'];

move_uploaded_file($_FILES["file"]["tmp_name"],"img/" . "$name.jpg");

$sql="UPDATE $tbl_name SET age='$age',mail='$mail',contact='$contact',area='$area',pic='$name.jpg' WHERE username='$name'";
$result=mysql_query($sql);

//echo "n:".$name."mail:".$mail."age".$age."cont:".$contact."area:".$area;

$_SESSION['error']==4;

header('location:profile.php');

?>




