<?php

require("mhead.php");

$ansid=$_GET["id"];

$tblq="questions"; // Table name
$tbla="answers";



$result=mysql_query("SELECT * FROM questions  WHERE id=$ansid;");
$rows=mysql_fetch_array($result);


$view=$rows['view'];
$view=$view+1;
$sql="update $tblq set view='$view' WHERE id='$ansid'";
mysql_query($sql);

$result=mysql_query("SELECT * FROM answers WHERE question_id=$ansid ORDER BY question_id");

$sql=mysql_query("SELECT COUNT(*) FROM answers WHERE question_id=$ansid");
$k=mysql_fetch_array($sql);


?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Discussion Forum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="css/bootstrap.min.css" rel="stylesheet">
       <link rel="shortcut icon" href="favicon.gif"> 

	<style type="text/css">
	 body .cont {margin:0px;}
	 
	 body {font-family: trebuchet ms, helvetica, sans-serif;font-size:13pt;}
	 
       .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
		
        float: none;
      
	  }
	  .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
	  
	  .table th, .table td{line-height: 13px;}
	  
	  @font-face {
      font-family: Sayer;
      src: url(Sayer.ttf);}

	code{min-height: 55px;margin: 0px;padding:0px;}
	 </style>
  </head>

  <body style="background-image:url(4.png)">
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<?php  require("head.php"); ?>
<div class="cont">
	<div class="navbar">
		<div class="navbar-inner">
			<ul class="nav">
			<li><a href="index.php">Home</a></li>
			<li><a href="topics.php">Topics</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="contact.php">Contact </a></li>
			<li><a href="about.php">About Us</a></li>
		</ul>
  </div>
		<ul class="breadcrumb">
			<li><a href="index.php">Home</a> <span class="divider">/</span></li>
			<li><a href="topics.php">Topics</a> <span class="divider">/</span></li>
			<li class="active" style="font-weight:bold;font-size:15px;" ><? echo $rows['topic']; ?></li>
			<a  class="btn btn-small btn-info pull-right" style="margin-top:-3px;font-weight:bold;font-size:15px;" href="topics.php">Other Topics</a>
		</ul>
	</div>
</div>

<div class="container-fluid" style="padding-bottom: 30px;">
	<div class="row-fluid">
		<div class="span2">
				<ul class="nav nav-list well">
						<li class="nav-header">Topics</li>
						<?php
						$sql="SELECT DISTINCT topic FROM questions ORDER BY topic";
						$rtopic=mysql_query($sql);
						while($ptopic=mysql_fetch_array($rtopic)){?>
						<li ><a href="question.php?topic=<?echo $ptopic['topic']; ?>&pg=1"><?echo $ptopic['topic'];?></a></li>
						<?php } ?>
				</ul> <br>

			<div class="well" style="height:55px;margin-bottom:0px;">
			<p >	Advertise Here<p>
			</div>		
		</div>

		<div class="span10">
<table style="width:100%;margin: 0px 0 20px 0 ;background-color:#cacaca;border-radius: 10px 10px 10px 10px;">
  <tr class="info" style="height:30px;border-radius: 8px;">
    <td rowspan="2"  style="width:5%;font-size:30px;">&nbsp;&nbsp;Q.</td>
    <td rowspan="2"  style="width:75%;padding:0 5px 0 5px;border-right:1px solid #ffffff;">
	<code style="min-height: initial;font-size: 13px;margin: 0px;padding: 0px;font-weight: bold;font-family: verdana;"><?php echo htmlspecialchars($rows['detail']); ?></code>
	</td>
    
	<td  style="width:20%;padding-left:10px;text-transform:capitalize;">By <a href="memprofile.php?name=<? echo $rows['username']; ?>"> <? echo $rows['username']; ?></a></td>
  </tr>
<tr class="info">
    <td style="padding-left:10px;"><? echo $rows['datetime']; ?></td>
  </tr>

</table>
<h4>Answers : (<? echo $k[0]; ?>)</h4>
<table class="table" style="width:100%;margin:0px 0 0 0 ;">

<?php
$k=1;
while($row=mysql_fetch_array($result))
{
?>

  <tr style="height:30px;border-radius: 8px;">
    <td rowspan="2"  style="width:5%;">A.<? echo $k;?></td>
    <td rowspan="2"  style="width:75%;white-space:pre;"><code><?php echo htmlspecialchars($row['a_answer']); ?></code></td>
    <td  style="width:20%;text-transform:capitalize;">By <a href="memprofile.php?name=<? echo $row['username']; ?>"><? echo $row['username']; ?></a></td>
  </tr>
  <tr >
	<td style="padding-left:10px;"><? echo $row['a_datetime']; ?></td>
  </tr>

<?php
$k++;
}
mysql_close();
?>
<!-- ####################################################################### -->

</table>


		<div class="well well-small" style="margin:20px 0px 10px 0;padding-bottom: 35px;">
			<form name="input" action="addans.php" method="get">
				<textarea name="answer" placeholder="Add Your Answer Here.. ::" style="width:98%;white-space: pre;" onkeyup='this.rows = (this.value.split("\n").length||1);'></textarea>
				
				<input type="hidden" name="id" value="<? echo $ansid ;?>">
				<button type="submit" class="btn btn-info btn-small pull-right" style="width:100px;margin-right:10px">Add Answer</button>
			</form>
		</div>		

		</div>
	</div>
	
</div>

         
  <!--          <div  class="footer">
				<hr>
				<p class="pull-left" style="padding-left:30px;">&copy; 2013 Copyrights, Inc. </p>
				<p class="pull-right" style="padding-right:30px;"><a href="#">BHUMIK SAPARA</a></p>		
			</div>
 -->
 
			<div  class="footer" style="position: fixed;width: 100%;bottom: 0px;height: 36px;background-color:#D2B48C;font-weight:bold;font-family:Sayer;" >
				<hr style="height:2px;border:0;margin: 0px 0 5px 0;" color="BLACK">
				<p class="pull-left" style="padding-left:30px;">&copy; 2013 Copyrights, Inc. </p>
				<p class="pull-right" style="padding-right:30px;">BHUMIK SAPARA</p>		
			</div>



</body>
  
  
  </html>