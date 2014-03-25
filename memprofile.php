<?php


require("mhead.php");
$name=$_GET['name'];

$tbl_name="users"; // Table name

$result=mysql_query("SELECT * FROM $tbl_name WHERE username='$name'");
$row=mysql_fetch_array($result);

$q=$a=0;

$sql=mysql_query("SELECT * FROM questions WHERE username='$name'");
$q=mysql_num_rows($sql);

$sql=mysql_query("SELECT * FROM answers WHERE username='$name'");
$a=mysql_num_rows($sql);

 if($a > 0){$k2=mysql_fetch_array($sql);}
 if($q > 0){$k2=mysql_fetch_array($sql);}
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
	  @font-face {
      font-family: Sayer;
      src: url(Sayer.ttf);}

	  
	 </style>
  </head>

  <body style="background-image:url(4.png)">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-latest.js"></script>
	
	
		<?php  require("head.php"); ?>
<div class="cont">
	<div class="navbar">
		<div class="navbar-inner">
			<ul class="nav">
			<li><a href="index.php">Home</a></li>
			<li><a href="topics.php">Topics</a></li>
			<li class="active"><a href="profile.php">Profile</a></li>
			<li><a href="contact.php" >Contact </a></li>
			<li><a href="about.php">About Us</a></li>
		</ul>
  </div>
		<ul class="breadcrumb">
			<li><a href="#" >Home</a> <span class="divider">/</span></li>
			<li><a href="#" class="active">Profile</a> </li>

		</ul>
	</div>
</div>

<div class="container-fluid">
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
		
		<div class="span10 pass1">
			<table style="width:100%;">
			<tr>
				<td><span style="font-weight:bold;font-size:25px;">Profile</span>
			<tr/>
			
			<tr>
				<td>
					<div  style="float:left;width:20%;" class="span2"> <img src="img/<?echo $row['pic'];?>"  class="img-polaroid" width="200" height="200">
					</div>
				
				
					<div class="span8" style="float:left;width:80%;">
					<table class="table">
					<tr><td >Name : </td> <td style="text-transform:capitalize;"><? echo $name; ?></td></tr>
					<tr><td>Age : </td> <td><? echo $row['age']; ?></td></tr>
					<tr><td>E-Mail : </td> <td><? echo $row['mail'];?></td></tr>
					<tr><td>Contact : </td> <td><? echo $row['contact'];?></td></tr>
					<tr><td>Area : </td> <td><? echo $row['area'];?></td></tr>
					<tr><td></td> <td></td></tr>
					</table>
					</div>
				</td>
			</tr>
			
			<tr>
				<table class="table">
				<th>Activity</th>
				
				<tr><th>Question Asked</th><th>Question Answered </th></tr>
				<tr><td><?echo $q;?></td><td><?echo $a;?></td></tr>
				</table>	
			</tr>
			
		</table>
		</div>

</div>
</div>
          
<!--            <div  class="footer" style="position:absolute;width:100%;bottom:0px;" >
				<hr>
				<p class="pull-left" style="padding-left:30px;">&copy; 2013 Copyrights, Inc. </p>
				<p class="pull-right" style="padding-right:30px;"><a href="#">BHUMIK SAPARA</a></p>		
			</div>

-->
  <div  class="footer" style="position:absolute;bottom:0px;width:100%;background-color:#D2B48C;font-weight:bold;font-family:Sayer;" >
				<hr style="height:2px;border:0;margin: 0px 0 5px 0;" color="BLACK">
				<p class="pull-left" style="padding-left:30px;">&copy; 2013 Copyrights, Inc. </p>
				<p class="pull-right" style="padding-right:30px;">BHUMIK SAPARA</p>		
			</div>


<?php mysql_close(); ?>
 
</body>
  
  
</html>