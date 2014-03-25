<?php

require("mhead.php");

$tbl_name="questions"; // Table name
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

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
			<li><a href="profile.php">Profile</a></li>
			<li class="active"><a href="contact.php">Contact </a></li>
			<li><a href="about.php">About Us</a></li>
		</ul>
  </div>
		<ul class="breadcrumb">
			<li><a href="#" >Home</a> <span class="divider">/</span></li>
			<li><a href="#" class="active">Contact Us</a> </li>

		</ul>
	</div>
</div>

<div id="ps1" class="container-fluid pass1">
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
		<form name="input" action="feedback.php" method="get">
		<h2>Contact Us</h2>
		<h6>Feel free to connect with Us...</h6>
			
				<br><br>
	<!--     	<label><h4>Name </h4></label>
				<input type="text" name="name" style="width:30%;">
				
				<label><h4>Email id</h4></label>
				<input type="email" name="mail" style="width:30%;">  -->
				
				<label><h4>Feedback / Suggestion</h4></label>
				<textarea  name="feed" rows="5" style="width:30%;"></textarea><br>
				<button type="submit" id="cpass" class="btn btn-success" style="width:10%;">SEND</button>
		</form>	
		</div>
	</div>
	
</div>

		<div id="ps2" class="pass2" style="display:none;">
		<div style="margin-left:38%;margin: 14% 0px 14% 38%;color:#00ff00;font-size:40px;width:300px;"><h4 class="well" ><i class="icon-ok"></i>&nbsp;&nbsp;Message Successfully Sent</h4></div>

		</div>



        
			<div  class="footer" style="position:absolute;bottom:0px;width:100%;background-color:#D2B48C;font-weight:bold;font-family:Sayer;" >
				<hr style="height:2px;border:0;margin: 0px 0 5px 0;" color="BLACK">
				<p class="pull-left" style="padding-left:30px;">&copy; 2013 Copyrights, Inc. </p>
				<p class="pull-right" style="padding-right:30px;">BHUMIK SAPARA</p>		
			</div>
			
			
			
<?php mysql_close(); ?>



 <script type="text/javascript">
$(document).ready(function(){
  $("#cpass").click(function(){
    $(".pass1").fadeOut(1000,"linear",function(){$(".pass2").fadeIn(1000);});
	
  });
});
</script>
<?php

if(isset($_SESSION['error']))
{
if($_SESSION['error']==3)
{echo "<script>document.getElementById(\"ps2\").style.display=\"\";document.getElementById(\"ps1\").style.display=\"none\";</script>";
 }
unset($_SESSION['error']);
}
?>
</body>
  
  
</html>