<?php

require("mhead.php");

$tbl_name="questions"; // Table name
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

	  .social img{padding:8px 12px;}
	  .social .im{padding:12px;opacity:0.5;}
	  
	  .social img:hover{opacity:1;}
	  
	  .social a{text-decoration:none;}
	  .what em{font-weight: bold;font-style: italic;}
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
			<li><a href="contact.php">Contact </a></li>
			<li class="active"><a href="about.php">About Us</a></li>
		</ul>
  </div>
		<ul class="breadcrumb">
			<li><a href="#" >Home</a> <span class="divider">/</span></li>
			<li><a href="#" class="active">About Us</a> </li>

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
		
		<div class="span10">
			<table style="width:100%;font-family: trebuchet ms, helvetica, sans-serif;">
			<tr>
				<td><h2 style="margin:0px;">Bhumik Sapara</h2></td>
			</tr>
			
			<tr>
				<td >
					<img src="twitter.png"  class="img-polaroid" width="200" height="200" style="float:right;">
					<p class="what" style="float:left;font-size:12pt;">
						Wel Come...<br>

						<br><em>"Computer Engineering Student(&amp;Freelancer) with Creative thinking. addicted to internet..<br>for lots of fun, knowledge and Inspiration..."
						<br>"Takes initiative and effort in going the extra step"</em>
						<br><br>Currently pursuing Bachelor of Engineering in <em>Computer Engineering</em> Stream (3rd Year)
						at <br><em>Birla Vishvakarma Mahavidyalaya(BVM)Engineering College (Vidhyanagar,Gujarat,India).</em><br><br>
					
					</p>
					
				</td>
			</tr>
			
			<tr>
					<td>
					<div style="float:left;width:75%;">
					<h4 >What We Do</h4>
					<p class="what" style="font-size: 12pt;">Two cups <em>web design</em>, one cup <em>Application Devalopment</em>, and a dash of <em>print.</em><br><br>
					We do everything we can to build you a strong presence on the web.<br>From start to finish - we'll take your ideas and goals, and turn them into a finished product.
					</p>
					
					</div>
					
					<div style="float: right;padding: 8px;" class="well social">
					<p style="margin-bottom: 0px;">Socialize With Us...</p>
					<a href="https://www.facebook.com/bhumiksapara" target="_blank" ><img class="im" src="img/fb.png" width="30px" height="30" style="padding-left:17%;"></a>
					<a href="https://twitter.com/Bhumik_sapara" target="_blank" ><img class="im" src="img/twitter.png" width="30px" height="30"></a>
					<a href="http://www.linkedin.com/profile/view?id=135228687" target="_blank" ><img class="im" src="img/linkdin.png" width="30px" height="30"></a><br>
					<img src="img/mail.png" width="30px" height="30">saparabhumik@gmail.com<br>
					<img src="img/contact.png" width="30px" height="30">+91 9033545621
					</div>
					</td>
				
			</tr>
	
		</table>
	</div>
	
</div>

      </div>  
<!--            <div  class="footer" >
				<hr style="margin:15px 0 5px 0;">
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