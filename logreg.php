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
	 body .cont {margin:20px;}
	 
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
	
	<div style="margin:0px;background-color: tan;border: 3px solid;">
	<div style="position:relative;left:33%;width: 40%;">
	<img src="1.png" height="100" width="100">
	<span style="text-align:center;font-family:Sayer;font-size: 45pt;position: relative;
top: 10px;" > Discussion forum </span>
	</div></div>

<div class="container" style="width:1200px;height:450px;margin-top:60px;">
	<div id="logout" align=center style="visibility:hidden;"> <span class="label label-important">You Are SuccessFully Logged Out</span></div> 
<div class="container" style="padding:20px;width:400px;background-color:#c9c9c9;border-radius: 10px;float:left;height:336px;">

		<div >
		<form name="input" action="login.php" method="post">
		<h3>Login</h3><br/>
				<label><h4>User Name <font color="RED">*</font></h4></label>
				<input type="text" name="name" >
				
				<label><h4>password  <font color="RED">*</font></h4></label>
				<input type="password" name="password">

				<br/><br/>
				<br/><button class="btn btn-success" type="submit">Login</button>
				<span class="label label-important" id="wrong" style="visibility:hidden;">Ops..Incorrect Password or Username</span>
		</form>	
		</div>

</div>

<div class="container" style="padding:20px;width:400px;background-color:#c9c9c9;border-radius: 10px;float:right;height: 336px;">

		<div >
		<form name="input" action="register.php" method="post">
		<h3>Register</h3>
				<label><h4>User Name  <font color="RED">*</font></h4></label>
				<input type="text" name="name" >
				
				<label><h4>password  <font color="RED">*</font></h4></label>
				<input type="password" name="password">

				<label><h4>Email :</h4></label>
				<input type="email" name="mail">
				<br/><button class="btn btn-success" type="submit">Register</button>
                                <span class="label label-important" id="wrongr" style="display:none;"> Ops.. Please Use [A-Z], [a-z] or [0-9]</span>
								<span id="reged" class="label label-important"  style="display:none;"> Ops.. You are already registered </span>
		</form>	
		</div>

</div>
</div>

           
  <div  class="footer" style="position:absolute;bottom:0px;width:100%;background-color:#D2B48C;font-weight:bold;font-family:Sayer;" >
				<hr style="height:2px;border:0;margin: 0px 0 5px 0;" color="BLACK">
				<p class="pull-left" style="padding-left:30px;">&copy; 2013 Copyrights, Inc. </p>
				<p class="pull-right" style="padding-right:30px;">BHUMIK SAPARA</p>		
			</div>

</body>
  
  
</html>



<?php
session_start();
if(isset($_SESSION['error']))
{
if($_SESSION['error']==1)
echo "<script>document.getElementById(\"wrong\").style.visibility=\"\";;</script>";

if($_SESSION['error']==2)
echo "<script>document.getElementById(\"logout\").style.visibility=\"\";;</script>";

if($_SESSION['error']==5)
echo "<script>document.getElementById(\"wrongr\").style.visibility=\"\";;</script>";

if($_SESSION['error']==7)
echo "<script>document.getElementById(\"reged\").style.display=\"\";;</script>";

session_destroy();
}

?>				