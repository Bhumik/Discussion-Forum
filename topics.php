<?phprequire("mhead.php");
$tbl_name="questions"; // Table name
$sql="SELECT DISTINCT topic FROM $tbl_name ORDER BY topic";
$result=mysql_query($sql);
$rtopic=mysql_query($sql);
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

	  .topics{float:left; margin:11px;width:160px;}
	 .container{width:100%;}
	 </style>
  </head>

  <body style="background-image:url(4.png)">
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<?php  require("head.php"); ?>
<div class="cont" >
	<div class="navbar">
		<div class="navbar-inner">
			<ul class="nav">
			<li><a href="index.php">Home</a></li>
			<li class="active"><a href="topics.php">Topics</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="contact.php">Contact </a></li>
			<li><a href="about.php">About Us</a></li>
		    </ul>
         </div>
		
		<ul class="breadcrumb">
			<li><a href="index.php">Home</a> <span class="divider">/</span></li>
			<li class="active">Topics</li>
		</ul>
	</div>
</div>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span2" >
				<ul class="nav nav-list well">
						<li class="nav-header">Topics</li>
						<?php
						$sql="SELECT DISTINCT topic FROM $tbl_name ORDER BY topic";
						$rtopic=mysql_query($sql);
						while($ptopic=mysql_fetch_array($rtopic)){?>
						<li ><a href="question.php?topic=<?echo $ptopic['topic']; ?>&pg=1"><?echo $ptopic['topic'];?></a></li>
						<?php } ?>
	<!--					
						<li class="divider"></li>
						<li><a href="#">javascript</a></li>
						<li class="active"><a href="#">jQuery</a></li>-->
				</ul> <br>
		
					<div class="well" style="height:55px;margin-bottom:0px;">
			<p >	Advertise Here<p>
			</div>		

</div>
		
		<div class="span10" >
					<div class="well ">
						<span>All Topics</span>
						<a href="#myModal" role="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal" >Add Topic</a>
		
						<div id="myModal" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" >X</button>
								<h3 id="myModalLabel">Add Topic</h3>
							</div>
							<form name="input" action="question.php" method="get">
							<div class="modal-body">
								
								<label>Enter Topic</label>
								<input type="text" name="topic" placeholder="Enter Your New topic here">
								<input type="text" name="pg" value="1" style="display:none;">
								
							</div>
							
							<div class="modal-footer">
									<button type="submit" class="btn btn-primary">ADD</button>
									<button class="btn" data-dismiss="modal" >Close</button>
							</div>
							</form>
						</div>
				    </div>
					
					<div class="container">
<?php
$pg=1;
while($rows=mysql_fetch_array($result)){
?>
						<a class="btn btn-info topics" href="question.php?topic=<?echo $rows['topic']; ?>&pg=<?echo $pg; ?>" ><?echo $rows['topic']; ?></a>
<?php 
}

mysql_close();
?>
					<div>
		</div>
	
	</div>
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