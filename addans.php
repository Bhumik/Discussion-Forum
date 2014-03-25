<?php

require("mhead.php");

$qid=$_GET['id'];
$name=$_SESSION['name'];
$ans=$_GET['answer'];


$date=date("d/m/Y");
date_default_timezone_set('Asia/Kolkata');
$time = $date."  ".date('h:i:s a', time());


$tbl_name="answers"; // Table name


$ans =mysql_real_escape_string($ans);



$sql="INSERT INTO $tbl_name(question_id,username,a_answer,a_datetime)
VALUES ('$qid','$name','$ans','$time')";
// OREDER BY id DESC is order result by descending
$result=mysql_query($sql);

$result=mysql_query("SELECT * FROM questions WHERE id=$qid");
$rows=mysql_fetch_array($result);

$reply=$rows['reply'];
$reply=$reply+1;
$sql="update questions set reply='$reply' WHERE id='$qid'";
mysql_query($sql);

//echo "ans : ".$ans1."   newANS   :  ".$ans;

header('location:answer.php?id='.$qid);
?>