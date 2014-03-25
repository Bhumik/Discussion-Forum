<?php
require("mhead.php");
$tbl_name="questions"; // Table name
$sql="SELECT * FROM $tbl_name ORDER BY id DESC LIMIT 0,10";
$result=mysql_query($sql);
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
	  .btn-info
	  {width:200px;font-size:20px;}
	  
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
			<li class="active"><a href="#">Home</a></li>
			<li><a href="topics.php">Topics</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="contact.php">Contact </a></li>
			<li><a href="about.php">About Us</a></li>
		</ul>
  </div>
		<ul class="breadcrumb">
			<li><a href="#" class="active">Home</a> <span class="divider">/</span></li>
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
			<table class="table table-hover">
              <thead>
                <tr>
                  <th style="width:4%"></th>
                  <th style="width:43%">Recent 10 Questions</th>
                  <th style="width:17%">Topics</th>
                  <th style="width:14%">Asked By</th>
                  <th style="width:6%">Views</th>
				  <th style="width:6%">Replies</th>
				  <th style="width:10%">Date</th>
                </tr>
              </thead>
              <tbody>

<?php
$nr=1;
 while($rows=mysql_fetch_array($result)){

?>
                <tr>
                  <td><? echo $nr ?></td>
                  <td><a href="answer.php?id=<? echo $rows['id']; ?>" style="color: black;text-decoration: none;">
				  <pre style="font-size: 13px;margin: 0px;padding: 0px;font-weight: bold;font-family: verdana;"><?php echo htmlspecialchars($rows['detail']); ?></pre></a>
				  </td>
                  <td><a href="question.php?topic=<?echo $rows['topic']; ?>&pg=1" style="color: black;text-decoration: none;"> <? echo $rows['topic']; ?> </a></td>
		  <td><a href="memprofile.php?name=<? echo $rows['username']; ?>" style="color: black;text-decoration: none;"> <? echo $rows['username']; ?> </a></td>
		  <td><? echo $rows['view']; ?></td>
                  <td><? echo $rows['reply']; ?></td>
				  <td><? echo $rows['datetime']; ?></td>
                </tr>
<?php
$nr++;
}

mysql_close();
?>
			  </tbody>
			</table>
				
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